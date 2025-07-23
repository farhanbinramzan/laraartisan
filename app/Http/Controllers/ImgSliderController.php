<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImgslideRequest;
use App\Models\ImgSlider;
use Illuminate\Http\Request;

class ImgSliderController extends Controller
{
    public function index()
    {
        $imgSlides = ImgSlider::orderBy('sequence_listing','ASC')->get();
        return view('imgSlide.list', compact('imgSlides'));
    
    }

    public function create()
    {
        return view('imgSlide.create');
    }

    public function store(ImgslideRequest $request)
    {
        if ($request->hasFile('image')) {
            $destinationPath = 'images/imgSlide';
            $imageName =  time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path($destinationPath), $imageName);
        }

        $imgSlide = new ImgSlider();
        $imgSlide->sequence_listing = $request->sequence_listing;
        $imgSlide->image = $imageName;

        $imgSlide->save();
        return redirect()->route('imgSlide.index')->with('success', 'Image Slide created successfully');
    }

    public function edit($id)
    {
        $imgSlide = ImgSlider::findOrFail($id);
        return view('imgSlide.edit', compact('imgSlide'));
    }

    public function update(ImgslideRequest $request, $id)
    {
        $imgSlide = ImgSlider::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($imgSlide->image && file_exists(public_path('images/imgSlide/' . $imgSlide->image))) {
                unlink(public_path('images/imgSlide/' . $imgSlide->image));
            }
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('images/imgSlide'), $imageName);
            $imgSlide->image = $imageName;
        }
        $imgSlide->sequence_listing = $request->sequence_listing;
        
        $imgSlide->save();
        return redirect()->route('imgSlide.index')->with('success', 'imgSlide Update successfully');
    }

    public function delete($id)
    {
        $imgSlide = ImgSlider::findOrFail($id);
        if (file_exists(public_path('images/imgSlide/' . $imgSlide->image))) {
            unlink(public_path('images/imgSlide/' . $imgSlide->image));
        }
        $imgSlide->delete();
        return redirect()->route('imgSlide.index')->with('success', 'Image Slide deleted successfully');
    }
}
