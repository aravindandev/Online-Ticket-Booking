<html>
    <head>
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
    </head>       
    <body class="container">
    <script src="seat.js"></script>
        <h1 style="margin:10px">Ticket Booked Successfully</h1>
        <table class="table table-bordered shadow p-3 mb-5 bg-body rounded" style="width:50%;margin:10px">
            <tr>
                <th scope="row">Username</th>
                <td scope="row">
                    <?php
                    session_start();
                    echo $_SESSION['user'];
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row">Movie Date</th>
                <td><?php echo $_SESSION['date']?></td>
            </tr>
            <tr>
                <th scope="row">Seats Booked</th>
                <td scope="row">
                    <?php
                    echo implode(",",$_SESSION['seat']);
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row">Amount Paid</th>
                <td scope="row" id="price">
                    <script>document.getElementById("price").innerHTML = "Rs." + localStorage.getItem("paid");</script>
                    
                </td>
            </tr>
            <tr>
                <th scope="row">Movie Time</th>
                <td><?php echo $_SESSION['time']?></td>
            </tr>
            <tr>
                <th scope="row">Theatre Address</th>
                <td><?php echo $_SESSION['address']?></td>
            </tr>
            <tr>
                <th scope="row">Booked Date</th>
                <td><?php echo date("Y/m/d"); ?></td>
            </tr>
            <tr>
                <th scope="row">Booked Time</th>
                <td><?php 
                    date_default_timezone_set("Asia/Calcutta");
                    echo date("h:i"); 
                    ?>
                </td>
            </tr>
        </table>
        
        <div class="buttons" style="margin:20px">
            <a href="http://localhost/project/#"><button class="btn btn-dark">Home</button></a>
            <button class="btn btn-primary" onclick="print()">Print</button>
        </div>

    </body>
</html>
