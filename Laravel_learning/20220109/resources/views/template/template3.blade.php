<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('template.css.template3_style')
</head>
<body>
    <div class="div">
        @section('divv')
        @show
    </div>
    <footer>
        @section('footer')
        @show
    </footer>
</body>
</html>