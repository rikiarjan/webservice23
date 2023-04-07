<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $data = Blog::all();
        // dd($data);

        return view('blog.index', compact('data'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = Blog::create($request->all());
        return redirect('blog');
    }
}