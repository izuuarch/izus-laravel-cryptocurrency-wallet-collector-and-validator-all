<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('user/walletassets/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/walletassets/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/walletassets/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/walletassets/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('user/walletassets/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('user/walletassets/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/walletassets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/walletassets/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/walletassets/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/walletassets/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/walletassets/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('user/walletassets/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('user/walletassets/css/theme.css') }}" rel="stylesheet" media="all">

</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                        
                        </div>
                        <div class="login-form">
                            @include('messages')
                            <form action="/wallet/signup" method="post">
                                @csrf
                            <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="fname">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label>Comfirm Password</label>
                                    <input class="au-input au-input--full" type="password" name="password_confirmation" required>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <a href="/wallet/forgot">Forgotten Password?</a>
                                    </label>
                                </div>
                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background: black; color:white;" name="signupbtn">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="/wallet/login">Sign in Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('user/walletassets/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('user/walletassets/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('user/walletassets/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('user/walletassets/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('user/walletassets/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('user/walletassets/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('user/walletassets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('user/walletassets/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('user/walletassets/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('user/walletassets/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('user/walletassets/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('user/walletassets/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('user/walletassets/vendor/select2/select2.min.js') }}">
    </script>
    
    
    <!-- Main JS-->
    <script src="{{ asset('user/walletassets/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->