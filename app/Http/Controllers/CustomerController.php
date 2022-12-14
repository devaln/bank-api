<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            $customers = Customer::Where('account_number','LIKE','%'.$search.'%')->get();
        }
        else{
            $customers = Customer::latest()->paginate(10);
        }

        return view('customers.index',compact('customers','search'))->with('i', (request()->input('page', 1) - 1) * 10);
    }


    public function create()
    {
        return view('customers.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'account_number' => 'required',
            'account_limit' => 'required',
            'current_balance' => 'required',
            'status' => '',
        ]);

        Customer::create($request->all());
        return redirect()->route('customers.index')->with('success','Customer created successfully.');
    }


    public function show(Customer $customer)
    {
        return view('customers.show',compact('customer'));
    }


    public function edit(Customer $customer)
    {
        return view('customers.edit',compact('customer'));
    }


    public function update(Request $request, Customer $customer)
    {

        $request->validate([
        'account_number' => 'required',
        'account_limit' => 'required',
        'current_balance' => 'required',
        'status' => '',

        ]);

        $customer->update($request->all());
        return redirect()->route('customers.index')->with('success','Customer updated successfully');
    }


    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success','Customer deleted successfully');
    }
}
