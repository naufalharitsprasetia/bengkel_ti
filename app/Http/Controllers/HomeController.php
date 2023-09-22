<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('index', [
            'active' => 'home',
            'title' => 'Home',
            'products' => Product::all()
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
