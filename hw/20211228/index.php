<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <style>
    tr, td{
      border: 2px black solid;
    }
  </style>

</head>

<body>
    <?php
      $connect = mysqli_connect('localhost', 'root', 'root', 'hw_1228_db');
      if($connect){
        echo 'connected successfully' . '<br>';
      }
      else{
        echo 'connected failed';
      }
      $select = 'SELECT * FROM `hw_1228_sheet` WHERE 1';
      $result = mysqli_query($connect, $select);

      echo
      '<form action="index.php" method="post">
        <input type="text" name="name" placeholder="name"> <br>
        <input type="text" name="age" placeholder="age"> <br>
        <input type="text" name="salary" placeholder="salary"> <br>
        <input type="submit" name="input_sbt"> <br>
      </form>';

      if(isset($_POST['input_sbt'])){
        $n = $_POST['name'];
        $a = $_POST['age'];
        $s = $_POST['salary'];
        $insert = 'INSERT INTO `hw_1228_sheet`(`sheet_col_name`, `sheet_col_age`, `sheet_col_salary`) VALUES ("'.$n.'","'.$a.'","'.$s.'")'; //操 字串之間用“ . ”連接！！！！！
        mysqli_query($connect, $insert);
      }
      if(isset($_POST['delete_btn'])){
        $delete = "DELETE FROM hw_1228_sheet WHERE serial_number = ' ".$_POST['delete_btn']."'";
        mysqli_query($connect, $delete);
      } 
      
      echo 
      '<table> 
        <tr>
          <td>Name</td>
          <td>Age</td>
          <td>Salary</td>
          <td>Delete</td>
        </tr>';
      
      
      while($data = mysqli_fetch_assoc($result)){
        $name_ori =  $data['sheet_col_name'];
        $age_ori =  $data['sheet_col_age'];
        $salary_ori =  $data['sheet_col_salary'];
        $serial_num_ori =  $data['serial_number'];

        echo 
          '<tr>
            <td>'.$name_ori.'</td>
            <td>'.$age_ori.'</td>
            <td>'.$salary_ori.'</td>
            <td>
              <form action="index.php" method="post">
                <button type="submit" name="delete_btn" value="'.$serial_num_ori.'">Delete</button>
              </form>
            </td>
          </tr>';
      }
      echo
      '</table>';

      
      

      

    ?>
    
</body>
</html>