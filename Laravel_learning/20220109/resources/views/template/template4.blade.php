<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    @include('template.css.template4_style')
</head>
<body>
    <div class="div_style">
        @yield('div')
        <p>@yield('username','User01')</p>
    </div>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>