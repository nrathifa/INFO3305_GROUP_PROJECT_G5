<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReadersController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/genre', function(){
    return view('genre');
});


Route::get('/home', [HomeController::class, 'index']);
Route::get('/adminpage', [HomeController::class, 'page'])->middleware(['auth','admin']);
Route::get('/readerprofile', [ReadersController::class, 'index']);
Route::get('/genre', [GenreController::class, 'checkGenre']);
Route::get('/genres/{genre}', [GenreController::class, 'show'])->name('genre.show');

Route::get('/admin.adminprofile', function () {
    return view('admin.adminprofile');
});


//Book Routes
Route::get('admin/book', [BookController::class, 'index']) ->name('admin.book.book');
Route::get('admin/book/add', [BookController::class, 'add']) ->name('admin.book.add-book');
Route::post('admin/book/add', [BookController::class, 'store']) ->name('admin.book.store');
Route::get('admin/book/edit/{book}', [BookController::class, 'edit']) ->name('admin.book.edit');
Route::post('admin/book/edit/{book}', [BookController::class, 'update']) ->name('admin.book.update');
Route::delete('admin/book/delete/{book}', [BookController::class, 'destroy'])->name('admin.book.delete');
