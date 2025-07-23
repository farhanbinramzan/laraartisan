<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('sequence_listing')->get();
        return view('testimonial.list', compact('testimonials'));
    }

    public function create()
    {
        return view('testimonial.create');
    }

    public function store(TestimonialRequest $request)
    {
        if ($request->hasFile('image')) {
            $destinationPath = 'images/testimonial';
            $imageName =  time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path($destinationPath), $imageName);
        }

        $testimonial = new Testimonial();
        $testimonial->sequence_listing = $request->sequence_listing;
        $testimonial->name = $request->name;
        $testimonial->description = $request->description;
        $testimonial->designation = $request->designation;
        $testimonial->rating = $request->rating;
        $testimonial->image = $imageName;

        $testimonial->save();
        return redirect()->route('testimonial.index')->with('success', 'testimonial created successfully');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('testimonial.edit', compact('testimonial'));
    }

    public function update(TestimonialRequest $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($testimonial->image && file_exists(public_path('images/' . $testimonial->image))) {
                unlink(public_path('images/testimonial/' . $testimonial->image));
            }
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('images/testimonial'), $imageName);
            $testimonial->image = $imageName;
        }
        $testimonial->sequence_listing = $request->sequence_listing;
        $testimonial->name = $request->name;
        $testimonial->description = $request->description;
        $testimonial->designation = $request->designation;
        $testimonial->rating = $request->rating;
        
        $testimonial->save();
        return redirect()->route('testimonial.index')->with('success', 'testimonial Update successfully');
    }

    public function delete($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        if (file_exists(public_path('images/testimonial/' . $testimonial->image))) {
            unlink(public_path('images/testimonial/' . $testimonial->image));
        }
        $testimonial->delete();
        return redirect()->route('testimonial.index')->with('success', 'testimonial deleted successfully');
    }
}
