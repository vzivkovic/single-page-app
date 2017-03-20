<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('admin.contacts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'address' => 'required|min:3',
            'worktime' => 'required|min:3',
            'phone' => 'required|min:3',
            'email' => 'required|email|min:3|unique:contacts,email,' . auth()->id(),
/*            'email' => ['required', 'email', Rule::unique('contacts', 'email')->ignore(auth()->id())],*/
        ]);

        $contact = Contact::first();
        if (!$contact) {
            $contact = new Contact();
        }
        $contact->email = request('email');
        $contact->address = request('address');
        $contact->worktime = request('worktime');
        $contact->phone = request('phone');
        $contact->save();

        return redirect()->route('contacts.show');
    }

    public function show()
    {
        $contact = Contact::first();

        if (! $contact){
            return redirect()->route('contacts.create');
        }

        return view('admin.contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('admin.contacts.edit', compact('contact'));
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.show');
    }
}
