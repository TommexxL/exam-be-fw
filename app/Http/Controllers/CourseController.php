<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'active' => 'required|boolean'  
        ]);


        Course::create($validated);

        return redirect('/home')->with('success', 'Course added succesfully');
    }

    public function index(Request $request)
    {
        $courses = Course::orderBy('title', 'asc')->get();

        return view('home', [
        'courses' => $courses
        ]);
    }
}
