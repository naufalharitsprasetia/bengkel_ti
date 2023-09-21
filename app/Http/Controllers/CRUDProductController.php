<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CRUDProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('crud-product.index', [
            'title' => 'CRUD Product',
            'active' => 'lain-lain',
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('crud-product.create', [
            'title' => 'Create Category',
            'active' => 'lain-lain',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'slug' => 'required|unique:products',
            'image' => 'image|file|max:5120',
            'price' => 'required',
            'diskon' => 'required',
            'category_id' => 'required',
            'desc' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Product::create($validatedData);

        return redirect('/crud-product')->with('success', 'Product has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return view('dashboard.posts.show', [
            'title' => 'Show Product',
            'active' => 'lain-lain',
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        return view('crud-product.edit', [
            'title' => 'Show Product',
            'active' => 'lain-lain',
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $rules = [
            'nama_produk' => 'required|max:255',
            'image' => 'image|file|max:5120',
            'price' => 'required',
            'diskon' => 'required',
            'category_id' => 'required',
            'desc' => 'required'
        ];


        if ($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Product::where('id', $product->id)->update($validatedData);

        return redirect('/crud-product')->with('success', 'Product telah di update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
