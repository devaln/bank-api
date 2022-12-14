<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{

    public function index()
    {
        $cards = Card::latest()->paginate(10);
        return view('cards.index', compact('cards'))->with('i', (request()->input('page', 1)-1)*1);
    }


    public function create()
    {
        return view('cards.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'number'=>'required',
            'expiry_date'=>'required|after_5_year:created_at',
            'cvv_code'=>'required|min:3|max:3',
            'pin'=>'required|max:4|min:4',
        ]);
        Card::create($request->all());
        return redirect()->route('cards.index')->with('Success', 'Card generated successfully');
    }


    public function show(Card $card)
    {
        return view('cards.show', compact('card'));
    }


    public function edit(Card $card)
    {
        return view('cards.edit', compact('card'));
    }


    public function update(Request $request, Card $card)
    {
        $request->validate([
            'title'=>'required',
            'number'=>'required',
            'expiry_date'=>'required',
            'cvv_code'=>'required',
            'pin'=>'required|max:4|min:4',
        ]);
        $card->update($request->all());
        return redirect()->route('cards.index')->with('Success', 'Card updated successfully');
    }


    public function destroy(Card $card)
    {
        $card->delete();
        return redirect()->route('cards.index')->with('Success', 'This Card has been deleted successfully');
    }
}
