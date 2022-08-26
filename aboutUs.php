<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

    <!-- This is the start of hearder -->


    <header>

        <!--Web Logo is the main logo of website-->

        <a href="index.php" class="Web-Logo"><span>LOST</span> & <span>Found</span></a>

        <!--This is the navigation bar-->

        <nav class="navbar">
            <a href="index.php">HOME</a>
            <a href="found_display.php">Found</a>
            <a href="lost_display.php">Lost</a>
            <div class="dropdown">
                <a href = '#'>Request</a>
                    <div class="dropdown-content">
                        <a href="request_found.php">Request for Found</a>
                        <a href="request_lost.php">Request for Lost</a>
                    </div>
            </div>
            <a href="#">About Us</a>
            <a href="contactUs.php">Contact Us</a>

        </nav>

        <!--This is the login buttion inside website-->

        <?php
        if(isset($_SESSION['useremail']))
        {
            echo'
            <div>
            <a href="logout.php">
                <input type="submit" value="logout" name= "main_login_btn" id="login-button">
                <div class="navbar1"></div>
            </a>
            <p class="navbar1">'.ucfirst($_SESSION['username']).'</p>
        </div>';




        }  else{
            echo'
            <div>
            <a href="login.php">
                <input type="submit" value="login" name= "main_login_btn" id="login-button">
            </a>
        </div>';

        }

        ?>


    </header>

    <!--This is the end of header section-->
    <div class="main_aboutUs">
        <h1 class="aboutus_h">About Us</h1>
        <p class="para_aboutus">We are Company providing a service for finding you missplaced belongings.
        Losing or misplacing your belongings may be aggravating, and locating them can be difficult. Finding your lost property is one of the most time-consuming processes. Most of the time finding your belongings could cast you weeks and even months and sometimes one will never find personal possessions and will cast you a significant amount of money.</p>
        <h2 class="aboutus_h" >How it works</h2>
        <p class ="para_aboutus">Losing or misplacing your belongings may be aggravating, and locating them can be difficult. Finding your lost property is one of the most time-consuming processes. Most of the time finding your belongings could cast you weeks and even months and sometimes one will never find personal possessions and will cast you a significant amount of money.</p>
    </div>
</body>
</html>
