<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusRequest;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $status = Status::first();
        return view('status.list', compact('status'));
    }

    public function create()
    {
        return view('status.create');
    }

    public function store(StatusRequest $request)
    {
        
        if ($request->hasFile('image')) {
            $destinationPath = 'images/status';
            $imageName =  time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path($destinationPath), $imageName);
        }
        
        $status = new Status();
        $status->title = $request->title;
        $status->description = $request->description;
        $status->no_of_client = $request->no_of_client;
        $status->client_title = $request->client_title;
        $status->client_desc = $request->client_desc;
        $status->no_of_project = $request->no_of_project;
        $status->project_title = $request->project_title;
        $status->project_desc = $request->project_desc;
        $status->no_of_hours = $request->no_of_hours;
        $status->hours_title = $request->hours_title;
        $status->hours_desc = $request->hours_desc;
        $status->no_of_workers = $request->no_of_workers;
        $status->worker_title = $request->worker_title;
        $status->worker_desc = $request->worker_desc;
        $status->image = $imageName;
        $status->save();
        
        return redirect()->route('status.index')->with('success', 'Status created successfully');
    }

    public function edit($id)
    {
        $status = Status::findOrFail($id);
        return view('status.edit', compact('status'));
    }

    public function update(StatusRequest $request, $id)
    {
        $status = Status::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($status->image && file_exists(public_path('images/status/' . $status->image))) {
                unlink(public_path('images/status/' . $status->image));
            }
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('images/status'), $imageName);
            $status->image = $imageName;
        }
        $status->title = $request->title;
        $status->description = $request->description;
        $status->no_of_client = $request->no_of_client;
        $status->client_title = $request->client_title;
        $status->client_desc = $request->client_desc;
        $status->no_of_project = $request->no_of_project;
        $status->project_title = $request->project_title;
        $status->project_desc = $request->project_desc;
        $status->no_of_hours = $request->no_of_hours;
        $status->hours_title = $request->hours_title;
        $status->hours_desc = $request->hours_desc;
        $status->no_of_workers = $request->no_of_workers;
        $status->worker_title = $request->worker_title;
        $status->worker_desc = $request->worker_desc;
        
        $status->save();
        return redirect()->route('status.index')->with('success', 'Status Update successfully');
    }

    public function delete($id)
    {
        $status = Status::findOrFail($id);
        if (file_exists(public_path('images/status/' . $status->image))) {
            unlink(public_path('images/status/' . $status->image));
        }
        $status->delete();
        return redirect()->route('status.index')->with('success', 'Status deleted successfully');
    }
}
