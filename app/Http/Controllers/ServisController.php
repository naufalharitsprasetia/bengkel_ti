<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServisController extends Controller
{
    //
    public function index()
    {
        return view('servis', [
            'active' => 'lain-lain',
            'title' => 'Servis',
        ]);
    }
}
