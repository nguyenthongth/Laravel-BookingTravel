<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<base href="{{asset('assets/authentication')}}">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="authentication/images/icons/favicon.ico"/>
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
				<form class="login100-form validate-form" action="{{ route('authentication.post_login') }}" method="post">
        {{ csrf_field() }}
					<span class="login100-form-title p-b-43">
						Đăng nhập
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
			
					<div class="container-login100-form-btn">
						{{-- <button class="login100-form-btn">
							Login
						</button> --}}
						<input style="margin-bottom: 20px !important" type="submit" class="login100-form-btn" value="Login">

						<a  href="{{route('authentication.register')}}" class="login100-form-btn">Register</a>
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