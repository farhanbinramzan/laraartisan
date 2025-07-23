<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::OrderBy('id','desc')->first();
        return view('about.list', compact('abouts'));
    
    }

    public function create()
    {
        return view('about.create');
    }

    public function store(AboutRequest $request)
    {
        if ($request->hasFile('image')) {
            $destinationPath = 'images/about';
            $imageName =  time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path($destinationPath), $imageName);
        }

        $about = new About();
        $about->title = $request->title;
        $about->description = $request->description;
        $about->image = $imageName;

        $about->save();
        return redirect()->route('about.index')->with('success', 'About created successfully');
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('about.edit', compact('about'));
    }

    public function update(AboutRequest $request, $id)
    {
        $about = About::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($about->image && file_exists(public_path('images/about/' . $about->image))) {
                unlink(public_path('images/about/' . $about->image));
            }
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('images/about'), $imageName);
            $about->image = $imageName;
        }
        $about->title = $request->title;
        $about->description = $request->description;
        $about->save();
        return redirect()->route('about.index')->with('success', 'About Update successfully');
    }

    public function delete($id)
    {
        $about = About::findOrFail($id);
        if (file_exists(public_path('images/about/' . $about->image))) {
            unlink(public_path('images/about/' . $about->image));
        }
        $about->delete();
        return redirect()->route('about.index')->with('success', 'About deleted successfully');
    }
}
