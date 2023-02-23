<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>İndirim Kazandınız</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="alert alert-info mt-5 mb-3 text-center">
        <h1>İndirim kodunuz doğrulandı.</h1>
        <h2>Beleş Zamanı!!</h2>
        <a href="{{ url('/checkmonitor') }}">Beleşe Devamke!!</a>
    </div>
    <div class="container ">
        <div class="d-flex justify-content-center">
            <img src="{{ asset('assets/gif/free.gif') }}" alt="free">
        </div>
    </div>
</div>

</body>
</html>
