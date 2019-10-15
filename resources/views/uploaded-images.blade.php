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
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.16.0/themes/prism.min.css">
    <link rel="stylesheet" href="{{ url('/checkbox/css/bootstrap-image-checkbox.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <!-- icon -->
    <script src="{{ url('/templet/fontawesome5/svg-with-js/js/fontawesome-all.min.js') }}"></script>

    <!-- grafik -->
    <script src="{{ url('/templet/js/chart.js') }}"></script>

    <style>
        h1 {
            margin-top: 80px;
        }

        h2,
        h3 {
            margin-top: 40px;
        }

        .example {
            border: 4px solid #eee;
            margin-bottom: 30px;
        }

        .example-preview {
            padding: 1.5rem;
        }

        .example>pre {
            border-top: 4px solid #eee;
            margin: 0;
        }

        .no-html {
            display: none;
        }

        .highlihgt-grid .row+.row {
            margin-top: 1rem;
        }

        .highlihgt-grid [class^="col-"] {
            padding-top: .75rem;
            padding-bottom: .75rem;
            background-color: rgba(86, 61, 124, .15);
            border: 1px solid rgba(86, 61, 124, .2);
        }

    </style>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-1746437125043617",
            enable_page_level_ads: true
        });

    </script>

</head>

<body>

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
                <form action="{{ route('submit.save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card">
                                <div class="row pl-3">
                                    @foreach($photos as $photo)
                                    <div class="card m-2 p-1 custom-control custom-checkbox image-checkbox">
                                        <input type="checkbox" name="upload[]" class="custom-control-input"
                                            value="{{ $photo->id }}" id="{{ $photo->id }}" multiple="multiple">
                                        <label class="custom-control-label" for="{{ $photo->id }}">
                                            <img class="example-image" src="/images/{{ $photo->resized_name }}"
                                                class="card-img-top" alt="" width="235px" height="155px">
                                        </label>
                                    </div>
                                    @endforeach
                                    <div class="card m-2 p-1">
                                        <a href="{{ url('upload') }}">
                                            <img class="example-image" src="{{ url('/img/add.png') }}"
                                                class="card-img-top" alt="" width="235px" height="155px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card col-md-3">
                            <input type="hidden" name="id" value="">
                            <button class="btn btn-primary mt-2" style="width: 100%;">Submit</button>
                            <hr>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Event</label>
                                <select name="id_event" class="form-control">
                                    <option value="">-- Pilih Event --</option>
                                    @foreach($event as $e)
                                    <option value="{{ $e->id }}">{{ $e->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Name...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPrice">Price</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rp</div>
                                    </div>
                                    <input name="price" type="number" class="form-control"
                                        id="inlineFormInputGroupUsername2" placeholder="Price...">
                                </div>
                            </div>

                            <div class="form-grup">
                                <label>Tag</label>
                                <select name="tag[]" class="form-control js-example-basic-multiple" multiple="multiple">
                                    @foreach($tag as $i)
                                    <option value="{{ $i->id }}">{{ $i->nama_tag }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Deskripsi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" cols="2"
                                    placeholder="Deskripsi..." name="deskripsi"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.16.0/prism.min.js" data-manual></script>
    <script src="{{ url('/checkbox/js/source.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2();
        });

    </script>

</body>

</html>
