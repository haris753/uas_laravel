<?php

namespace App\Http\Controllers;

use App\Models\Product; // Pastikan kita menggunakan model Product
use App\Models\Kategori; // Asumsi ada model Kategori untuk relasi
use Illuminate\Http\Request;

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
        $kategories = Kategori::all(); // Mengambil semua kategori
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
            'kategori_id' => 'required|exists:kategoris,id'
        ]);

        // Upload gambar dan ambil path-nya
        $path = $request->file('gambar')->store('images', 'public');

        // Simpan produk ke database
        Product::create([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
            'kategori_id' => $request->kategori_id,
        ]);

        return redirect()->route('produk');
    }

    // Menampilkan form edit produk
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $kategories = Kategori::all(); // Mengambil semua kategori
        return view('produk.edit', compact('product', 'kategori'));
    }

    // Mengupdate produk
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Validasi input
        $request->validate([
            'kode_produk' => 'required|max:10',
            'nama_produk' => 'required|max:100',
            'deskripsi' => 'required|max:150',
            'gambar' => 'nullable|image|max:2048',
            'kategori_id' => 'required|exists:kategoris,id'
        ]);

        // Periksa apakah ada gambar baru, jika ada, upload gambar
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('images', 'public');
            $product->gambar = $path;  // Ganti gambar lama dengan yang baru
        }

        // Update produk
        $product->update([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'kategori_id' => $request->kategori_id,
        ]);

        return redirect()->route('produk');
    }

    // Menghapus produk
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('produk');
    }
}
