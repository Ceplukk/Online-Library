<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assetsAuth/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assetsAuth/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assetsAuth/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="assetsAuth/css/style.css">

    <title> {{ $title }} </title>
</head>

<body>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('assetsAuth/images/34.jpg');"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">

                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Congratulation !</strong> {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong></strong> {{ session('loginError') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="mb-4">
                            <h3>Sign In</h3>
                            <p class="mb-4">Aplikasi baca buku novel Yazid 2702222592</p>
                        </div>
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-group first mb-3 border border-dark">
                                <label for="email">email</label>
                                <input type="email" class="form-control" id="email" name="email" autofocus
                                    autocomplete="none" required>

                            </div>
                            <div class="form-group last mb-3 border border-dark">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" autofocus
                                    autocomplete="none" required>

                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" checked="checked" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password ?</a></span>
                            </div>

                            <input type="submit" value="Log In" class="btn btn-block btn-primary" name="login">

                            <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>

                            <div class="social-login">
                                <a href="#" class="facebook btn d-flex justify-content-center align-items-center">
                                    <span class="icon-facebook mr-3"></span> Login with Facebook
                                </a>
                                <a href="#" class="twitter btn d-flex justify-content-center align-items-center">
                                    <span class="icon-twitter mr-3"></span> Login with Twitter
                                </a>
                                <a href="#" class="google btn d-flex justify-content-center align-items-center">
                                    <span class="icon-google mr-3"></span> Login with Google
                                </a>
                            </div>
                            <div class="d-flex mb-5 align-items-center mt-4 ">
                                <span class="m-auto"><a href="/register" class="forgot-pass"> Don't have account yet
                                        ?</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="assetsAuth/js/jquery-3.3.1.min.js"></script>
    <script src="assetsAuth/js/popper.min.js"></script>
    <script src="assetsAuth/js/bootstrap.min.js"></script>
    <script src="assetsAuth/js/main.js"></script>
</body>

</html>
