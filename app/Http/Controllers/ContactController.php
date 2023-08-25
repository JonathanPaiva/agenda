<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        
        return view('contacts.index')->with('contacts', $contacts);
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        Contact::createRegister($request->all());

        return redirect('contacts');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('contacts.edit',['contact' => $contact]);
    }

    public function update(Request $request)
    {
        Contact::editRegister($request);

        return redirect('contacts');
    }

    public function destroy($id)
    {
        Contact::deleteRegister($id);

        return redirect('contacts');
    }
}
