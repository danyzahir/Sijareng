<?php

use Illuminate\Support\Facades\Route;

// Route untuk autentikasi (login, register, dll.)
Auth::routes();

// Route untuk halaman utama yang mengarahkan ke home
Route::get('/', function () {
    return redirect()->route('home'); // Mengarahkan ke route home
});



// Route untuk halaman home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route untuk halaman pembayaran
Route::get('/pembayaran', function () {
    return view('pembayaran');
})->name('pembayaran');

// Route untuk halaman matkul
Route::get('/matkul', function () {
    return view('matkul');
})->name('matkul');

// Route untuk halaman tugas
Route::get('/tugas', function () {
    return view('tugas');
})->name('tugas');
