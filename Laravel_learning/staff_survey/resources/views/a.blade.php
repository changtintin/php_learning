<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST["method"])) {
        $method = $_POST["method"];
        echo $method;
    }
    ?>
    <form action="{{route('a')}}" method="post">
        @csrf
        <button name="method" value="get">按我123</button><br>
        <button name="method" value="post">按我456</button>
    </form>
</body>

</html>