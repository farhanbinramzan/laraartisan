<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::all();
        return view('footer.list', compact('footers'));
    }

    public function create()
    {
        return view('footer.create');
    }

    public function store(Request $request)
    {
        $footer = new Footer();
        $footer->name = $request->name;
        $footer->usefull_links = $request->usefull_links;
       

        $footer->save();
        return redirect()->route('footer.index')->with('success', 'footer created successfully');
    }

    public function edit($id)
    {
        $footer = Footer::findOrFail($id);
        return view('footer.edit', compact('footer'));
    }

    public function update(Request $request, $id)
    {
        $footer = Footer::findOrFail($id);
        $footer->name = $request->name;
        $footer->usefull_links = $request->usefull_links;
       
        $footer->save();
        return redirect()->route('footer.index')->with('success', 'footer Update successfully');
    }

    public function delete($id)
    {
        $footer = Footer::findOrFail($id);
        $footer->delete();
        return redirect()->route('footer.index')->with('success', 'footer deleted successfully');
    }
}
