<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeroRequest;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    public function index()
    {
        $heroSections = HeroSection::all();
        return view('herosection.list', compact('heroSections'));
    }

    public function create()
    {
        return view('herosection.create');
    }

    public function store(HeroRequest $request)
    {
        if ($request->hasFile('image')) {
            $destinationPath = 'images/hero';
            $imageName =  time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path($destinationPath), $imageName);
        }

        $heroSection = new HeroSection();
        $heroSection->title = $request->title;
        $heroSection->description = $request->description;
        $heroSection->image = $imageName;

        $heroSection->save();
        return redirect()->route('hero.index')->with('success', 'Hero Section created successfully');
    }

    public function edit($id)
    {
        $heroSection = HeroSection::findOrFail($id);
        return view('herosection.edit', compact('heroSection'));
    }

    public function update(HeroRequest $request, $id)
    {
        $heroSection = HeroSection::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($heroSection->image && file_exists(public_path('images/hero/' . $heroSection->image))) {
                unlink(public_path('images/hero/' . $heroSection->image));
            }
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('images/hero'), $imageName);
            $heroSection->image = $imageName;
        }
        $heroSection->title = $request->title;
        $heroSection->description = $request->description;
        $heroSection->save();
        return redirect()->route('hero.index')->with('success', 'Hero Section Update successfully');
    }

    public function delete($id)
    {
        $heroSection = HeroSection::findOrFail($id);
        if (file_exists(public_path('images/hero/' . $heroSection->image))) {
            unlink(public_path('images/hero/' . $heroSection->image));
        }
        $heroSection->delete();
        return redirect()->route('hero.index')->with('success', 'Hero Section deleted successfully');
    }
}
