<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uploading images</title>
 
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
 
    @yield('head')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/upload') }}">Upload Images</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/images-show') }}">View Uploaded Files</a>
                </li>
            </ul>
        </div>
    </nav>

        @yield('content')

    @yield('js')
 
</body>
</html>