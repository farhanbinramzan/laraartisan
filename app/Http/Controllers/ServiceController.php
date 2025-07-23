<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{


    public function index()
    {
        $services = Service::all();
        return view('service.list', compact('services'));
    }

    public function create()
    {
        return view('service.create');
    }

    public function store(ServiceRequest $request)
    {
        $service = new Service();
        $service->sequence_listing = $request->sequence_listing;
        $service->icons = $request->icons;
        $service->title = $request->title;
        $service->description = $request->description;

        $service->save();
        return redirect()->route('service.index')->with('success', 'Services created successfully');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('service.edit', compact('service'));
    }

    public function update(ServiceRequest $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->sequence_listing = $request->sequence_listing;
        $service->icons = $request->icons;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();
        return redirect()->route('service.index')->with('success', 'Services Update successfully');
    }

    public function delete($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('service.index')->with('success', 'Services deleted successfully');
    }
}
