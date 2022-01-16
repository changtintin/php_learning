<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @include('template.css.tem2_style')
    <title>@yield('title')</title>
</head>
<body>
   
    <h1>@yield('header_title')</h1>
    
    <div class="content">
        @yield('div')
    </div>
    
    <footer>
        @section('ft')
            <h3>Well Done</h3>
            <p>made by Tintin Chang</p>
            <p>tin871001@fk.com</p>
            <p>Instagram/Facebook: changtintin</p>
        @show
    </footer>
</body>
</html>