<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListProdukController;

// Rute halaman utama
Route::get('/', [HomeController::class, 'index']); // hanya ini yang dipakai

// Rute menampilkan daftar produk
Route::get('/listproduk', [ListProdukController::class, 'index'])->name('produk.index');

// Rute simpan produk dari form
Route::post('/produk/simpan', [ListProdukController::class, 'simpan'])->name('produk.simpan');

// (Opsional) Rute contact jika ada halaman contact
Route::get('/contact', [HomeController::class, 'contact']);
