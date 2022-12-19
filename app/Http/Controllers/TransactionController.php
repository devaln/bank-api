<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\User_information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{

    public function index()
    {
        $userinformations = User_information::join('transactions', 'user_informations.id', '=', 'transactions.sender_id')->select('user_informations.*')->get();
        // $customers = Transaction::join('customers', 'customers.id', '=', 'transactions.sender_id')->select('user_informations.*')->get();
        // dd($userinformations);
        $transactions = Transaction::latest()->paginate(10);
        return view('transactions.index', compact('transactions'))->with('i',(request()->input('page', 1)-1)*10);
    }


    public function create()
    {
        $reciever = Transaction::find()->reciever_id;
        $customers = Customer::findorfail($reciever);
        $employees = Employee::find($reciever)->customer->current_balance - ammount;

        if ($customers) {
            $customers->current_balance = $employees;
            $customers->save();
        }

        $userinformations = User_information::all();
        return view('transactions.create', compact('userinformations'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ammount' => 'required',
            'description' => 'required',
            'sender_id' => 'required',
            'reciever_id' => 'required'/* |'unique:user_informations, id' */,
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
        Transaction::create($request->all());
        return redirect()->route('transactions.index')->with('Success', 'Transaction request is successfully accepted');
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
