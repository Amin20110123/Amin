<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\StoreRequest;
use App\Http\Requests\Users\UpdateRequest;
use App\Models\User;

class UsersController extends Controller
{

    public function index()
    {
        $items = User::all();
        return view('admin.users.index', compact('items'));
    }


    public function create()
    {
        return view('admin.users.create');
    }

    public function store(StoreRequest $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    public function update(UpdateRequest $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
