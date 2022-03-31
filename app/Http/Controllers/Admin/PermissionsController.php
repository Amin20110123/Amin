<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Permissions\StoreRequest;
use App\Http\Requests\Permissions\UpdateRequest;
use App\Models\Permession;

class PermissionsController extends Controller
{
    public function index()
    {
        return view('admin.permissions.index');
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(StoreRequest $request)
    {
        //
    }

    public function show(Permession $permession)
    {
        //
    }

    public function edit(Permession $permession)
    {
        //
    }

    public function update(UpdateRequest $request, Permession $permession)
    {
        //
    }

    public function destroy(Permession $permession)
    {
        //
    }
}
