<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------7
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/dashbord', function(){
    return view('dashbord');
})->middleware('auth');

Route::get('/produk', function(){
    return view('produk');
})->middleware('auth')->name('produk');

Route::get('/kategori', function(){
    return view('kategori');
})->middleware('auth')->name('kategori');

Route::get('/produk/detil', function(){
    return view('detil-produk');
})->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login',         [LoginController::class, 'halamanLogin'])->name('login');
Route::post('/proses-login', [LoginController::class, 'prosesLogin']);
Route::get('/logout',        [LoginController::class, 'logout'])->middleware('auth');

Route::get('/ganti-password', [LoginController::class, 'halamanGantiPassword'])->middleware('auth');
Route::post('/proses-ganti-password', [LoginController::class, 'prosesGantiPassword'])->middleware('auth');

Route::get('/daftar', [DaftarController::class, 'halamanDaftar']);
Route::post('/proses-daftar', [DaftarController::class, 'prosesDaftar']);

Route::get('/users', [UserController::class, 'halamanDaftarUser'])->middleware('auth');
Route::get('/tentangkami', [TentangKamiController::class, 'index'])->middleware('auth')->name('tentangkami');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});

Route::resource('produk', ProductController::class); 
Route::get('produkcreate', [ProductController::class, 'create'])->name('produkcreate');
Route::get('produk', [ProductController::class, 'index'])->name('produk');

Route::resource('kategori', KategoriController::class); 
Route::get('createkategori', [KategoriController::class, 'create'])->name('createkategori');   
Route::post('kategori', [KategoriController::class, 'store'])->name('kategori');
