<!-- resources/views/layouts/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/indexCss.css') }}">
</head>
<body>
    <div class="fondo">
        @yield('content')
    </div>
</body>
</html>
