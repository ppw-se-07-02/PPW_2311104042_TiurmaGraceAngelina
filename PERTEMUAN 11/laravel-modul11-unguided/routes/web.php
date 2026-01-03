<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnguidedController;

// Route tanpa parameter - 1
Route::get('/dashboard', function () {
    return 'Halaman Dashboard';
});

Route::get('/profil', function () {
    return 'Halaman Profil';
});

Route::get('/kontak', function () {
    return 'Halaman Kontak';
});

Route::get('/galeri', function () {
    return 'Halaman Galeri';
});

Route::get('/informasi', function () {
    return 'Halaman Informasi';
});

// Route dengan Parameter - 2
Route::get('/user/{id}', function ($id) {
    return "User dengan ID: $id";
});

Route::get('/produk/{nama}', function ($nama) {
    return "Nama Produk: $nama";
});

Route::get('/kelas/{nama}/{angkatan}', function ($nama, $angkatan) {
    return "Kelas $nama Angkatan $angkatan";
});


// Route dengan optional parameter - 3
Route::get('/kendaraan/{jenis?}', function ($jenis = 'Motor') {
    return "Jenis Kendaraan: $jenis";
});

Route::get('/buku/{judul?}/{penulis?}', function ($judul = 'Tidak Ada', $penulis = 'Anonim') {
    return "Buku: $judul - $penulis";
});

Route::get('/alamat/{kota?}', function ($kota = 'Medan') {
    return "Kota: $kota";
});

//nomor 2

Route::get('/asset', function () {
    return view('asset');
});

//nomor 3

Route::get('/blade', function () {
    $data = ['A', 'B', 'C', 'D', 'E'];
    return view('blade', compact('data'));
});

//nomor 4

Route::get('/controller', [UnguidedController::class, 'index']);
