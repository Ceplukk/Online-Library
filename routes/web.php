<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ProfileController;

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
    Route::post('register', 'register')->name('FormRegis');
    Route::get('login', 'indexLog')->name('login');
    Route::post('login', 'login')->name('FormLogin');
    Route::post('logout', 'logout')->name('logout');
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

Route::controller(LibraryController::class)->group(function () {
    Route::get('/', 'index')->name('online.library');
    Route::get('/product-details/{book_id}', 'productDetails')->name('product.details');
    Route::get('/collections', 'collections')->name('collections');
    Route::get('/collections-category/{category}', 'collectionsByCategory')->name('collections.category');
    Route::get('/collections-author/{author}', 'collectionsByAuthor')->name('collections.author');
});

Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'index')->name('profile')->middleware('auth');
});

Route::get('/contact', function () {
    return view('main.contact');
})->name('contact_us');

