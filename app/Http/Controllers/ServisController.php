<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    //
    public function index()
    {
        return view('servis', [
            'active' => 'lain-lain',
            'title' => 'Servis',
            'services' => Servis::all()
        ]);
    }
}
