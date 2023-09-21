<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin', [
            'active' => 'lain-lain',
            'now' => null,
            'title' => 'Admin',
            'products' => Product::all(),
            'categories' => Category::all()
        ]);
    }
}
