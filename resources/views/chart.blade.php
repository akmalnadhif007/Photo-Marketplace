<!DOCTYPE html>
<html>

<head>
    <title>Laravel 5 Chart example using Charts Package</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    {!! Charts::assets() !!}
</head>

<body>
    <div class="container">
        {!! $charts->render() !!}
    </div>
    <div style="margin-left:600px; margin-top:-36%">
        {!! $chart->render() !!}
    </div>
</body>

</html>
