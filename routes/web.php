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

Route::get('/userlibrary', function(){
    return view('userlibrary');
});


Route::get('/home', [HomeController::class, 'index']);
Route::get('/adminpage', [HomeController::class, 'page'])->middleware(['auth','admin']);
Route::get('/genre', [GenreController::class, 'checkGenre']);
Route::get('/genres/{genre}', [GenreController::class, 'show'])->name('genre.show');

Route::get('/admin.adminprofile', function () {
    return view('admin.adminprofile');
});

Route::get('/readerprofile', function () {
    return view('readerprofile');
});


//Book Routes
Route::get('book', [BookController::class, 'index']) ->name('book');
Route::get('add-book', [BookController::class, 'add']) ->name('add-book');
Route::post('add-book', [BookController::class, 'store']) ->name('store');
Route::get('edit/{book}', [BookController::class, 'edit'])->name('edit');
Route::post('edit/{book}', [BookController::class, 'update'])->name('update');
Route::delete('delete/{book}', [BookController::class, 'destroy'])->name('delete');

//mainpage list of books
Route::get('userbook', [ReadersController::class, 'index']) ->name('userbook');
Route::get('/search', [ReadersController::class, 'search']);
