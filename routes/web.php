<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;

Route::get('/login', function () {
    return view('login');
});

Route::get('/halutama', function () {
    return view('halutama');
});

Route::post('/halutama', function () {
    return view('halutama');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', [PengaduanController::class, 'index']);
Route::get('/isi-pengaduan', [PengaduanController::class, 'tampil_isi_pengaduan']);
Route::post('/laporan', [PengaduanController::class, 'proses_tambah_pengaduan']);
