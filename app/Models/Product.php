<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'produk'; // Nama tabel yang ada di database
    protected $fillable = [
        'kode_produk', 'nama_produk', 'deskripsi', 'gambar', 'kategori_id'
    ];

    // Relasi ke model Kategori (asumsi ada tabel kategori)
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
