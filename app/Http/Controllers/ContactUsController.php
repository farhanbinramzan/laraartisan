<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contact = ContactUs::first();
        return view('contact.list', compact('contact'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(ContactRequest $request)
    {
        $contact = new ContactUs();
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;

        $contact->save();
        return redirect()->route('contact.index')->with('success', 'Contact created successfully');
    }

    public function edit($id)
    {
        $contact = ContactUs::findOrFail($id);
        return view('contact.edit', compact('contact'));
    }

    public function update(ContactRequest $request, $id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->save();
        return redirect()->route('contact.index')->with('success', 'Contact Update successfully');
    }

    public function delete($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->delete();
        return redirect()->route('contact.index')->with('success', 'Contact deleted successfully');
    }
}
