<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSV Import</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="alert alert-info mt-2 mb-3 text-center">
        <h1>!! After importing !!</h1>
        <a class="link-danger" target="_blank" href="{{ url('/checkmonitor') }}">Click for Checking Code</a>
    </div>


    <div class="alert alert-info mb-4 text-center">
        <h2 class="display-6">Laravel 10 Import CSV File</h2>
    </div>

    @if(session('success'))
        <div class="alert alert-info mb-4 text-center">
                <h1> {{ session('success') }}</h1>
        </div>
    @endif

    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <input type="file" name="csv_file" id="csv_file" class="form-control">
        </div>
        <div class="d-grid mb-3">
            <input type="submit" value="Import" class="btn btn-primary">
        </div>
    </form>

        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID#</th>
                    <th scope="col">Discount Code</th>
                </tr>
                </thead>
                <tbody>
                @foreach($discount_codes as $code)
                    <tr>
                        <th>{{$code->id}}</th>
                        <th>{{$code->discount_code}}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <hr>
            {{ $discount_codes->links() }}
        </div>
</div>


</body>
</html>
