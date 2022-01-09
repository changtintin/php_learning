<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body style="background-color: rgb(rgb(177, 231, 141);border:salmon 4px solid">
    <nav style="font:bolder rgb(90, 62, 62);">
        @yield('nv')
    </nav>

    <div style="font-weight: bolder; height:400px; background-color:rgb(168, 121, 162)">
        @yield('div')
    </div>
    
    <footer style="background-color: rgb(145, 145, 214);">
        @section('ft')
            <p>1234456056069409</p>
        @show
    </footer>
</body>
</html>