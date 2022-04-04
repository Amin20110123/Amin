<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Roles\StoreRequest;
use App\Http\Requests\Roles\UpdateRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Str;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::with('permissions')->orderBy('id', 'desc')->get();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(StoreRequest $request)
    {
        $role = Role::create([
           'name' =>  $request->role_name,
           'slug' =>  $request->role_slug
        ]);

        $listOfPermissions = explode(',', $request->roles_permissions);

        foreach ($listOfPermissions as $key => $permission)
        {
            $permissions = new Permission();
            $permissions->name = $permission;
            $permissions->slug = strtolower(str_replace(" ", "-", $permission));
            $permissions->save();
            $role->permissions()->attach($permissions->id);
            $role->save();
        }


        return redirect('/admin/roles');
    }

    public function show(Role $role)
    {
        return view('admin.roles.show', compact('role'));
    }

    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }

    public function update(UpdateRequest $request, Role $role)
    {
        $role->name = $request->role_name;
        $role->slug = $request->role_slug;
        $role->save();

        $role->permissions()->delete();
        $role->permissions()->detach();

        $listOfPermissions = explode(',', $request->roles_permissions);

        foreach ($listOfPermissions as $key => $permission)
        {
            $permissions = new Permission();
            $permissions->name = $permission;
            $permissions->slug = strtolower(str_replace(" ", "-", Str::of($permission)->trim()));
            $permissions->save();
            $role->permissions()->attach($permissions->id);
            $role->save();
        }

        return redirect('/admin/roles');
    }

    public function destroy(Role $role)
    {
        $role->permissions()->delete();
        $role->delete();
        $role->permissions()->detach();

        return redirect('/admin/roles');
    }
}
