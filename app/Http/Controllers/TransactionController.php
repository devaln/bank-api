<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\User;
use App\Models\User_information;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class TransactionController extends Controller
{

    public function index()
    {
        $userinformations = User_information::join('transactions', 'user_informations.id', '=', 'transactions.reciever_id')->select('user_informations.*')->get();
        // dd($userinformations);
        $transactions = Transaction::latest()->paginate(10);
        return view('transactions.index', compact('transactions'))->with('i',(request()->input('page', 1)-1)*10);
    }


    public function create()
    {
        $userinformations = User_information::all();
        return view('transactions.create', compact('userinformations'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'ammount' => 'required',
            'description' => 'required',
            'sender_id' => 'required',
            'reciever_id' => 'required',/* |'unique:user_informations, id' */
        ]);
        $sender_id = Auth::user()->id;
        $reciever_id = $request->reciever_id;
        $ammount = $request->ammount;
        // $card_status = DB::select('select status from cards where id = '.$sender_id.'');
        // if($card_status < 1){
        //     return redirect()->route('transactions.index')->with('Success', 'Your Card Is Inactive to Make a Transaction');
        // }
        // else{
            // $sender = Customer::find('id', $sender_id);
            // $sender->current_balance = ($sender->current_balance - $ammount);
            // // $sender->save();
            // $reciever = Customer::find('id', $reciever_id);
            // $reciever->current_balance = ($reciever->current_balance + $ammount);
            // $reciever->save();
            /* Older type of excecution */
            $sender = DB::update('update customers set current_balance = current_balance - '.$ammount.' where id ='.$sender_id.'');
            $reciever = DB::update('update customers set current_balance = current_balance + '.$ammount.' where id ='.$reciever_id.'');
            // $reciever = DB::update('update customers set current_balance = 50000');
            // dd($card_status);

            dd($sender, $reciever);
            Transaction::create($request->all());
            return redirect()->route('transactions.index')->with('Success', 'Transaction Successfull');
        // }
    }


    public function show(Transaction $transaction)
    {
        return view('transactions.show', compact('transaction'));
    }


    public function edit(Transaction $transaction)
    {
        return view('transactions.edit', compact('transaction'));
    }


    public function update(Request $request, Transaction $transaction)
    {
        $validator = validator::make($request->all(),[
            'ammount' => 'required',
            'description' => 'required',
            'sender_id' => 'required',
            'reciever_id' => 'required',
        ]);
        // dd($validator->fails());
        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return redirect()->route('transactions.create')
                ->withErrors($validator)
                ->withInput();
            }
        }
        $transaction->update($request->all());
        return redirect()->route('transactions.index')->with('Success', 'Transaction updated successfully');
    }


    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index')->with('Success', 'Transaction record deleted successsfully');
    }
}
