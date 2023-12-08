@extends('layouts.main')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data for all books</h6>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active " aria-current="page" data-bs-toggle="tab" href="#books">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#author" data-bs-toggle="tab">Author</a>
                </li>

            </ul>
            <div class="tab-content ">
                <div role="tabpanel" id="books" class="tab-pane active">
                    <div class="table-responsive" id>
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No ISBN</th>
                                    <th>title</th>
                                    <th>Author</th>
                                    <th>Publisher</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>No Isbn</th>
                                    <th>title</th>
                                    <th>Author</th>
                                    <th>Publisher</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            @php
                                $i = 1;
                            @endphp
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td> {{ $i }} </td>
                                        <td> {{ $book->id }} </td>
                                        <td> {{ $book->title }} </td>
                                        <td> {{ $book->author->name }} </td>
                                        <td> {{ $book->publisher->name }} </td>
                                        <td> {{ $book->category->category }} </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <div class="me-3">
                                                    <button type="button" class=" btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#updateModal">
                                                        <i class="bi bi-pen"></i>
                                                    </button>
                                                </div>
                                                <form action="{{ route('admin.book.delete') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $book->id }}">
                                                    <button type="submit" class=" btn btn-danger"
                                                        onclick="return confirm('Are You Sure ?')">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.book.edit') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $book->id }}">
                        <input type="hidden" name="oldImage" value="{{ $book->cover_book }}">
                        <input type="hidden" name="oldEbook" value="{{ $book->e_book }}">
                        <div class="form-floating mb-3">
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                id="floatingInput" value="{{ old('title', $book->title) }}">
                            <label for="floatingInput">Title</label>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select @error('author_id') is-invalid @enderror" name="author_id"
                                id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Auhtors</option>
                                @foreach ($author as $a)
                                    <option value="{{ $a->id }}"> {{ $a->name }} </option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Select The Author</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select @error('publisher_id') is-invalid @enderror" name="publisher_id"
                                id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Publisher</option>
                                @foreach ($publisher as $p)
                                    <option value="{{ $p->id }}"> {{ $p->name }} </option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Select The Publisher</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select @error('category_id') is-invalid @enderror" name="category_id"
                                id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Category</option>
                                @foreach ($category as $c)
                                    <option value="{{ $c->id }}"> {{ $c->category }} </option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Select The Category</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="date" name="released_at"
                                class="form-control @error('released_at') is-invalid @enderror" id="floatingInput"
                                placeholder="DD-MM-YYYY" value="{{ old('released_at', $book->released_at) }}">
                            <label for="floatingInput">Released At</label>
                            @error('date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control @error('synopsis') is-invalid @enderror" name="synopsis" placeholder="Synopsis"
                                id="floatingTextarea2" style="height: 100px">{{ old('synopsis', $book->synopsis) }} </textarea>
                            <label for="floatingTextarea2">Synopsis</label>
                            @error('synopsis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="cover_book" class="form-label">Cover Book</label>
                            <input class="form-control" type="file" id="cover_book" name="cover_book">
                            @error('cover_book')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="e_book" class="form-label">E-Book</label>
                            <input class="form-control" type="file" id="e_book" name="e_book">
                            @error('e_book')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        {{-- Form Upload PDF --}}
                        {{-- <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">PDF</label>
                        </div>
                        
                        --}}

                        <div class="d-flex justify-content-center">
                            <input type="submit" class="btn btn-success col col-md-3" name="store"
                                value="Add Book"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
