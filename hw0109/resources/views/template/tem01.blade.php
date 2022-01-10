<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('template.css.tem1_style')
</head>
<body>
    <div class="header">
        @yield('header')
    </div>

    <div class="div1">
        @yield('div1')
    </div>

    <footer>
        @yield('footer')
    </footer>

</body>
</html>