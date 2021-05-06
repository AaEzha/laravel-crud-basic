<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('master');
});

Route::get('/', [ProductController::class, 'index'])->name('tampil');
Route::get('/tambah', [ProductController::class, 'tambah'])->name('tambah');
Route::post('/tambah', [ProductController::class, 'simpan'])->name('simpan');
Route::get('/ubah/{product}', [ProductController::class, 'ubah'])->name('ubah');
Route::post('/ubah/{product}', [ProductController::class, 'update'])->name('update');
Route::get('/hapus/{product}', [ProductController::class, 'hapus'])->name('hapus');
