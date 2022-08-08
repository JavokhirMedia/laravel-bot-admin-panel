<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{

    public function index()
    {
        $categories = Categories::all();
        $contact = new Contact();
        return view('frontend.contact.show',[
            'categories' => $categories,
            'contact' => $contact,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $value = $request->validate([
            'name' => 'required|min:3',
            'email' => 'sometimes|required|email',
            'phone' => 'required|min:11|numeric',
            'subject' => 'required|min:5',
            'content' => 'required',
        ]);

        Contact::create($value);
        return redirect()->route('contact.index');
    }



}
