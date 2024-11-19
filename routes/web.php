<?php

use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;

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



Route::get('/mahasiswa', [mahasiswaController::class, 'tampil'])->name('mahasiswa.tampil');

Route::get('/mahasiswa/tambah', [mahasiswaController::class, 'tambah'])->name('mahasiswa.tambah');

Route::post('/mahasiswa/submit', [mahasiswaController::class, 'submit'])->name('mahasiswa.submit');

Route::get('/mahasiswa/edit/{id}', [mahasiswaController::class, 'edit'])->name('mahasiswa.edit');

Route::post('/mahasiswa/update/{id}', [mahasiswaController::class, 'update'])->name('mahasiswa.update');

Route::get('/mahasiswa/hapus/{id}', [mahasiswaController::class, 'hapus'])->name('mahasiswa.hapus');