<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index($ubg)
    {
        return view('portofolio', compact('ubg'));
    }
}
