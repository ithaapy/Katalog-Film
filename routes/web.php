<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/', [FilmController::class, 'home'])->name('home');
Route::get('/katalog', [FilmController::class, 'katalog'])->name('katalog');
// “Kalau ada user membuka alamat /katalog, jalankan method katalog di FilmController.”
Route::get('/film/{id}', [FilmController::class, 'detail'])->name('detail');
Route::get('/about', [FilmController::class, 'about'])->name('about');
Route::get('/genre/{category:slug}', [FilmController::class, 'kategori'])->name('kategori');