<?php

namespace App\Http\Controllers;

use App\Http\Requests\HerosRequest;
use App\Models\Heros;
use Illuminate\Http\Request;

class HerosController extends Controller
{
    public function index()
    {
        $heros = Heros::orderBy('sequence_listing')->get();
        return view('hero.list', compact('heros'));
    }

    public function create()
    {
        return view('hero.create');
    }

    public function store(HerosRequest $request)
    {
        $hero = new Heros();
        $hero->sequence_listing = $request->sequence_listing;
        $hero->icon = $request->icon;
        $hero->title = $request->title;
        $hero->link = $request->link;

        $hero->save();
        return redirect()->route('heros.index')->with('success', 'hero created successfully');
    }

    public function edit($id)
    {
        $hero = Heros::findOrFail($id);
        return view('hero.edit', compact('hero'));
    }

    public function update(HerosRequest $request, $id)
    {
        $hero = Heros::findOrFail($id);
        $hero->sequence_listing = $request->sequence_listing;
        $hero->icon = $request->icon;
        $hero->title = $request->title;
        $hero->link = $request->link;
        $hero->save();
        return redirect()->route('heros.index')->with('success', 'heros Update successfully');
    }

    public function delete($id)
    {
        $hero = Heros::findOrFail($id);
        $hero->delete();
        return redirect()->route('heros.index')->with('success', 'heros deleted successfully');
    }
}
