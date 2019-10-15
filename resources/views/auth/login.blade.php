<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('logreg/images_log/icons/favicon.ico')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logreg/vendor_log/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logreg/fonts_log/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logreg/vendor_log/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logreg/vendor_log/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logreg/vendor_log/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logreg/css/css_log/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('logreg/css/css_log/main.css')}}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
            <h1 style="margin: -15% auto 0px;">Welcome to Foto Marketplace</h1>

                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('logreg/images_log/logo_temp.png') }}" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-title">
                        Photographer Log-in
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true">
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password"
                            class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                            name="password" required type="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true">
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>

                        @if (Route::has('password.request'))
                        <a class="txt2 btn btn-link" href="{{ route('password.request') }}">
                         Password?
                        </a>
                        @endif
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="register">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('logreg/vendor_log/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('logreg/vendor_log/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('logreg/vendor_log/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('logreg/vendor_log/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('logreg/vendor_log/tilt/tilt.jquery.min.js')}}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })

    </script>
    <!--===============================================================================================-->
    <script src="{{asset('logreg/js_log/main.js')}}"></script>

</body>

</html>
