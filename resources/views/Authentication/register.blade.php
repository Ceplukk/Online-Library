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
        <div class="bg order-1 order-md-2" style="background-image: url('assetsAuth/images/6920933.jpg');"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <div class="mb-4">
                            <h3>Sign Up</h3>
                            <p class="mb-4">Aplikasi baca buku novel kelompok 1</p>
                        </div>
                        <form action="/register" method="post">
                            @csrf
                            <div class="form-group first mb-3 border border-dark">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name">
                            </div>
                            @error('name')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                            <div class="form-group last mb-3 border border-dark">
                                <label for="username">username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    id="username" name="username">

                            </div>
                            @error('username')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                            <div class="form-group last mb-3 border border-dark">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email">
                            </div>
                            @error('email')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                            <div class="form-group last mb-3 border border-dark">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password">

                            </div>
                            @error('password')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror

                            <input type="submit" value="Register" class="btn btn-block btn-primary" name="register">

                            <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>

                            <div class="d-flex mb-5 align-items-center mt-4 ">
                                <span class="m-auto"><a href="/login" class="forgot-pass"> Have an account ?
                                    </a></span>
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
