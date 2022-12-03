<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function index()
    {
        // $search = $request['search'] ?? "";
        // if($search != ""){
        //     $addresses = Address::Where('account_number','LIKE','%'.$search.'%')->get();        
        // }
        // else{
        //     $addresses = Address::latest()->paginate(10);
        // }
        
        $addresses = Address::latest()->paginate(10);
        return view('addresses.index',compact('addresses'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

 
    public function create()
    {
        return view('addresses.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'account_number' => 'required',
            'account_limit' => 'required',
            'current_balance' => 'required',
        ]);

        Address::create($request->all());
        return redirect()->route('addresses.index')->with('success','Address created successfully.');
    }


    public function show(Address $address)
    {
        return view('addresses.show',compact('address'));
    }


    public function edit(Address $address)
    {
        return view('addresses.edit',compact('address'));
    }


    public function update(Request $request, Address $address)
    {

        $request->validate([
        'account_number' => 'required',
        'account_limit' => 'required',
        'current_balance' => 'required',
        
        ]);

        $address->update($request->all());
        return redirect()->route('addresses.index')->with('success','Address updated successfully');
    }


    public function destroy(Address $address)
    {
        $address->delete();
        return redirect()->route('addresses.index')->with('success','Address deleted successfully');
    }
}
