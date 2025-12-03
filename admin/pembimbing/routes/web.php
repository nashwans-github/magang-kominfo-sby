<?php

use Illuminate\Support\Facades\Route;

// Route halaman utama (DASHBOARD)
Route::get('/', function () {
    return view('home');
});

// Route halaman DAFTAR PESERTA
Route::get('/peserta', function () {
    return view('peserta.index');
});

// Route untuk Halaman Detail Peserta (STATIS CUY)
Route::get('/peserta/detail', function () {
    return view('peserta.detail');
});

// Route untuk Halaman Presensi
Route::get('/presensi', function () {
    return view('presensi.index');
});

// Route untuk Halaman Presensi
Route::get('/presensi/detail', function () {
    return view('presensi.detail');
});

// Route untuk Halaman Progres
Route::get('/progres', function () {
    return view('progres.index');
});

// Route untuk Halaman Progres
Route::get('/progres/detail', function () {
    return view('progres.detail');
});

// Route untuk Halaman Penilaian
Route::get('/penilaian', function () {
    return view('penilaian.index');
});

// Route untuk Halaman Progres
Route::get('/penilaian/detail', function () {
    return view('penilaian.detail');
});

// Route Halaman Edit Penilaian
Route::get('/penilaian/edit', function () {
    return view('penilaian.edit');
});