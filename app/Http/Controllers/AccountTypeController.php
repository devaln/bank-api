<?php

namespace App\Http\Controllers;

use App\Models\Account_type;
use Illuminate\Http\Request;

class AccountTypeController extends Controller
{

    public function index()
    {
        $account_types = Account_type::latest()->paginate(10);
        return view('account_types.index', compact('account_types'))->with('i', (request()->input('page', 1)-1)*10);
    }


    public function create()
    {
        return view('account_types.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'loan_intrest_rate' => 'required',
            'saving_intrest_rate' => 'required',
        ]);
        Account_type::create($request->all());
        return redirect('account_types.index')->with('Success', 'Acocunt type Created Successfully');
    }


    public function show(Account_type $account_type)
    {
        return view('account_types.show', compact('account_type'));
    }


    public function edit(Account_type $account_type)
    {
        return view('account_types.edit', compact('account_type'));
    }


    public function update(Request $request, Account_type $account_type)
    {
        $request->validate([
            'type' => 'required',
            'loan_intrest_rate' => 'required',
            'saving_intrest_rate' => 'required',
        ]);
        $account_type->update($request->all());
        return redirect('account_types.index')->with('Success', 'Acocunt type updated Successfully');
    }


    public function destroy(Account_type $account_type)
    {
        $account_type->delete();
        return redirect('account_types.index')->with('Success', 'Acocunt type deleted Successfully');
    }
}
