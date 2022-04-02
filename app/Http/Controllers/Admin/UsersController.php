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
        $items = User::orderBy('id', 'desc')->get();
        return view('admin.users.index', compact('items'));
    }


    public function create()
    {
        return view('admin.users.create');
    }

    public function store(StoreRequest $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect('/admin/users');
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password != null)
        {
            $user->password = $request->password;
        }
        $user->save();

        return redirect('/admin/users');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/admin/users');
    }
}
