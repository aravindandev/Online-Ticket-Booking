<?php 
    $con = new mysqli('localhost','root','','movie');
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $uname = $_POST['uname'];
        $pwd1 = $_POST['pwd1'];
        $pwd2 = $_POST['pwd2'];
        if($pwd1==$pwd2)
        {   
          $sql = "INSERT INTO register(uname, pwd) VALUES ($uname,$pwd1)";
          $result = mysqli_query($con,$sql);
          if($result)
          {
            echo "Inserted";
          }
          else
          {
            echo "Not Inserted";
          }
        }
      }
?>