<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    //
    public function index()
    {
        return view('keranjang', [
            'title' => 'Keranjang',
            'active' => 'keranjang',
            'pembelians' => Pembelian::where('user_id', auth()->user()->id)->get()
        ]);
    }
}
