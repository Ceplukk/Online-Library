@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card border shadow-lg mt-5">
                <h5 class="card-header">Add Book</h5>
                <div class="card-body">
                    <form action="{{ route('admin.book.add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="id" class="form-control @error('id') is-invalid @enderror"
                                id="floatingInput" value="{{ old('id') }}" autofocus>
                            <label for="floatingInput">No isbn</label>
                            @error('id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                id="floatingInput" value="{{ old('title') }}">
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
                                @foreach ($authors as $author)
                                    <option value="{{ $author->id }}"> {{ $author->name }} </option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Select Auhtor</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select @error('category_idi') is-invalid @enderror" name="publisher_id"
                                id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Publisher</option>
                                @foreach ($publishers as $publisher)
                                    <option value="{{ $publisher->id }}"> {{ $publisher->name }} </option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Select Publisher</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select @error('category_id') is-invalid @enderror" name="category_id"
                                id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"> {{ $category->category }} </option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Select Cattegory</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="date" name="released_at"
                                class="form-control @error('released_at') is-invalid @enderror" id="floatingInput"
                                placeholder="DD-MM-YYYY" value="{{ old('released_at') }}">
                            <label for="floatingInput">Released At</label>
                            @error('date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control @error('synopsis') is-invalid @enderror" name="synopsis" placeholder="Synopsis"
                                id="floatingTextarea2" style="height: 100px" value="{{ old('synopsis') }}"></textarea>
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
