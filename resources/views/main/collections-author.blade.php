@extends('layoutsMain.main')
@section('content')
    <div class="main-banner">

    </div>
    <div class="section trending">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6> Collection </h6>
                        <h2> Author </h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href="shop.html">View All</a>
                    </div>
                </div>
                @foreach ($authors as $author)
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <div style="max-height: 28em;">
                                    <a href="/product-details/{{ $author->id }}"><img
                                            src="{{ asset('storage/' . $author->cover_book) }}" alt="Cover_Book"></a>
                                </div>
                            </div>
                            <div class="down-content">

                                <h4> {{ $author->title }} </h4>
                                <a href="/product-details/{{ $author->id }}"><i class="bi bi-caret-right-fill"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
