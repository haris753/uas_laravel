<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda dengan nama default (kategoris)
    protected $table = 'kategori';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = ['nama_kategori'];

    // Menghindari penggunaan kolom created_at dan updated_at secara otomatis jika tidak digunakan
    public $timestamps = true;
}
