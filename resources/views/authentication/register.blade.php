<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="{{ asset('assets/authentication') }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="authentication/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="authentication/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="authentication/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="authentication/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="authentication/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="authentication/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="authentication/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="authentication/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="authentication/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="authentication/css/util.css">
    <link rel="stylesheet" type="text/css" href="authentication/css/main.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form action="{{ route('authentication.post_register') }}" method="POST" enctype="multipart/form-data"
                    class="login100-form validate-form">
                    {{ csrf_field() }}
                    <span class="login100-form-title p-b-43">
                        Đăng Ký
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="name">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Họ Tên</span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="number" name="mobile">
                        <span class="focus-input100"></span>
                        <span class="label-input100">SDT</span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="date" name="born">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Năm sinh</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="passwordConfirm">
                        <span class="focus-input100"></span>
                        <span class="label-input100">confirm Password</span>
                    </div>




                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Sign Up
                        </button>
                    </div>

                    <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">
                            or sign up using
                        </span>
                    </div>

                    <div class="login100-form-social flex-c-m">
                        <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                            <i class="fa fa-facebook-f" aria-hidden="true"></i>
                        </a>

                        <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('authentication/images/signup.jpg');">
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="authentication/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="authentication/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="authentication/vendor/bootstrap/js/popper.js"></script>
    <script src="authentication/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="authentication/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="authentication/vendor/daterangepicker/moment.min.js"></script>
    <script src="authentication/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="authentication/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="authentication/js/main.js"></script>

</body>

</html>
