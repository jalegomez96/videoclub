<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @notifyCss
    <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <title>Videoclub</title>
</head>

<body>

    @include('partials.navbar')
    <x:notify-messages />
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    @notifyJs
</body>

</html>
