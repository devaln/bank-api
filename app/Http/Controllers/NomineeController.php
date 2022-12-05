<?php

namespace App\Http\Controllers;

use App\Models\Nominee;
use Illuminate\Http\Request;

class NomineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nominees = Nominee::latest();
        return view('nominees.index', compact('nominees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nominees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'date_of_birth'=>'required',
            'contact'=>'required',
            'gender'=>'required',
            'relation'=>'required',
        ]);
        Nominee::create($request->all());
        return redirect()->route('nominees.index')->with('Success', 'Nominee created successfullly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nominee  $nominee
     * @return \Illuminate\Http\Response
     */
    public function show(Nominee $nominee)
    {
        return view('nominees.show', compact('nominee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nominee  $nominee
     * @return \Illuminate\Http\Response
     */
    public function edit(Nominee $nominee)
    {
        return view('nominees.edit', compact('nominee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nominee  $nominee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nominee $nominee)
    {
        $request->validate([
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'date_of_birth'=>'required',
            'contact'=>'required',
            'gender'=>'required',
            'relation'=>'required',
        ]);
        $nominee->update($request->all());
        return redirect()->route('nominees.index')->with('Success', 'Nominee updated successfullly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nominee  $nominee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nominee $nominee)
    {
        $nominee->delete();
        return redirect()->route('nominees.index')->with('success', 'Nominee was deleted Successfully');
    }
}
