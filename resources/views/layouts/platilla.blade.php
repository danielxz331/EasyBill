<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
</head>

<body>
    <div class="container">
        <div class="img">
            <img src="{{ asset('img/restaurante.png') }}">
        </div>
        @yield('content')

    <!-- footer -->

    <!-- script -->
</body>

</html>
