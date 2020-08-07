<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $company = Company::orderBy('name', 'asc')->get();
        $contacts = Contact::orderBy('first_name', 'asc')->get();
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contacts.show', compact('contact')); // ['contact' => $contact]
    }
}
