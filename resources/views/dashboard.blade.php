<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>Dashboard</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ url('/templet/css/bootstrap.min.css') }}">
    <!-- Fonts Icon CSS -->
    <link rel="stylesheet" href="{{ url('/templet/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('/templet/css/et-line.css') }}">
    <link rel="stylesheet" href="{{ url('/templet/css/ionicons.min.css') }}">
    <!-- Carousel CSS -->
    <link rel="stylesheet" href="{{ url('/templet/css/slick.css') }}">
    <!-- Magnific-popup -->
    <link rel="stylesheet" href="{{ url('/templet/css/magnific-popup.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ url('/templet/css/animate.min.css') }}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ url('/templet/css/main.css') }}">
    <!-- icon -->
    <script src="{{ url('/templet/fontawesome5/svg-with-js/js/fontawesome-all.min.js') }}"></script>

    <!-- grafik -->
    <script src="{{ url('/templet/js/chart.js') }}"></script>
    {!! Charts::assets() !!}

</head>

<body>
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
    </div>

    <!-- Image and text -->
    <nav class="navbar navbar-light bg-info">
        <a class="navbar-brand" href="#">
            <img src="{{ url('/templet/img/logo.png') }}" width="30" height="30" class="d-inline-block align-top"
                alt="">
            Foto Marketplace
        </a>
        <ul class="nav nav-tabs">
            <li class="nav-item dropdown text-light">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>

    <div class="body-container container-fluid">
        <a class="menu-btn" href="javascript:void(0)">
            <i class="ion ion-grid"></i>
        </a>
        <div class="row justify-content-center">
            <!--=================== side menu ====================-->
            <div class="col-lg-2 col-md-3 col-12 menu_block">

                <!--main menu -->
                <div class="side_menu_section">
                    <ul class="menu_nav">
                        <li>
                            <i class="fas fa-tachometer-alt" style="margin-left: 5px;"></i>
                            <a href="{{ url('dashboard') }}" style="margin-left: -35px;">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <i class="fas fa-upload" style="margin-left: 5px;"></i>
                            <a href="{{ url('upload') }}" style="margin-left: -35px;">
                                Upload Photos
                            </a>
                        </li>
                        <li>
                            <i class="far fa-calendar-alt" style="margin-left: 5px;"></i>
                            <a href="#" style="margin-left: -35px;">
                                My Photos
                            </a>
                        </li>
                        <li>
                            <i class="fas fa-book" style="margin-left: 5px;"></i>
                            <a href="#" style="margin-left: -35px;">
                                Reports
                            </a>
                        </li>
                        <li>
                            <i class="fas fa-dollar-sign" style="margin-left: 5px;"></i>
                            <a href="#" style="margin-left: -35px;">
                                Payment
                            </a>
                        </li>
                    </ul>
                </div>
                <!--main menu end -->

                <!-- copyright -->
                <div class="side_menu_bottom">
                    <div class="side_menu_bottom_inner">
                        <div class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <p class="copyright">Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>
                <!-- copyright end -->
            </div>
            <!--=================== side menu end====================-->

            <!--=================== content body ====================-->
            <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">
                <div class="container">
                    {!! $charts->render() !!}
                </div>
                <div style="margin-left: 46%; margin-top: -42%">
                    {!! $chart->render() !!}
                </div>
            </div>
            <!--=================== content body end ====================-->
        </div>
    </div>

    <!-- Link JS -->
    <script src="{{ url('/templet/js/jquery.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ url('/templet/js/popper.js') }}"></script>
    <script src="{{ url('/templet/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/templet/js/waypoints.min.js') }}"></script>
    <!--slick carousel -->
    <script src="{{ url('/templet/js/slick.min.js') }}"></script>
    <!--Portfolio Filter-->
    <script src="{{ url('/templet/js/imgloaded.js') }}"></script>
    <script src="{{ url('/templet/js/isotope.js') }}"></script>
    <!-- Magnific-popup -->
    <script src="{{ url('/templet/js/jquery.magnific-popup.min.js') }}"></script>
    <!--Counter-->
    <script src="{{ url('/templet/js/jquery.counterup.min.js') }}"></script>
    <!-- WOW JS -->
    <script src="{{ url('/templet/js/wow.min.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ url('/templet/js/main.js') }}"></script>


</body>

</html>
