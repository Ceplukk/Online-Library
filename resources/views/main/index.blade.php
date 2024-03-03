@extends('layoutsMain.main')
@section('content')
    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="caption header-text">
                        <h6>Welcome to Online Library</h6>
                        <h2>BEST LIBRARY SITE EVER!</h2>
                        <p>
                            Welcome to our Online Library App, a gateway to limitless adventures in the world of literacy.
                            Here, you're not just reading; you're celebrating the richness of words and exploring knowledge
                            from an incredibly diverse collection of books.
                        </p>
                        <div class="search-input">
                            <form id="search" action="/search">
                                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword"
                                    onkeypress="handle" />
                                <button role="button">Search Now</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="right-image">
                        <a href="/product-details/{{ $banner->id }}"><img
                                src="{{ asset('storage/' . $banner->cover_book) }}" alt=""></a>
                        <span class="offer">New !</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('collections') }}">
                        <div class="item">
                            <div class="image">
                                <img src="assets/images/featured-01.png" alt="" style="max-width: 44px;">
                            </div>
                            <h4>Download</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('profile') }}">
                        <div class="item">
                            <div class="image">
                                <img src="assets/images/featured-02.png" alt="" style="max-width: 44px;">
                            </div>
                            <h4>Profile</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image">
                                <img src="assets/images/featured-03.png" alt="" style="max-width: 44px;">
                            </div>
                            <h4>Reply Ready</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('contact_us') }}">
                        <div class="item">
                            <div class="image">
                                <img src="assets/images/featured-04.png" alt="" style="max-width: 44px;">
                            </div>
                            <h4>Contact Admin</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section trending">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>Trending</h6>
                        <h2>New Catalogue !</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href="shop.html">View All</a>
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
                @endforeach+
            </div>
        </div>
    </div>

    <div class="section most-played">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>TOP GAMES</h6>
                        <h2>Most Viewed</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href="shop.html">View All</a>
                    </div>
                </div>
                @foreach ($books as $book)
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="product-details.html"><img src="{{ asset('storage/' . $book->cover_book) }}"
                                        alt=""></a>
                            </div>
                            <div class="down-content">
                                <span class="category"> {{ $book->author->name }} </span>
                                <h4> {{ $book->title }} </h4>
                                <a href="/product-details/{{ $book->id }}">details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <div class="section cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="shop">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-heading">
                                    <h6>Online Library</h6>
                                    <h2>Unlock Your Mind, Dig into Knowledge <em>Reading</em> is the Key to Success!</h2>
                                </div>
                                <p>Embark on a Journey of Wisdom with Each Page Turned. In the World of Books, Inspiration
                                    Awaits Your Discovery!</p>
                                <div class="main-button">
                                    <a href="{{ route('collections') }}">Read Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 align-self-end">
                    <div class="subscribe">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-heading">
                                    <h6>NEWSLETTER</h6>
                                    <h2>Reach Out, Connect, and Let Your Voice Be Heard - Your <em>Feedback Matters!</em>
                                    </h2>
                                </div>
                                <div class="main-button d-flex justify-content-end">
                                    <a href="/contact">Contact Us !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
