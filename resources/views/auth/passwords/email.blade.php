<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>

    <link rel="icon" type="image/png" href="{{asset('logreg/images_reset/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logreg/vendor_reset/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logreg/fonts_reset/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logreg/fonts_reset/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logreg/vendor_reset/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('logreg/vendor_reset/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logreg/vendor_reset/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logreg/vendor_reset/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('logreg/vendor_reset/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logreg/css/css_reset/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('logreg/css/css_reset/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
				<form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                @csrf
					<span class="login100-form-title p-b-43">
				    	Reset Password
					</span>
					
					<div class="wrap-input100 rs1 validate-input" style="width:100%" data-validate = "Username is required">
						<input type="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>
                        <span class="label-input100">E-Mail Address</span>
                        @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Send Password Reset Link
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="{{asset('logreg/vendor_reset/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('logreg/vendor_reset/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('logreg/vendor_reset/bootstrap/js/popper.js"></script>
	<script src="{{asset('logreg/vendor_reset/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('logreg/vendor_reset/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('logreg/vendor_reset/daterangepicker/moment.min.js"></script>
	<script src="{{asset('logreg/vendor_reset/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('logreg/vendor_reset/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('logreg/js/js_reset/main.js"></script>

</body>
</html>