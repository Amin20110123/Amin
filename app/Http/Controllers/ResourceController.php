<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Category;
use App\Models\Course;

class ResourceController extends Controller
{
    public function index(){

        $questions = Question::all();
        $categories = Category::all();
        $courses = Course::all();
        return view('front.index', [
                                        'questions' => $questions,
                                        'categories' => $categories,
                                        'courses' => $courses,
                                    ]);

    }

    public function about(){
        return view('front.about');
    }

    public function courses(){
        return view('front.courses');
    }

    public function contact(){
        return view('front.contact');
    }
}
