<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends \Illuminate\Routing\Controller
{

    public function index()
    {
//        $id = Contact::orderByDesc('id')->paginate(15);
//        $name = Contact::orderByDesc('name')->paginate(15);
//        $email = Contact::orderByDesc('email')->paginate(15);
//        $phone = Contact::orderByDesc('phone')->paginate(15);
//        $subject = Contact::orderByDesc('subject')->paginate(15);
//        $content = Contact::orderByDesc('content')->paginate(15);
//        return view('frontend.contact.show', [
//            'id' => $id,
//            'name' => $name,
//            'email' => $email,
//            'phone' => $phone,
//            'subject' => $subject,
//            'content' => $content,
//        ]);
        $categories = Contact::all();
        return view('frontend.contact.show',[
            'categories' => $categories,
        ]);
    }



}
