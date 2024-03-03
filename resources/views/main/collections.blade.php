@extends('layoutsMain.main')
@section('content')
    <div class="main-banner">

    </div>
    <div class="section trending">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>Our Collections</h6>
                        <h2>Books</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="search-input-collect">
                        <form id="search" action="/search">
                            <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword"
                                onkeypress="handle" />
                            <button role="button">Search Now</button>
                        </form>
                    </div>
                </div>
                @foreach ($books as $book)
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <div style="max-height: 28em;">
                                    <a href="/product-details/{{ $book->id }}"><img
                                            src="{{ asset('storage/' . $book->cover_book) }}" alt="Cover_Book"></a>
                                </div>
                            </div>
                            <div class="down-content">
                                <span class="category">{{ $book->category->category }} </span>
                                <h4> {{ $book->title }} </h4>
                                <a href="/product-details/{{ $book->id }}"><i class="bi bi-caret-right-fill"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
