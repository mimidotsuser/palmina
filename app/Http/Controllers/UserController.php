<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users', ['users' => User::all()]);
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $user
     * @return UserResource|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Request $request, User $user)
    {
        if ($request->expectsJson()) {
            return new UserResource($request->user());
        } else {
            return view('admin.users-show', ['user' => $user]);
        }

    }

}
