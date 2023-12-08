<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BooksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Authentication
Route::controller(AuthController::class)->group(function () {

    Route::get('register', 'indexRegis')->name('register');
    Route::post('register', 'registStore')->name('FormRegis');
    Route::get('login', 'indexLog')->name('login');
    Route::post('login', 'loginUser')->name('FormLogin');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('admin', 'index')->name('admin');

    Route::get('admin/book/add', 'indexAddBook')->name('admin.book.add');
    Route::post('admin/book/add', 'store')->name('admin.book.store');

    Route::get('admin/author/add', 'indexAutPub')->name('admin.author.add');
    Route::post('admin/author/add', 'storeAuthor')->name('admin.author.add');
    Route::post('admin/publisher/add', 'storePublisher')->name('admin.publisher.add');

    Route::post('admin/book/edit', 'editBook')->name('admin.book.edit');
    Route::post('admin/book/delete', 'deleteBook')->name('admin.book.delete');

    Route::get('admin/books', 'books')->name('admin.books');
});


