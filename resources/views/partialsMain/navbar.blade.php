<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href=" {{ route('online.library') }} " class="logo">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('online.library') }}" class="active">Home</a></li>
                        <li><a href=" {{ route('collections') }} ">Our Collections</a></li>
                        <li><a href="/contact">Contact Us</a></li>  
                        @auth
                            <li><button type="button" class="btn btn-danger rounded-3" data-bs-toggle="modal"
                                    data-bs-target="#logoutModal"> {{auth()->user()->username}} <i class="bi bi-box-arrow-in-left"></i>
                                </button></li>
                        @else
                            <li><a href="{{ route('login') }}">Sign In</a></li>
                        @endauth
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                @auth
                    <h5 class="modal-title" id="exampleModalLabel">Hallo {{ auth()->user()->username }} </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                @endauth
            </div>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <div class="modal-body mb-3">
                    <h5>Yakin mau keluar ?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Logout</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ***** Header Area End ***** -->
