<?php

namespace App\Http\Controllers;

use App\Company;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
//        dd(request()->only('company_id'));
        $companies = Company::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        $contacts = Contact::orderBy('id', 'desc')->where(function ($query) {
            if ($companyId = request('company_id')) {
                $query->where('company_id', $companyId);
            }
        })->paginate(10);
        return view('contacts.index', compact('contacts', 'companies'));
    }

    public function create()
    {
        $companies = Company::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        return view('contacts.create', compact('companies'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'company_id' => 'required|exists:companies,id'
        ]);

        Contact::create($request->all());
        return redirect()->route('contacts.index')->with('message', "Contact has been add successfully");

//        dd($request->all());
//        dd($request->only('first_name', 'last_name'));
//        dd($request->except('first_name', 'last_name'));

    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.show', compact('contact')); // ['contact' => $contact]
    }
}
