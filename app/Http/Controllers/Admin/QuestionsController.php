<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class QuestionsController extends Controller
{
    
    public function index()
    {
        $items = Question::all();
        
        return view('admin.questions.index', compact('items'));
    }

    
    public function create()
    {
        return view('admin.questions.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
            
        ]);

        Question::create($request->all());

        return redirect()->route('questions.index')
                         ->with('success', 'Questions created successfully.');
    }

    
    public function show($id)
    {
        $item = Question::findOrFail($id);
        return view('admin.questions.show', compact('item'));
    }

    
    public function edit($id)
    {
        $item=Question::Find($id);
        return view('admin.questions.edit', compact('item'));
    }

    
    public function update(Request $request, $id)
    {
        $validated=$request->validate([
            'title' => 'required|max:255',
            'description' => 'required',

        ]);

        $item = Question::findOrFail($id);
        $item->update($validated);

        return redirect()->route('questions.index')
                    ->with('success', 'Questions updated successfully');
    }

    
    public function destroy($id)
    {
        
        $item = Question::findOrFail($id);
        $item->delete();

        return redirect()->route('questions.index')
                     ->with('success', 'Question deleted successfully.');
    }
}