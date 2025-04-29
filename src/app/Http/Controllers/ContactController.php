<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::with("category")->get();
        $categories = Category::all();
        return view('contacts.index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();
        $contact['category_id'] = Category::find($contact['category_id'])->content;
        return view('contacts.confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = request()->all();
        $contact['category_id'] = Category::where("content", $contact['category_id'])->first()->id;
        Contact::create($contact);
        return view("contacts.thanks");
    }



}
