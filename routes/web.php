<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/listproduk', [ListProdukController::class, 'show']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);