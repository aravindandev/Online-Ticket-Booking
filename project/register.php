<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="./assets/index.css">
    <link rel="stylesheet" href="./assets/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<!-- NAV -->
<div class="nav-wrapper">
    <div class="container">
        <div class="nav">
            <a href="#" class="logo">
                <i class='bx bx-movie-play bx-tada main-color'></i>Book<span class="main-color">my</span>Tickets
            </a>
            <ul class="nav-menu" id="nav-menu"> 
                <li>
                    <a href="login.php" class="btn btn-hover">
                        <span>Login In</span>
                    </a>
                </li>
            </ul>
            <!-- MOBILE MENU TOGGLE -->
            <div class="hamburger-menu" id="hamburger-menu">
                <div class="hamburger"></div>
            </div>
        </div>
    </div>
</div>
<!-- END NAV -->
<!-- Form Start -->
<div class="form">
    <form action="#" method="POST">
        <center><h1>Sign In</h1>
        <label for="">Username</label><br>
        <input type="text" placeholder="Enter Username" name="uname"><br><hr>
        <label for="">Password</label><br>
        <input type="password" placeholder="Enter Password" name="pwd1"><br><hr>
        <label for="">Retype Password</label><br>
        <input type="password" placeholder="Enter Password" name="pwd2"><br><hr>
        <input type="submit" value="Sign In" class="submit">
        </center>
    </form>
    <?php 
    error_reporting(0);
    $con = new mysqli('localhost','root','','movie');
    $uname = $_POST['uname'];
    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($uname) && !empty($pwd1) && !empty($pwd2)){
            if($pwd1==$pwd2)
            {   
                $sql = "INSERT INTO book(uname,pwd) VALUES ('$uname','$pwd1')";
                if(mysqli_query($con,$sql))
                {
                    session_start();
                    $_SESSION['user'] = $uname;
                    header("location: http://localhost/project/") ;
                }
            }
            else
            {
                echo "<label class='danger'>Your Password doesn't Match</label>";
            }
        }
        else
        {
            echo "<label class='danger'>*Please Enter the Details</label>";
        }
    }
?>
    
</div>

</body>
</html>