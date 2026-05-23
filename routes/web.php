<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/halo', function () {
    return "Halo, Selamat Datang di Praktikum Laravel Pertama anda.";
});
Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Halo, " . $nama . ". Selamat Datang di Praktikum Laravel Pertama anda.";
});
Route::get('/profil', function () {
    return view('profil', ['nama' => 'John Doe']);
});
Route::get('/kalkulator/{angka1}/{angka2}', function ($angka1, $angka2) {
    return view('kalkulator', ['angka1' => $angka1, 'angka2' => $angka2]);
});
// Route::get('/barang', [BarangController::class, 'index']);
Route::resource('/barang', BarangController::class);
Route::get('/barang/detail/{id}', [BarangController::class, 'detail'])->name('barang.detail');
Route::resource('/kategori', KategoriController::class);
Route::get('/kategori-filter/{id}', [BarangController::class, 'kategori'])->name('kategori.filter');
