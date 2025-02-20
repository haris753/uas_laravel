<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // Ambil jumlah data yang diperlukan
        $productCount = Product::count();
        $kategoriCount = Kategori::count();
        $userCount = User::count();
        $username = Auth::user()->name;

        // Kirim data ke view
        return view('admin.dashboard', compact('productCount', 'kategoriCount', 'userCount', 'username'));
    }
}
