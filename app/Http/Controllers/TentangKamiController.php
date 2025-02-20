<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        // Menampilkan halaman Tentang Kami
        return view('tentangkami');
    }
}
