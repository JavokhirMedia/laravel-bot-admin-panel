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
        return view('frontend.contact.show', [
            'categories' => $categories
        ]);
    }

    public function create()
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
//        file_get_contents("https://api.telegram.org/bot2100561755:AAHiiRtTziabQukUOnqyxd7VUVXUpe2kXPs/sendMessage?chat_id=454428994&text=".$value['email']);
        Contact::create($value);
        return redirect()->route('contact.index');
    }



}
