<?php

namespace App\Http\Controllers;

use App\Models\Sender;
use Illuminate\Http\Request;

class SenderController extends Controller
{

    public function index()
    {
        $senders = Sender::latest()->paginate(10);
        return view('sender.index', compact('senders'))->with('i' (request()->input('page', 1)-1)*10);
    }


    public function create()
    {
        return view('sender.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'ammount' => 'required',
            'process' => 'required',
        ]);
        Sender::create($request->all());
        return redirect('sender.index')->with('Success', 'sender created successfully');
    }


    public function show(Sender $sender)
    {
        return view('sender.show', compact('sender'));
    }


    public function edit(Sender $sender)
    {
        return view('sender.edit', compact('sender'));
    }


    public function update(Request $request, Sender $sender)
    {
        $request->validate([
            'ammount' => 'required',
            'process' => 'required',
        ]);
        $sender->update($request->all());
        return redirect('sender.index', compact('sender'))->with('Success', 'sender updated successfully');
    }


    public function destroy(Sender $sender)
    {
        $sender->delete();
        return redirect('sender.index', compact('sender'))->with('Success', 'sender deleted successfully');
    }
}
