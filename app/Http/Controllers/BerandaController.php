<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller

{
    public function BerandaBackend()
    {
        return view('backend.v_beranda.index', [
            'judul' => 'Halaman Beranda',
        ]);
    }
}