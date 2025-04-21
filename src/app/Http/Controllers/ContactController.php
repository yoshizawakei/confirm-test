<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->all();
        return view('contacts.confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = request()->all();
        Contact::create($contact);
        return view("contacts.thanks");
    }

    public function thanks()
    {
        return view('contacts.thanks');
    }
}
