<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\UpdateRequest;
use App\Http\Requests\News\StoreRequest;
use App\Models\News;

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

    public function store(StoreRequest $request)
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

    public function update(UpdateRequest $request, News $new)
    {
        //
    }

    public function destroy(News $new)
    {
        //
    }
}
