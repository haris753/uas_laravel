<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Menampilkan daftar produk
    public function index()
    {
        $products = Product::with('kategori')->get(); // Mengambil data produk beserta kategori
        return view('produk', compact('products'));
    }

    // Menampilkan form tambah produk
    public function create()
    {
        $kategori = Kategori::all(); // Mengambil semua kategori
        return view('produkcreate', compact('kategori'));
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kode_produk' => 'required|max:10',
            'nama_produk' => 'required|max:100',
            'deskripsi' => 'required|max:150',
            'gambar' => 'required|image|max:2048',
            'nama_kategori' => 'required|exists:nama_kategori'
        ]);

        // Upload gambar dan ambil path-nya
        $path = $request->file('gambar')->store('images', 'public');

        // Simpan produk ke database
        Product::create([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('produk')->with('success', 'Produk berhasil ditambahkan!');
    }

    // Menghapus produk
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Hapus gambar terkait jika ada
        if ($product->gambar) {
            Storage::delete('public/' . $product->gambar); // Hapus gambar di storage
        }

        // Hapus produk
        $product->delete();

        return redirect()->route('produk')->with('success', 'Produk berhasil dihapus!');
    }
}
