<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\StoreRequest;
use App\Http\Requests\Users\UpdateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin,manager');
    }

    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('admin.users.index', compact('users'));
    }

    public function create(Request $request)
    {
        if($request->ajax())
        {
            $roles = Role::where('id', $request->role_id)->first();
            $permissions = $roles->permissions;
            return $permissions;
        }
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    public function store(StoreRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($request->role != null)
        {
            $user->roles()->attach($request->role);
            $user->save();
        }

        if ($request->permissions != null)
        {
            foreach ($request->permissions as $permission){
                $user->permissions()->attach($permission);
                $user->save();
            }
        }
        return redirect('/admin/users');
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $roles = Role::get();
        $userRole = $user->roles->first();
        if ($userRole != null){
            $rolePermission = $userRole->permissions;
        } else {
            $rolePermission = null;
        }
        $userPermissions = $user->permissions;

        return view('admin.users.edit', [
            'user' => $user,
            'roles' => $roles,
            'userRole' => $userRole,
            'rolePermission' => $rolePermission,
            'userPermissions' => $userPermissions
        ]);
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

        $user->roles()->detach();
        $user->permissions()->detach();

        if ($request->role != null)
        {
            $user->roles()->attach($request->role);
            $user->save();
        }
        if ($request->permissions != null)
        {
            foreach ($request->permissions as $permission)
            {
                $user->permissions()->attach($permission);
                $user->save();
            }
        }

        return redirect('/admin/users');
    }

    public function destroy(User $user)
    {
//        $user->roles()->detach();
//        $user->permissions()->detach();
        $user->delete();

        return redirect('/admin/users');
    }
}
