<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'city_nmae' => 'required',
            'landmark' => 'required',
            // 'landmark' => 'required|unique:users,mobile',
            'taluka' => 'required',
            'district' => 'required',
            'state' => 'required',
            'cuntry' => 'required',
            'pin_code' => 'required',
        ]);
        // dd($validator->fails());
        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return redirect()->route('addresses.index')
                ->withErrors($validator)
                ->withInput();
            }
        }

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
        $validator = Validator::make($request->all(), [
            'city_nmae' => 'required',
            'landmark' => 'required',
            // 'landmark' => 'required|unique:users,mobile',
            'taluka' => 'required',
            'district' => 'required',
            'state' => 'required',
            'cuntry' => 'required',
            'pin_code' => 'required',
        ]);

        // dd($validator->fails());
        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return redirect()->url('addresses/create')
                ->withErrors($validator)
                ->withInput();
            }
        }

        $address->update($request->all());
        return redirect()->route('addresses.index')->with('success','Address updated successfully');
    }


    public function destroy(Address $address)
    {
        $address->delete();
        return redirect()->route('addresses.index')->with('success','Address deleted successfully');
    }
}
