<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // Tidak perlu middleware auth di sini karena ingin akses bebas
    public function index()
    {
        // Cek apakah pengguna sudah login
        if (Auth::check()) {
            // Jika sudah login, tampilkan dashboard pengguna
            return view('dashboard', ['user' => Auth::user()]);
        } else {
            // Jika belum login, redirect ke halaman login
            return redirect()->route('login');
        }
    }
}
