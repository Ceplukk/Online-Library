<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index',[
            
        ]);
    }
    public function books()
    {
        return view('admin.books', [
            'books'     => Book::all(),
            'author'    => Author::all(),
            'publisher' => Publisher::all(),
            'category'  => Category::all()
        ]);
    }
    public function indexAddBook()
    {
        return view('admin.add', [
            'authors' => Author::all(),
            'publishers' => Publisher::all(),
            'categories' => Category::all()
        ]);
    }
    public function indexAutPub()
    {
        return view('admin.addAutPub');
    }
    public function storeAuthor(Request $request)
    {
        $validateData = $request->validate([
            'name'  => 'required|unique:authors',
        ]);


        Author::create($validateData);
        return back()->with('success', 'New Author has been added!');
    }
    public function storePublisher(Request $request)
    {
        $validateData = $request->validate([
            'name'      => 'required',
            'address'   => 'required'
        ]);

        Publisher::create($validateData);
        return redirect('/admin/books')->with('success', 'New Publisher has been added!');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id'            => 'required',
            'title'         => 'required',
            'author_id'     => 'required',
            'publisher_id'  => 'required',
            'category_id'         => 'required',
            'released_at'   => 'required',
            'synopsis'      => 'required',
            'cover_book'    => 'image',
            'e_book'        => 'required'
        ]);

        if ($request->file('cover_book')) {
            $validateData['cover_book'] = $request->file('cover_book')->store('cover-image');
        }
        if ($request->file('e_book')) {
            $validateData['e_book'] = $request->file('e_book')->store('e-book');
        }

        Book::create($validateData);
        return redirect('/admin/books')->with('success', 'New Book has been added!');
    }

    public function editBook(Request $request)
    {
        $validateData = $request->validate([
            'id'            => 'required',
            'title'         => 'required',
            'author_id'     => 'required',
            'publisher_id'  => 'required',
            'category_id'         => 'required',
            'released_at'   => 'required',
            'synopsis'      => 'required',
            'cover_book'    => 'image',
            'e_book'        => 'required'
        ]);

        if ($request->file('cover_book')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['cover_book'] = $request->file('cover_book')->store('cover-image');
        }
        if ($request->file('e_book')) {
            if ($request->oldEbook) {
                Storage::delete($request->oldEbook);
            }

            $validateData['e_book'] = $request->file('e_book')->store('e-book');
        }

        Book::where('id', $request->id)
            ->update($validateData);

        return redirect('/admin/books')->with('success', 'Book has been updated!');
    }

    public function deleteBook(Request $request)
    {

        $book = Book::where('id', $request->id);
        $book->delete();

        return redirect('/admin/books')->with('success', 'Book has been deleted!');
    }
}
