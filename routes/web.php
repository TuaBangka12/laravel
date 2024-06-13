<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuatSuratController;
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
    return view('dashboard');
});

Route::get('/tampilsurat', function () {
    return view('buat_surat');
});
Route::post('/tambah', [BuatSuratController::class, 'store'])->middleware('web');

Route::get('/tampil', [App\Http\Controllers\BuatSuratController::class, 'index']);