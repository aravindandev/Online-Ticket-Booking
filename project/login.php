<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                    <a href="register.php" class="btn btn-hover">
                        <span>Sign In</span>
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
        <center><h1>Login</h1>
        <label for="">Username</label><br>
        <input type="text" placeholder="Enter Username" name="uname"><br><hr>
        <label for="">Password</label><br>
        <input type="password" placeholder="Enter Password" name="pwd1"><br><hr>
        <input type="submit" value="Login" class="submit">
        </center>
    </form>
    <?php 
    $con = new mysqli('localhost','root','','movie');
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $uname = $_POST['uname'];
        $pwd1 = $_POST['pwd1'];

        //Number of Data in Database
        $sql = "SELECT id FROM book WHERE uname='$uname' && pwd='$pwd1'";
        $result_num = mysqli_query($con,$sql);
        $num = mysqli_num_rows($result_num);
        

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if($num==1)
            {
                session_start();
                $_SESSION['user'] = $uname;
                header("location: http://localhost/project/");
            }
        }
    }
    ?>
</div>
</body>
</html>