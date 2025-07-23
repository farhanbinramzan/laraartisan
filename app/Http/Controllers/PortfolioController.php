<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::with('category')->get();
        $categories = category::all();
        return view('portfolio.list', compact('portfolios', 'categories'));
    }

    public function create()
    {
        $categories = category::all();
        return view('portfolio.create', compact('categories'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'link' => 'nullable|url|max:255',
            'image' => 'required',
            'category_id' => 'required',
        ]);
       
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/portfolio'), $imageName);

       $portfolio = Portfolio::create([
            'title' => $request->title,
            'link' => $request->link,
            'description' => $request->description,
            'image' => $imageName,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('portfolio.index')->with('success', 'Portfolio item created successfully.');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $categories = category::all();
        return view('portfolio.edit', compact('portfolio', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'link' => 'required',
            'category_id' => 'required',
        ]);

        $imageName = $portfolio->image;
        if ($request->hasFile('image')) {
            if ($portfolio->image && file_exists(public_path('images/portfolio/' . $portfolio->image))) {
                unlink(public_path('images/portfolio/' . $portfolio->image));
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/portfolio'), $imageName);
        }

        $portfolio->update([
            'title' => $request->title,
            'link' => $request->link,
            'description' => $request->description,
            'image' => $imageName,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio item updated successfully.');
    }

    public function delete($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        if (file_exists(public_path('images/portfolio/' . $portfolio->image))) {
            unlink(public_path('images/portfolio/' . $portfolio->image));
        }
        $portfolio->delete();
        return redirect()->route('portfolio.index')->with('success', 'Portfolio item deleted successfully.');
    }
}
