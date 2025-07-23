<?php

namespace App\Http\Controllers;

use App\Models\FooterService;
use Illuminate\Http\Request;

class FooterServiceController extends Controller
{
    public function index()
    {
        $footerservice = FooterService::all();
        return view('footerservice.list', compact('footerservice'));
    }

    public function create()
    {
        return view('footerservice.create');
    }

    public function store(Request $request)
    {
        $footerservice = new FooterService();
        $footerservice->service_name = $request->service_name;
        $footerservice->service_links = $request->service_links;
       

        $footerservice->save();
        return redirect()->route('footerservice.index')->with('success', 'footerservice created successfully');
    }

    public function edit($id)
    {
        $footerservice = FooterService::findOrFail($id);
        return view('footerservice.edit', compact('footerservice'));
    }

    public function update(Request $request, $id)
    {
        $footerservice = FooterService::findOrFail($id);
        $footerservice->service_name = $request->service_name;
        $footerservice->service_links = $request->service_links;
       
        $footerservice->save();
        return redirect()->route('footerservice.index')->with('success', 'footerservice Update successfully');
    }

    public function delete($id)
    {
        $footerservice = FooterService::findOrFail($id);
        $footerservice->delete();
        return redirect()->route('footerservice.index')->with('success', 'footerservice deleted successfully');
    }
}
