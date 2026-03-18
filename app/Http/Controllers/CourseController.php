<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return redirect('/courseadd')->with('succes', 'posted succesfully');
    }
}
