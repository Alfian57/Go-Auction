<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Go Auction - {{ $title }}</title>

    <link rel="icon" href="/assets/img/logo.png" type="image/x-icon" />

    <link rel="stylesheet" href="/assets/auth/css/bootstrap/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="/assets/auth/css/util.css">
    <link rel="stylesheet" type="text/css" href="/assets/auth/css/main.css">

    <style>
        body {
            background-image: url('/assets/auth/images/bg-01.jpg');
            background-size: cover;
        }

        .box {
            margin-top: 25px;
            border-radius: 15px
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 border bg-light p-5 box">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="/assets/auth/js/bootstrap/bootstrap.js"></script>
</body>

</html>
