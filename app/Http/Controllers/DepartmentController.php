<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function index()
    {
        $departments = Department::latest()->paginate(10);
        return view('departments.index',compact('departments'))->with('i',(request()->input('page',1)-1)*10);
    }

    
    public function create()
    {
        return view('departments.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'employee_count'=>'required',
        ]);

        Department::create($request->all());
        return redirect()->route('department.index')->with('Success', 'Department created successfully.');

    }

    
    public function show(Department $department)
    {
        return view('departments.show', compact('department'));
    }

    
    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name'=>'required|min:3',
            'employee_count'=>'required',
        ]);

        $department->upload($request->all());
        return redirect()->route('departments.index')->with('Success','Department upodated successfully');
    }

    
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('departments.index')->with('Success','Department deleted successfully');
    }
}
