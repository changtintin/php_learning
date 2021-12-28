<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $connect = mysqli_connect('localhost', 'root', 'root', 'test_db');
        if($connect){
            echo "connected successfully";
        }
        else{
            echo "fail";
        }
    ?> 
    <form action = "trans.php" method="post" >
        1: <input type="text" name="input_text1"><br>
        2: <input type="text" name="input_text2"><br>
        3: <input type="text" name="input_text3"><br>
        4: <input type="text" name="input_text4"><br>
        <button type="submit" name="input_submit">submit</button>
    </form>

</body>
</html>
