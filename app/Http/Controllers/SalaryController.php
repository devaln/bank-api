<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{

    public function index()
    {
        $salary = Salary::latest()->paginate(10);
        return view('salary.index', compact('salary'))->with('i' (request()->input('page', 1)-1)*10);
    }


    public function create()
    {
        return view('salary.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'ammount' => 'required',
            'process' => 'required',
        ]);
        Salary::create($request->all());
        return redirect('salary.index')->with('Success', 'Salary set successfully');
    }


    public function show(Salary $salary)
    {
        return view('salary.show', compact('salary'));
    }


    public function edit(Salary $salary)
    {
        return view('salary.edit', compact('salary'));
    }


    public function update(Request $request, Salary $salary)
    {
        $request->validate([
            'ammount' => 'required',
            'process' => 'required',
        ]);
        $salary->update($request->all());
        return redirect('salary.index', compact('salary'))->with('Success', 'Salary Increment successfully');
    }


    public function destroy(Salary $salary)
    {
        $salary->delete();
        return redirect('salary.index', compact('salary'))->with('Success', 'Salary deleted successfully');
    }
}
