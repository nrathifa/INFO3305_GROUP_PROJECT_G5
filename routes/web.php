<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReadersController;
use App\Http\Controllers\BookController;

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

Route::get('/home', [HomeController::class, 'index']);
Route::get('/adminpage', [HomeController::class, 'page'])->middleware(['auth','admin']);
Route::get('/readerprofile', [ReadersController::class, 'index']);

Route::get('/admin.adminprofile', function () {
    return view('admin.adminprofile');
});

Route::get('/add-book', function () {
    return view('add-book');
});

Route::resource('book', BookController::class);
Route::get('/book', [BookController::class, 'index'])->name('book.index');

Route::delete('/book/{book}', [BookController::class, 'destroy'])->name('book.destroy');
