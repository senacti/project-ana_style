<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Ana styles')</title>
    <style>
        .barra_superior {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 10vh;
        }

        .nav {
            position: fixed;
            top: 0;
            display: flex;
            justify-content: space-around;
            width: 100%;
            height: 100px;
            line-height: 100px;
            background: linear-gradient(rgba(39, 39, 39, 0.6), transparent);
            z-index: 100;
        }

        .imagen_logo {
            width: 50px;
            height: 50px;
            margin-top: 25px;
            border-radius: 34px;
            border: 4px solid;
        }

        .navegacion_menu ul {
            display: flex;
        }

        .navegacion_menu ul li {
            list-style-type: none;
        }

        .logo p {
            color: white;
            font-size: 25px;
            font-weight: 600;
        }

        .navegacion_menu ul li .link {
            text-decoration: none;
            font-weight: 500;
            color: #fff;
            padding-bottom: 15px;
            margin: 0 25px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .link:hover, active {
            border-bottom: 2px solid #fff;
        }

        body {
            background: url(image/casa.jpg) no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .tabla {
            width: 95%;
            height: 100px;
            margin-top: 50px auto;
            margin-left: 20px;
            border: 4px solid;
            border-radius: 6px;
            color: #fff7f7;
            background: transparent;
            backdrop-filter: blur(10px);
        }

        .text {
            color: black;
        }
    </style>
</head>
<body>
    <div class="barra_superior">
        <nav class="nav">
            <div class="logo">
                <p><img src="{{ asset('image/logo.jpg') }}" class="imagen_logo"></p>
            </div>
            <div class="navegacion_menu">
                <ul>
                    <li>
                        <a href="{{ route('logout') }}" class="link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">CERRAR SESION</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="app-container">
        @yield('content')
    </div>
</body>
</html>

