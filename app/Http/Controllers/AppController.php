<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function project()
    {
        return view('project');
    }
    public function contact()
    {
        return view('contact');
    }
}
