<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::latest()->paginate(10);
        return view('employees.index',compact('employees'))->with('i',(request()->input('page',1)-1)*10);
    }

    
    public function create()
    {
        return view('employees.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'education'=>'required',
            'date_of_joining'=>'required|before:tomorrow',
            'work_status'=>'required',
            'designation'=>'required',
            'official_email'=>'required|email',
        ]);

        Employee::create($request->all());
        return redirect()->route('employee.index')->with('Success', 'Employee created successfully.');

    }

    
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'education'=>'required',
            'date_of_joining'=>'required|before:tomorrow',
            'work_status'=>'required',
            'designation'=>'required',
            'official_email'=>'required|email',
        ]);

        $employee->upload($request->all());
        return redirect()->route('employees.index')->with('Success','Employee upodated successfully');
    }

    
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('Success','Employee deleted successfully');
    }
}
