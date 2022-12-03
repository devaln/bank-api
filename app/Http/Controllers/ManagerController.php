<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{

    public function index()
    {
        $managers = Manager::latest()->paginate(10);
        return view('managers.index',compact('managers'))->with('i',(request()->input('page',1)-1)*10);
    }

    
    public function create()
    {
        return view('managers.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'designation'=>'required',
        ]);

        Manager::create($request->all());
        return redirect()->route('managers.index')->with('Success', 'Manager created successfully.');

    }

    
    public function show(Manager $manager)
    {
        return view('managers.show', compact('manager'));
    }

    
    public function edit(Manager $manager)
    {
        return view('managers.edit', compact('manager'));
    }

    
    public function update(Request $request, Manager $manager)
    {

        $request->validate([
            'designation'=>'required',
        
        ]);

        $manager->update($request->all());
        return redirect()->route('customers.index')->with('success','Manager updated successfully');
    }

    
    public function destroy(Manager $manager)
    {
        $manager->delete();
        return redirect()->route('managers.index')->with('Success','Manager deleted successfully');
    }
}
