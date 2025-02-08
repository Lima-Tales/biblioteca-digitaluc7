<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;


Route::get('/', function () {
    return view('home');
});
Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);
Route::resource('genres', GenreController::class);
Route::get('/register', function () {
    return view('register'); // Ajuste conforme necessário
})->name('register');
