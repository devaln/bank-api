<?php

namespace App\Http\Controllers;

use App\Models\Transaction_Details;
use Illuminate\Http\Request;

class TransactionDetailsController extends Controller
{

    public function index()
    {
        $transaction_details = Transaction_Details::latest()->paginate(10);
        return view('transactions_details.index', compact('transaction_details'))->with('i', (request()->input('page', 1)-1)*10);
    }

    public function create()
    {
        return view('transactions_details.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'process'=>'required',
        ]);
        Transaction_Details::create($request->all());
        return redirect('transactions_details.index')->with('Success', 'Transaction Created Successfully');
    }


    public function show(Transaction_Details $transaction_Details)
    {
        return view('transactions_details.show', compact('transaction_Detail'));
    }


    public function edit(Transaction_Details $transaction_Details)
    {
        return view('transactions_details.edit', compact('transaction_Detail'));
    }


    public function update(Request $request, Transaction_Details $transaction_Details)
    {
        $request->validate([
            'process' => 'required',
        ]);
        $transaction_Details->update($request->all());
        return redirect('transactions_details.index', compact('transaction_Detail'))->with('Success', 'Transaction detail are updated successfully');
    }


    public function destroy(Transaction_Details $transaction_Details)
    {
        $transaction_Details->delete();
        return redirect('transactions_details.index', compact('transaction_details'))->with('Success', 'Transaction deleted Successsfully');
    }
}
