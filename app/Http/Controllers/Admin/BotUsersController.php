<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BotUsers;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BotUsersController extends Controller
{
    public function generateUrl(int $id): string
    {
        return '/'.$id;
    }

    /**
     * @return Application|Factory|View
     * @throws BindingResolutionException
     */
    public function index()
    {
        $posts = BotUsers::orderByDesc('id')->paginate(15);
        return view('backend.post.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $categories = Categories::all();
        $post = new Posts();
        return view('backend.post.create', [
            'categories' => $categories,
            'post' => $post
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $value = $request->validate([
            'title' => 'required|min:5',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|min:30',
            'description' => 'required|min:10',
            'category_id' => 'required'
        ]);
        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('uploads'), $imageName);
        $value['photo'] = $imageName;
        $value['url'] = $this->generateUrl($value['title']);

        Posts::create($value);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Posts $post
     * @return Application|Factory|View
     * @throws BindingResolutionException
     */
    public function show(Posts $post)
    {
        return view('backend.post.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Posts $post
     * @return Application|Factory|View
     * @throws BindingResolutionException
     */
    public function edit(Posts $post)
    {
        $categories = Categories::all();
        return view('backend.post.edit', [
            'post' => $post,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Posts $post
     * @param Request $request
     * @return Response
     */
    public function update(Posts $post, Request $request): Response
    {
        $value = $request->validate([
            'title' => 'required|min:5',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|min:30',
            'description' => 'required|min:10',
            'category_id' => 'required'
        ]);
        if (isset($value['photo'])) {
            unlink('uploads/' . $post->photo);
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('uploads'), $imageName);
            $value['photo'] = $imageName;
        }

        $post->update($value);

        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Posts $post
     * @return RedirectResponse
     */
    public function destroy(Posts $post): RedirectResponse
    {
        unlink('uploads/' . $post->photo);
        $post->delete();

        return redirect()->route('posts.index');
    }

    public function upload(Request $request)
    {
        $fileName = $request->file('file')->getClientOriginalName();
        $request->file('file')->move(public_path('uploads'), $fileName);
        return response()->json(['location' => "/uploads/$fileName"]);
    }
}
