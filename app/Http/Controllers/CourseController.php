<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {

        $data = Course::all();
        // dd($data);

        return view('course.index', compact('data'));
    }

    public function create()
    {
        return view('course.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required|min:15',
            'price' => 'required|numeric',
            'insitution_id' => 'required'


        ]);
        // $data = Blog::create($request->all());
        // return redirect('blog');
    }
}