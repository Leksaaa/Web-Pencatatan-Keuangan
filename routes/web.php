<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\transaksicontroller;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\post1controller;
use App\Http\Controllers\kategoricontroller;
use App\Http\Controllers\akuncontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\akunusercontroller;



use App\Models\kategori;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/navigasi', function () {
    return view('navbar.navigasi');
});

// Rute untuk pengguna biasa (user)
Route::middleware(['auth'])->group(function () {
    Route::get('/beranda/user', function () {
        return view('user.beranda');
    });
    Route::resource('/transaksi/user', post1controller::class);
    Route::get('/kategori/user', function () {
        $kategori = kategori::all();
        return view('user.kategori', ['kategori'=>$kategori]);
    });

    Route::get('/account/user', [akunusercontroller::class, 'index']);

    Route::get('/about/user', function () {
        return view('user.about');
    });
});

// Rute khusus admin
Route::get('/beranda/admin', function () {
    return view('admin.beranda');
});
Route::resource('/transaksi/admin', Postcontroller::class);
Route::resource('/kategori/admin', kategoricontroller::class);
Route::resource('/account/admin', akuncontroller::class);
Route::get('/about/admin', function () {
    return view('admin.about');
});















