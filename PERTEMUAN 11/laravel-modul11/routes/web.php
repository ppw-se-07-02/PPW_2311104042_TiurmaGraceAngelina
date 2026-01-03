<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return 'Halaman Utama';
});

Route::get('/about', function () {
    return 'Halaman About';
});

Route::get('/contact', function () {
    return 'Halaman Contact';
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/home', [PageController::class, 'home']);
