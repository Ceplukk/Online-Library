<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    public function index()
    {
        return view('main.index', [
            'books' => Book::latest()->paginate(4),
            'banner' => Book::latest()->get()
        ]);
    }

    public function show()
    {
        return view('main.details-product');
    }
}
