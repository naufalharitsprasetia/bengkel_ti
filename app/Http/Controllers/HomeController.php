<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('index', [
            'active' => 'home',
            'title' => 'Home'
        ]);
    }
    public function about()
    {
        return view('about', [
            'active' => 'lain-lain',
            'title' => 'About'
        ]);
    }
}
