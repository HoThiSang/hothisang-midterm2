<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Modern Interior Design Studio';
        return view('pages/shop', compact('title'));
    }

    public function blog()
    {
        $title = 'Blog';
        return view('pages/blog', compact('title'));
    }
}
