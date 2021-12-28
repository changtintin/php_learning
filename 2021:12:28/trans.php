<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $connect = mysqli_connect('localhost', 'root', 'root', 'test_db');
        if($connect){
            echo "connected successfully". "<br>";
        }
        else{
            echo "fail";
        }
    
        if(isset($_POST["input_submit"])){
            $insert = "INSERT INTO `test_sheet`(`test_1`, `test_2`, `test_3`, `test_4`) VALUES ('{$_POST["input_text1"]}','{$_POST["input_text2"]}','{$_POST["input_text3"]}','{$_POST["input_text4"]}')";
            mysqli_query($connect, $insert);
            
            $select = "SELECT * FROM `test_sheet` ";
            $result = mysqli_query($connect, $select);
            if($result) {
                echo 
                '<table>
                    <tr>
                        <td>test_1</td>
                        <td>test_2</td>
                        <td>test_3</td>
                        <td>test_4</td>
                    </tr>';
                while($data = mysqli_fetch_assoc($result)){
                    $test1 = $data["test_1"]; //這邊是從資料庫撈出來的
                    $test2 = $data["test_2"];
                    $test3 = $data["test_3"];
                    $test4 = $data["test_4"];
                echo
                    '<tr>
                        <td>' . $test1 . '</td>
                        <td>' . $test2 . '</td>
                        <td>' . $test3 . '</td>
                        <td>' . $test4 . '</td>
                    </tr>';
                }
            
                echo
                '</table>';
            }
        }
    ?>

</body>
</html>
