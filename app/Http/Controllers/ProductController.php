<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        return view('shop', [
            'active' => 'shop',
            'now' => null,
            'title' => 'Shop',
            'products' => Product::all(),
            'categories' => Category::all()
        ]);
    }
    public function show(Category $category)
    {
        return view('shop', [
            'active' => 'shop',
            'title' => 'Shop',
            'now' => $category,
            'products' => Product::where('category_id', $category->id)->get(),
            'categories' => Category::all()
        ]);
    }
}
