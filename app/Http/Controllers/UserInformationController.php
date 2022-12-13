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
        $user_role = User::all();
        return view('userinformations.create', compact('user_role'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'contact' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'pan_card_number' => 'required',
            'adhaar_card_number' => 'required',
            'maritial_status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        /* if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            Auth()->user()->update(['image'=>$filename]);
        } */

        User_information::create($request->all());
        // return back()->with('success','userinformation created successfully.')->with('image',$imageName);
        return redirect()->route('userinformations.index')->with('success','userinformation created successfully.')->with('image',$imageName);
    }


    public function show(User_information $userinformation)
    {
        $user_role = User::all();
        return view('userinformations.show',compact('userinformation', 'user_role'));
    }


    public function edit(User_information $userinformation)
    {
        // $user_role = User::whereStatus('on')->get();
        return view('userinformations.edit',compact('userinformation'));
    }


    public function update(Request $request, User_information $userinformation)
    {

        $request->validate([
            'user_id' => ['required', 'unique:user_id'],
            'user_id' => ['', ''],
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'contact' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'pan_card_number' => 'required',
            'adhaar_card_number' => 'required',
            'maritial_status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $userinformation->update($request->all());
        // return back()->with('success','Userinformation created successfully.')->with('image',$imageName);

        return redirect()->route('userinformations.index')->with('success','User updated successfully')->with('image',$imageName);
    }


    public function destroy(User_information $userinformation)
    {
        $userinformation->delete();
        return redirect()->route('userinformations.index')->with('success','User deleted successfully');
    }

    public function upload(Request $request)
    {
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            Auth()->user()->update(['image'=>$filename]);
        }
        return redirect()->back();
    }
}


