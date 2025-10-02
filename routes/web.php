<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengajuanController;

// Halaman utama
Route::get('/', function () {
    return view('index');
});

// Halaman ajukan
Route::get('/ajukan', function () {
    return view('ajukan');
});

// Halaman status
Route::get('/status', function () {
    return view('status');
});

// Halaman admin
Route::get('/admin', function () {
    return view('admin');
});

// Halaman login
Route::get('/login', function () {
    return view('login');
});

// Route untuk form pengajuan (POST)
Route::post('/pengajuan', [PengajuanController::class, 'store']);

// Lihat semua pengajuan (JSON sementara)
Route::get('/pengajuan', [PengajuanController::class, 'index']);
