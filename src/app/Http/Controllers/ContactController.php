<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();
        return view('contacts.confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = request()->all();
        Contact::create($contact);
        return view("contacts.thanks");
    }



}
