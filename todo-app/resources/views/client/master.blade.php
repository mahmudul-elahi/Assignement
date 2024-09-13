<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/client/lib/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/lib/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/style.css') }}">
</head>

<body>

    <div class="container">
        @yield('content')
    </div>


    <script src="{{ asset('assets/client/lib/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/client/lib/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/main.js') }}"></script>
</body>

</html>
