<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User_information;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class TransactionController extends Controller
{

    public function index()
    {
        $userinformations = User_information::join('transactions', 'user_informations.id', '=', 'transactions.sender_id')->select('user_informations.*')->get();
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
        $validator = Validator::make($request->all(), [
            'ammount' => 'required',
            'description' => 'required',
            'sender_id' => 'required_with:auth()->user()->id',
            'reciever_id' => 'required',/* |'unique:user_informations, id' */
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
        $ammount = Transaction::Select($request->ammount);
        $reciever = Transaction::Select($request->reciever_id);
        $sender = Transaction::Select($request->sender_id);
        // dd($ammount, $reciever, $sender);
        DB::transaction(function ($ammount, $reciever, $sender) {
            $sender = DB::update('update customers set current_balance = current_balance - '.$ammount.' where id = '.$sender);
            $reciever = DB::update('update customers set current_balance = current_balance + '.$ammount.' where id = '.$reciever);
        })->withErrors($validator);
        Transaction::create($request->all());
        return redirect()->route('transactions.index', compact('ammount', 'reciever', 'sender'))->with('Success', 'Transaction request is successfully accepted');
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
        $request->validate([
            'ammount' => 'required',
            'description' => 'required',
            'sender_id' => 'required',
            'reciever_id' => 'required',
        ]);
        $transaction->update($request->all());
        return redirect()->route('transactions.index')->with('Success', 'Transaction updated successfully');
    }


    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index')->with('Success', 'Transaction record deleted successsfully');
    }
}
