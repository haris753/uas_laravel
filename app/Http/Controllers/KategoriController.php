<?php


namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    // Menampilkan daftar kategori
    public function index()
    {
        $kategoris = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    // Menampilkan form untuk menambah kategori
    public function create()
    {
        return view('kategori.create');
    }

    // Menyimpan kategori baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_kategori' => 'required|string|max:50',
        ]);

        // Menyimpan kategori
        Kategori::create($request->all());
        return redirect()->route('kategori');
    }

    // Menampilkan form untuk mengedit kategori
    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    // Mengupdate kategori
    public function update(Request $request, Kategori $kategori)
    {
        // Validasi input
        $request->validate([
            'nama_kategori' => 'required|string|max:50',
        ]);

        // Update kategori
        $kategori->update($request->all());
        return redirect()->route('kategori');
    }

    // Menghapus kategori
    public function destroy(Kategori $kategori)
    {
        // Hapus kategori
        $kategori->delete();
        return redirect()->route('kategori');
    }
}

