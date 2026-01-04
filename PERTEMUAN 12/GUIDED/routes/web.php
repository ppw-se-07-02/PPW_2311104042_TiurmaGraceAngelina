<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert-data1', [MahasiswaController::class, 'insertSql']);
Route::get('/insert-data2', [MahasiswaController::class, 'insertQB']);
Route::get('/insert-data3', [MahasiswaController::class, 'insertEloquent']);