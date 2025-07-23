<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return view('category.list', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        category::create(['name' => $request->name]);

        return redirect()->route('category.index')->with('success', 'Category created successfully.');
    }
    public function edit($id)
    {
        $category = category::findOrFail($id);
        return view('category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $category = category::findOrFail($id);
        $category->update(['name' => $request->name]);

        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }
    public function delete($id)
    {
        $category = category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }
}
