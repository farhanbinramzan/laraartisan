<?php

namespace App\Http\Controllers;

use App\Http\Requests\CallActionRequest;
use App\Models\CallAction;

class CallActionController extends Controller
{
    public function index()
    {
        $callActions = CallAction::all();
        return view('call.list', compact('callActions'));
    }

    public function create()
    {
        return view('call.create');
    }

    public function store(CallActionRequest $request)
    {
        $callAction = new CallAction();
        $callAction->title = $request->title;
        $callAction->description = $request->description;

        $callAction->save();
        return redirect()->route('callAction.index')->with('success', 'Call To Action created successfully');
    }

    public function edit($id)
    {
        $callAction = CallAction::findOrFail($id);
        return view('call.edit', compact('callAction'));
    }

    public function update(CallActionRequest $request, $id)
    {
        $callAction = CallAction::findOrFail($id);
        $callAction->title = $request->title;
        $callAction->description = $request->description;
        $callAction->save();
        return redirect()->route('callAction.index')->with('success', 'Call To Action Update successfully');
    }

    public function delete($id)
    {
        $callAction = CallAction::findOrFail($id);
        $callAction->delete();
        return redirect()->route('callAction.index')->with('success', 'Call To Action deleted successfully');
    }
}
