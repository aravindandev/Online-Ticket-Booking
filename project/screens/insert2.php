<?php
      error_reporting(0);
      //Connecting server
      $con = new mysqli('localhost','root','','movie');

      //declare variables
      $seat[1] = $_POST['1'];
      $seat[2] = $_POST['2'];
      $seat[3] = $_POST['3'];
      $seat[4] = $_POST['4'];
      $seat[5] = $_POST['5'];
      $seat[6] = $_POST['6'];
      $seat[7] = $_POST['7'];
      $seat[8] = $_POST['8'];
      $seat[9] = $_POST['9'];
      $seat[10] = $_POST['10'];
      $seat[11] = $_POST['11'];
      $seat[12] = $_POST['12'];
      $seat[13] = $_POST['13'];
      $seat[14] = $_POST['14'];
      $seat[15] = $_POST['15'];
      $seat[16] = $_POST['16'];
      $seat[17] = $_POST['17'];
      $seat[18] = $_POST['18'];
      $seat[19] = $_POST['19'];
      $seat[20] = $_POST['20'];
      $seat[21] = $_POST['21'];
      $seat[22] = $_POST['22'];
      $seat[23] = $_POST['23'];
      $seat[24] = $_POST['24'];
      $seat[25] = $_POST['25'];
      $seat[26] = $_POST['26'];
      $seat[27] = $_POST['27'];
      $seat[28] = $_POST['28'];
      $seat[29] = $_POST['29'];
      $seat[30] = $_POST['30'];
      $seat[31] = $_POST['31'];
      $seat[32] = $_POST['32'];
      $seat[33] = $_POST['33'];
      $seat[34] = $_POST['34'];
      $seat[35] = $_POST['35'];
      $seat[36] = $_POST['36'];
      $seat[37] = $_POST['37'];
      $seat[38] = $_POST['38'];
      $seat[39] = $_POST['39'];
      $seat[40] = $_POST['40'];
      $seat[41] = $_POST['41'];
      $seat[42] = $_POST['42'];
      $seat[43] = $_POST['43'];
      $seat[44] = $_POST['44'];
      $seat[45] = $_POST['45'];
      $seat[46] = $_POST['46'];
      $seat[47] = $_POST['47'];
      $seat[48] = $_POST['48'];
      $seat[49] = $_POST['49'];
      $seat[50] = $_POST['50'];
      $seat[51] = $_POST['51'];
      $seat[52] = $_POST['52'];
      $seat[53] = $_POST['53'];
      $seat[54] = $_POST['54'];
      $seat[55] = $_POST['55'];
      $seat[56] = $_POST['56'];

      $ticket = array();
      //Inserting seats in database
      if($_SERVER["REQUEST_METHOD"] == "POST")
      {
        for($i=1;$i<=56;$i++)
        {
        if($seat[$i]==$i)
        {
          $book = "INSERT into screen2 VALUES($seat[$i])";
          if(mysqli_query($con,$book))
          {
            array_push($ticket,$i);
          }
        }
        }    
        session_start();
        $_SESSION['seat'] = $ticket;
        $_SESSION['address'] = "XXXX";
        $_SESSION['date'] = "15/11/2021";
        $_SESSION['time'] = "6:30 pm";
        header("location: http://localhost/project/ticket.php") ;
      }
?>