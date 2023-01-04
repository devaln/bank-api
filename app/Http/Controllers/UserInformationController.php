<?php

namespace App\Http\Controllers;

use App\Exports\ExportUserInformation;
use App\Models\User;
use App\Models\User_information;
use Illuminate\Http\Request;
use App\Http\Controllers\TransactionController;
use App\Imports\ImportUserInformation;
use App\Models\Customer;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

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
        $userinformations = User_information::latest()->simplepaginate(10);
        return view('userinformations.index',compact('userinformations'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
    /* Import and Export */
    public function import(Request $request){
        Excel::import(new ImportUserInformation, $request->file('file')->store('files'));
        return redirect()->back();
    }

    public function export(Request $request){
        return Excel::download(new ExportUserInformation, 'user-informations.xlsx');
    }


    public function create()
    {
        $user_role = User::all();
        return view('userinformations.create', compact('user_role'));
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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = '/images/'.time().'.'.uniqid().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        if($request->userable_type == 'Customer'){
            Customer::factory()->count(1)->create();
        }
        else{
            Employee::factory()->count(1)->create();
        }
        $data = array();
        $data['user_id'] = Auth::user()->id;
        $data['first_name'] = $request->first_name;
        $data['middle_name'] = $request->middle_name;
        $data['last_name'] = $request->last_name;
        $data['contact'] = $request->contact;
        $data['date_of_birth'] = $request->date_of_birth;
        $data['gender'] = $request->gender;
        $data['pan_card_number'] = $request->pan_card_number;
        $data['adhaar_card_number'] = $request->adhaar_card_number;
        $data['maritial_status'] = $request->maritial_status;
        $data['image'] = $imageName;
        $data['userable_type'] = $request->userable_type;
        $data['userable_id'] = User_information::with('userable')->id;
        // $data['userable_id'] = Customer::latest()->get('id')->first();

        DB::table('user_informations')->insert($data);
        return redirect()->route('userinformations.index')->with('success','userinformation created successfully.');
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

    public function sendmoney()
    {
    }
}


