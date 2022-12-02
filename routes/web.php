<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuteurController;
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
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name("book.index");
Route::get('/create-book', [BookController::class, 'create'])->name("book.create");
Route::post('/create-book', [BookController::class, 'store'])->name("book.store");
Route::get('/book/{id}', [BookController::class, 'show'])->name("book.show");
Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name("book.edit");
Route::put('/book/{id}', [BookController::class, 'update'])->name("book.update");
Route::delete('/book', [BookController::class, 'destroy'])->name("book.destroy");

Route::get('/genres', [GenreController::class, 'index'])->name("genre.index");
Route::post('/create-genre', [GenreController::class, 'store'])->name("genre.store");
Route::get('/create-genre', [GenreController::class, 'create'])->name("genre.create");
Route::get('/genre/{id}', [GenreController::class, 'show'])->name("genre.show");
Route::get('/genre/{id}/edit', [GenreController::class, 'edit'])->name("genre.edit");
Route::put('/genre/{id}', [GenreController::class, 'update'])->name("genre.update");
Route::delete('/genre', [GenreController::class, 'destroy'])->name("genre.destroy");

Route::get('/auteurs', [AuteurController::class, 'index'])->name("auteur.index");
Route::post('/create-auteur', [AuteurController::class, 'store'])->name("auteur.store");
Route::get('/create-auteur', [AuteurController::class, 'create'])->name("auteur.create");
Route::get('/auteur/{id}', [AuteurController::class, 'show'])->name("auteur.show");
Route::get('/auteur/{id}/edit', [AuteurController::class, 'edit'])->name("auteur.edit");
Route::put('/auteur/{id}', [AuteurController::class, 'update'])->name("auteur.update");
Route::delete('/auteur', [AuteurController::class, 'destroy'])->name("auteur.destroy");