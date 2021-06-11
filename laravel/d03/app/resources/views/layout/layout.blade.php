<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .menu-bar li{
            display: inline-block;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .footer{
            background-color: green;
            color: lavenderblush;
            padding:1rem;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    @include('layout.header')
    <hr>

    @yield('main-section')

    <hr>
    @include('layout.footer')
</div>
</body>
</html>
