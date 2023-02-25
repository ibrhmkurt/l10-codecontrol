<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Used Codes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="alert alert-info mt-2 mb-3 text-center">
        <h1>Continue to use code</h1>
        <a class="link-danger" target="_blank" href="{{ url('/checkmonitor') }}">Click for Checking Code</a>
    </div>

    <div class="container ">
        <div class="d-flex justify-content-center">
            <img src="{{ asset('assets/gif/dr-who-doctor-who.gif') }}" alt="free" width="350">
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID#</th>
            <th scope="col">Original ID</th>
            <th scope="col">Discount Code</th>
        </tr>
        </thead>
        <tbody>
        @foreach($codes as $code)
            <tr>
                <th>{{$code->id}}</th>
                <th>{{ $code->discount_code_id }}</th>
                <th>{{$code->used_code}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $codes->links() }}
</div>

</body>
</html>
