<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PenghuniController;


// Route Unguided
Route::get('/unguided/insert-sql', [PenghuniController::class, 'insertSql']);
Route::get('/unguided/insert-qb', [PenghuniController::class, 'insertQB']);
Route::get('/unguided/insert-eloquent', [PenghuniController::class, 'insertEloquent']);