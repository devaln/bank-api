<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    
    public function index()
    {
        $transactions = Transaction::latest()->paginate(10);
        return view('transactions.index', compact('transactions'))->with('i',(request()->input('page', 1)-1)*10);
    }


    public function create()
    {
        return view('transactions.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'debit_ammount'=>'required',
            'credit_ammount'=>'required',
            'current_balance'
        ]);
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
            'debit_ammount'=>'required',
            'credit_ammounts'=>'required',
            'current_balance'
        ]);
        $transaction->update($request->all());
        return redirect()->route('transactions.index')->with('Success', 'Transaction updated successfully');
    }


    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index')->with('Success', 'Transaction record deleted successsfully');
    }

    public function currenttransaction(Transaction $transaction)
    {
        // $transaction->delete();
        return view('transactions.trans', compact('transaction'));
    }

}
