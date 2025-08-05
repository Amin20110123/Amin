<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));    
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'box_title' => 'required',
            'box_description' => 'required'
        ]);

        Category::create($request->all());

        return redirect()->route('categories.index')
                         ->with('success', 'Category created successfully.');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'box_title' => 'required|max:255',
            'box_description' => 'required',
        ]);

        $category = Category::findOrFail($id);
        $category->update($validated);

        return redirect()->route('categories.index')
                         ->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')
                         ->with('success', 'Category deleted successfully.');
    }
}