<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param int $page_number
     * @return \Illuminate\Contracts\Foundation\Application|Renderable|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function index(int $page_number = 1)
    {
        $categories = Categories::all();
        $paginate = 8;
        $skip = ($page_number*$paginate)-$paginate;
        $prevUrl = $nextUrl = '';
        if($skip>0){
            $prevUrl = $page_number - 1;
        }
        $posts = Posts::orderBy('id', 'desc')->skip($skip)->take($paginate)->get();
        if($posts->count()>0){
            if($posts->count()>=$paginate){
                $nextUrl = $page_number + 1;
            }
            return view('frontend.home', compact('posts', 'categories', 'prevUrl', 'nextUrl'));
        }
        return redirect('/');
    }

    /**
     * @throws BindingResolutionException
     */
    public function about()
    {
        $categories = Categories::all();
        return view('frontend.about', [
            'categories' => $categories
        ]);
    }

    public function search(Request $request){
        $categories = Categories::all();
        if(!empty($request->q)){
        if(!empty($request->page)){
        $page_number = $request->page;
        }else{
        $page_number = 1;
        }
        $paginate = 8;
        $skip = ($page_number*$paginate)-$paginate;
        $prevUrl = $nextUrl = '';
        if($skip>0){
            $prevUrl = $page_number - 1;
        }
        $posts = Posts::where('title', 'like', '%' . $request->q . '%')->orderBy('id', 'desc')->skip($skip)->take($paginate)->get();
        if($posts->count()>0){
            if($posts->count()>=$paginate){
                $nextUrl = $page_number + 1;
            }
            return view('frontend.search', compact('posts', 'categories', 'prevUrl', 'nextUrl'));
        }
        return redirect('/');
        }else{
        $prevUrl = $nextUrl = '';
        $posts = [];
        return view('frontend.search', compact('posts', 'categories', 'prevUrl', 'nextUrl'));
        }
    }
}
