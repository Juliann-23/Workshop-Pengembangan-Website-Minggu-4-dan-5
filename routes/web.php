<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Frontend
Route::get('/', function () {
    return view('frontend.index');
})->name('frontend');

// Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Admin
Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin');

// Tugas sebelumnya
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
