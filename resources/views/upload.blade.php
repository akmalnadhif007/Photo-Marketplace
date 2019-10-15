<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>Upload Image</title>

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
    <link rel="stylesheet" href="{{ url('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('/css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ url('/css/custom.css') }}">
    <!-- icon -->
    <script src="{{ url('/templet/fontawesome5/svg-with-js/js/fontawesome-all.min.js') }}"></script>

    <!-- grafik -->
    <script src="{{ url('/templet/js/chart.js') }}"></script>
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
            <div class="col-lg-10 col-md-9 col-12 body_block align-content-center">
                <div class="row">
                    <div class="col-sm-10 offset-sm-1">
                        <h2 class="page-heading">Upload your Images <span id="counter"></span></h2>
                        <form id="upload" onclick="setTimeout(upload, 5000);" method="post"
                            action="{{ url('/images-save') }}" enctype="multipart/form-data" class="dropzone"
                            id="my-dropzone">
                            {{ csrf_field() }}
                            <div class="dz-message">
                                <div class="col-xs-8">
                                    <div class="message">
                                        <img src="{{ url('/img/upload.png') }}" width="200">
                                        <p class="mt-4">Click to Upload or drag & drop photos anywhere on this page</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fallback">
                                <input type="file" name="file" multiple>
                            </div>
                        </form>
                        <div>
                            <a id="btnupload" href="{{ url('images-show') }}" class="btn btn-success mt-4">Upload</a>
                        </div>
                    </div>
                </div>

                <div id="preview" style="display: none;">

                    <div class="dz-preview dz-file-preview">
                        <div class="dz-image"><img data-dz-thumbnail /></div>

                        <div class="dz-details">
                            <div class="dz-size"><span data-dz-size></span></div>
                            <div class="dz-filename"><span data-dz-name></span></div>
                        </div>
                        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                        <div class="dz-error-message"><span data-dz-errormessage></span></div>



                        <div class="dz-success-mark">

                            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                                <title>Check</title>
                                <desc>Created with Sketch.</desc>
                                <defs></defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                    sketch:type="MSPage">
                                    <path
                                        d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z"
                                        id="Oval-2" stroke-opacity="0.198794158" stroke="#747474"
                                        fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                                </g>
                            </svg>

                        </div>
                        <div class="dz-error-mark">

                            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                                <title>error</title>
                                <desc>Created with Sketch.</desc>
                                <defs></defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                    sketch:type="MSPage">
                                    <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474"
                                        stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                                        <path
                                            d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z"
                                            id="Oval-2" sketch:type="MSShapeGroup"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
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
    <script src="{{ url('/js/jquery.js') }}"></script>
    <script src="{{ url('/js/dropzone.js') }}"></script>
    <script src="{{ url('/js/dropzone-config.js') }}"></script>

    <script>
        document.getElementById("btnupload").style.visibility = "hidden";

        function upload() {
            document.getElementById("btnupload").style.visibility = "visible";
        }

    </script>

</body>

</html>
