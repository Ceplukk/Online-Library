<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use App\Models\Publisher;
use App\Http\Controllers\Controller;


class LibraryController extends Controller
{
    public function index()
    {
        return view('main.index', [
            'books'     => Book::latest()->paginate(4),
            'banner'    => Book::latest('id')->first() ,
            'categories' => Category::all(),
            'author'    => Author::all(),
            'publisher' => Publisher::all(),
        ]);
    }
    public function productDetails($id)
    {
        return view('main.product-details', [
            'book' => Book::find($id),
            'books' => Book::latest()->paginate(5)
        ]);
    }
    public function collections()
    {
        return view('main.collections', [
            'books' => Book::latest()->paginate(10)
        ]);
    }
    public function collectionsByCategory(Category $category)
    {
        return view('main.collections-category', [
            'categories' => $category->book()->get(),
            'category'   => $category->book()->get('category_id')
        ]);
    }
    public function collectionsByAuthor(Author $author)
    {

        return view('main.collections-author', [
            'authors'    => $author->book()->get(),
            'author'     => $author->book()->get('author_id')
        ]);
    }
}
