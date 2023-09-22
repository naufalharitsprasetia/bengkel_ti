<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\User;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    //
    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required',
            'user_id' => 'required',
        ]);
        $user = User::find(auth()->user()->id); // Mengambil objek user berdasarkan ID
        $user->increment('jumlah_keranjang', 1); // Menambahkan 1 ke kolom jumlah_keranjang

        Pembelian::create($validatedData);

        return redirect('/shop')->with('success', 'Produk telah ditambahkan ke keranjang!!');
    }
    public function delete(Pembelian $pembelian)
    {
        $user = User::find(auth()->user()->id); // Mengambil objek user berdasarkan ID
        $user->decrement('jumlah_keranjang', 1); // Menambahkan 1 ke kolom jumlah_keranjang

        Pembelian::destroy($pembelian->id);
        return redirect('/keranjang')->with('success', 'Keranjang telah dikurangi');
    }
}