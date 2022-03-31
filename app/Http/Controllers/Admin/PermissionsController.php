<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permession;
use App\Http\Requests\StorePermessionRequest;
use App\Http\Requests\UpdatePermessionRequest;

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

    public function store(StorePermessionRequest $request)
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

    public function update(UpdatePermessionRequest $request, Permession $permession)
    {
        //
    }

    public function destroy(Permession $permession)
    {
        //
    }
}
