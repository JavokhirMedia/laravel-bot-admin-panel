<?php

namespace App\Http\Controllers;

use App\Models\Categories;

class ContactController extends \Illuminate\Routing\Controller
{

    public function index()
    {
        $categories = Contact::orderByDesc('created_at')->paginate(15);
        return view('backend.category.index', [
            'categories' => $categories
        ]);
    }

}
