<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Campaign</title>
</head>
<body>
<h1>!! After importing !!</h1>
<a href="{{ url('/checkmonitor') }}">Click for Checking Code</a>

<br>
<br>
<hr>

<h1>Discount Code Csv import</h1>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<form method="post" enctype="multipart/form-data">
    @csrf
    <label for="csv_file">Code Csv File</label>
    <br>
    <input type="file" name="csv_file" id="csv_file">
    <br><br>
    <button type="submit">Upload</button>
</form>

<br>
<br>
<hr>

@if($discount_codes == null)
    <table>
        <thead>
        <tr>
            <th>Discount Code</th>
        </tr>
        </thead>
        <tbody>
        @foreach($discount_codes as $code)
            <tr>
                <th>{{$code->discount_code}}</th>
            </tr>
        @endforeach
        </tbody>

    </table>

    <br>
    <hr>

    {{ $discount_codes->links() }}
@endif

</body>
</html>
