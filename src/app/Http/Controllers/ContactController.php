<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['name_first', "name_last", "gender", "email", "phone1", "phone2", "phone3", "address", "building", "inquiry_type", "inquiry_content"]);
        return view('contacts.confirm', compact('contact'));
    }

    public function thanks()
    {
        return view('contacts.thanks');
    }
}
