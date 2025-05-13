<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;

// Page d'accueil
Route::get('/', function () {
    return view('pages.home');
    // routes/web.php
})->name('home');


Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');




Route::get('/books/{id}/review', [BookController::class, 'reviewForm'])->name('books.reviewForm');
Route::post('/books/{id}/review', [BookController::class, 'addReview'])->name('books.addReview');



Route::get('/about', function () {
    abort(404);
})->name('about');