<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Http\Requests\StoreNewRequest;
use App\Http\Requests\UpdateNewRequest;

class NewsController extends Controller
{
    public function index()
    {
        return view('admin.news.index');
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(StoreNewRequest $request)
    {
        //
    }

    public function show(News $new)
    {
        //
    }

    public function edit(News $new)
    {
        //
    }

    public function update(UpdateNewRequest $request, News $new)
    {
        //
    }

    public function destroy(News $new)
    {
        //
    }
}
