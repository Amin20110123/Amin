<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
   
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses')); 
    }

    
    public function create()
    {
        return view('admin.courses.create');
    }

    
    public function store(Request $request)
    {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            $imageName = null;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads'), $imageName);
            }
            Course::create([
                'title' => $request->title,
                'description' => $request->description,
                'img' => $imageName
            ]);
    
            return redirect()->route('courses.index')
                             ->with('success', 'Course created successfully.');
    }

    
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.courses.show', compact('course'));
    }

   
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.courses.edit', compact('course'));
    }

    
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $course = Course::findOrFail($id);
        $course->update($validated);

        return redirect()->route('courses.index')
                         ->with('success', 'Course updated successfully.');
    }

    
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('courses.index')
                         ->with('success', 'Course deleted successfully.');
    }
}
