<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use Illuminate\Http\Request;

class CRUDServisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('crud-servis.index', [
            'title' => 'CRUD Servis',
            'active' => 'lain-lain',
            'services' => Servis::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('crud-servis.create', [
            'title' => 'Create Servis',
            'active' => 'lain-lain',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'jenis_barang' => 'required',
            'jenis_servis' => 'required',
            'tanggal_servis' => 'required',
            'status' => 'required'
        ]);

        Servis::create($validatedData);

        return redirect('/crud-servis')->with('success', 'Servis has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servis $servis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servis $servis)
    {
        //
        return view('crud-servis.edit', [
            'title' => 'Edit Servis',
            'active' => 'lain-lain',
            'servis' => $servis
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servis $servis)
    {
        //
        $rules = [
            'nama' => 'required|max:255',
            'jenis_barang' => 'required',
            'jenis_servis' => 'required',
            'tanggal_servis' => 'required',
            'status' => 'required'
        ];


        $validatedData = $request->validate($rules);

        Servis::where('id', $servis->id)->update($validatedData);

        return redirect('/crud-servis')->with('success', 'Servis telah di update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servis $servis)
    {
        //
        Servis::destroy($servis->id);
        return redirect('/crud-servis')->with('success', 'Servis has been deleted!');
    }
}
