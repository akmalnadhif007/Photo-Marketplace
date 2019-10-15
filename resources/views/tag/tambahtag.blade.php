<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add Tag</title>
    <link rel="stylesheet" href="{{ url('/templet/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('tambahtag') }}" method="POST">
                            @csrf
                            <div>
                                <label>New Tag</label>
                                <input id="tag" type="text" name="nama_tag" class="form-control">
                            </div>
                            <div class="mt-3">
                                <a href="{{url('images-show')}}" class="btn btn-danger">Back</a>
                                <button class="btn btn-primary" value="Simpan">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
