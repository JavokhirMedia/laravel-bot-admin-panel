<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BotUsers;
use App\Models\Posts;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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
        $users = BotUsers::orderByDesc('id')->paginate(15);
        return view('backend.botusers.index', [
            'users' => $users
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param BotUsers $id
     * @return Application|Factory|View
     * @throws BindingResolutionException
     */
    public function show(BotUsers $id)
    {
        return view('backend.botusers.show', [
            'id' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BotUsers $id
     * @return Application|Factory|View
     * @throws BindingResolutionException
     */
    public function edit(BotUsers $id)
    {
        return view('backend.post.edit', [
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BotUsers $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(BotUsers $id, Request $request): RedirectResponse
    {
        $value = $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'region' => 'required|min:10',
            'district' => 'required|min:10',
            'phone_number' => 'required|min:11',
            'status' => 'required',
            'last_command' => 'required',
        ]);

        $id->update($value);

        return redirect()->route('backend.botusers.show', ['id' => $id->id]);
    }
//
//    public function destroy(): RedirectResponse
//    {
//        return redirect()->route('botusers.index');
//    }

    public function destroy(Posts $id): RedirectResponse
    {
        $id->delete();

        return redirect()->route('botusers.index');
    }

}
