<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View
     * @throws BindingResolutionException
     */
    public function __invoke(Request $request)
    {
        $postscount = Posts::count();
        $categoriescount = Categories::count();
        return view('backend.index', [
            'postscount' => $postscount,
            'categoriescount' => $categoriescount
        ]);
    }
}
