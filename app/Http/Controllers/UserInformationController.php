<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User_information;
use Illuminate\Http\Request;

class UserInformationController extends Controller
{

    public function index()
    {
        // $search = $request['search'] ?? "";
        // if($search != ""){
        //     $userinformations = User_information::Where('account_number','LIKE','%'.$search.'%')->get();        
        // }
        // else{
        //     $userinformations = User_information::latest()->paginate(10);
        // }
        // $aa = User_information::find(1);
        // dd($aa);
        $userinformations = User_information::latest()->paginate(10);
        return view('userinformations.index',compact('userinformations'))->with('i', (request()->input('page', 1) - 1) * 10);
    }


    public function create()
    {
        return view('userinformations.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'contact' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'pan_card_number' => 'required',
            'adhaar_card_number' => 'required',
            'maritial_status' => 'required',
        ]);

        User_information::create($request->all());
        return redirect()->route('userinformations.index')->with('success','userinformation created successfully.');
    }


    public function show(User_information $userinformation)
    {
        return view('userinformations.show',compact('userinformation'));
    }


    public function edit(User_information $userinformation)
    {
        return view('userinformations.edit',compact('userinformation'));
    }


    public function update(Request $request, User_information $userinformation)
    {

        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'contact' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'pan_card_number' => 'required',
            'adhaar_card_number' => 'required',
            'maritial_status' => 'required',
        
        ]);

        $userinformation->update($request->all());
        return redirect()->route('userinformations.index')->with('success','User updated successfully');
    }


    public function destroy(User_information $userinformation)
    {
        $userinformation->delete();
        return redirect()->route('userinformations.index')->with('success','User deleted successfully');
    }
}
