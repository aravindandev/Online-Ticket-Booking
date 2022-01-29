<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="seat.css" />
    <meta http-equiv="cache-control" content="no-cache">
    <title>Movie Seat Booking</title>
  </head>
  <body>
    <div class="movie-container">
      <label> Select a movie:</label>
      <select id="movie">
        <option value="220">Beast</option>

      </select>
    </div>

    <div class="container">
      <div class="screen"></div>

      <form action="insert2.php" method="POST">
      <div class="row">
        <input type="checkbox" class="seat" id="1" name="1" value="1"></input>
        <input type="checkbox" class="seat" id="2" name="2" value="2"></input>
        <input type="checkbox" class="seat" id="3" name="3" value="3"></input>
        <input type="checkbox" class="seat" id="4" name="4" value="4"></input>
        <input type="checkbox" class="seat" id="5" name="5" value="5"></input>
        <input type="checkbox" class="seat" id="6" name="6" value="6"></input>
        <input type="checkbox" class="seat" id="7" name="7" value="7"></input>
        <input type="checkbox" class="seat" id="8" name="8" value="8"></input>
      </div>

      <div class="row">
        <input type="checkbox" class="seat" id="9" name="9" value="9"></input>
        <input type="checkbox" class="seat" id="10" name="10" value="10"></input>
        <input type="checkbox" class="seat" id="11" name="11" value="11"></input>
        <input type="checkbox" class="seat" id="12" name="12" value="12"></input>
        <input type="checkbox" class="seat" id="13" name="13" value="13"></input>
        <input type="checkbox" class="seat" id="14" name="14" value="14"></input>
        <input type="checkbox" class="seat" id="15" name="15" value="15"></input>
        <input type="checkbox" class="seat" id="16" name="16" value="16"></input>
      </div>
      <div class="row">
        <input type="checkbox" class="seat" id="17" name="17" value="17"></input>
        <input type="checkbox" class="seat" id="18" name="18" value="18"></input>
        <input type="checkbox" class="seat" id="19" name="19" value="19"></input>
        <input type="checkbox" class="seat" id="20" name="20" value="20"></input>
        <input type="checkbox" class="seat" id="21" name="21" value="21"></input>
        <input type="checkbox" class="seat" id="22" name="22" value="22"></input>
        <input type="checkbox" class="seat" id="23" name="23" value="23"></input>
        <input type="checkbox" class="seat" id="24" name="24" value="24"></input>
      </div>
      <div class="row">
        <input type="checkbox" class="seat" id="25" name="25" value="25"></input>
        <input type="checkbox" class="seat" id="26" name="26" value="26"></input>
        <input type="checkbox" class="seat" id="27" name="27" value="27"></input>
        <input type="checkbox" class="seat" id="28" name="28" value="28"></input>
        <input type="checkbox" class="seat" id="29" name="29" value="29"></input>
        <input type="checkbox" class="seat" id="30" name="30" value="30"></input>
        <input type="checkbox" class="seat" id="31" name="31" value="31"></input>
        <input type="checkbox" class="seat" id="32" name="32" value="32"></input>
      </div>
      <div class="row">
        <input type="checkbox" class="seat" id="33" name="33" value="33"></input>
        <input type="checkbox" class="seat" id="34" name="34" value="34"></input>
        <input type="checkbox" class="seat" id="35" name="35" value="35"></input>
        <input type="checkbox" class="seat" id="36" name="36" value="36"></input>
        <input type="checkbox" class="seat" id="37" name="37" value="37"></input>
        <input type="checkbox" class="seat" id="38" name="38" value="38"></input>
        <input type="checkbox" class="seat" id="39" name="39" value="39"></input>
        <input type="checkbox" class="seat" id="40" name="40" value="40"></input>
      </div>
      <div class="row">
        <input type="checkbox" class="seat" id="41" name="41" value="41"></input>
        <input type="checkbox" class="seat" id="42" name="42" value="42"></input>
        <input type="checkbox" class="seat" id="43" name="43" value="43"></input>
        <input type="checkbox" class="seat" id="44" name="44" value="44"></input>
        <input type="checkbox" class="seat" id="45" name="45" value="45"></input>
        <input type="checkbox" class="seat" id="46" name="46" value="46"></input>
        <input type="checkbox" class="seat" id="47" name="47" value="47"></input>
        <input type="checkbox" class="seat" id="48" name="48" value="48"></input>
      </div>
    
      <div class="row">
        <input type="checkbox" class="seat" id="49" name="49" value="49"></input>
        <input type="checkbox" class="seat" id="50" name="50" value="50"></input>
        <input type="checkbox" class="seat" id="51" name="51" value="51"></input>
        <input type="checkbox" class="seat" id="52" name="52" value="52"></input>
        <input type="checkbox" class="seat" id="53" name="53" value="53"></input>
        <input type="checkbox" class="seat" id="54" name="54" value="54"></input>
        <input type="checkbox" class="seat" id="55" name="55" value="55"></input>
        <input type="checkbox" class="seat" id="56" name="56" value="56"></input>
      </div>

      </div>

      <input type="submit" class="submit" value="PAY">
      </form>

    </div>
    

    <p class="text">
      You have selected <span id="count">0</span> seat for a price of RS.<span
        id="total"
        >0</span
      >
    </p>
    <script src="seat.js"></script>
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

      //Blocking Booked Tickets
      for($j=1;$j<=56;$j++)
      {
        $check = "SELECT seat from screen2 where seat='$j'";
        $checkit = mysqli_query($con,$check);
        while($row = mysqli_fetch_assoc($checkit))
        {
            if($row['seat']==$j)
            {
              $run = $row['seat'];
              echo "<script>
              var booked = $run;
              var element = document.getElementById(booked);
              element.classList.add('sold');
              </script>";
            }
        }
      }  
    ?>
  </body>
</html>