<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
    <style type="text/css">
          .header_h {
      width: 100%;
      height: 100vh;
      background: url('image.jpg');
      background-size: cover;
      text-align: center;
       }
    </style>
</head>

<body>
    <!-- This is the start of hearder -->

    <header>

        <!--Web Logo is the main logo of website-->

        <a href="#" class="Web-Logo"><span>LOST</span> & <span>Found</span></a>

        <!--This is the navigation bar-->

        <nav class="navbar">
            <a href="#">HOME</a>
            <a href="found_display.php">Found</a>
            <a href="lost_display.php">Lost</a>

            <div class="dropdown">
                <a href='#'>Request</a>
                <div class="dropdown-content">
                    <a href="request_found.php">Request for Found</a>
                    <a href="request_lost.php">Request for Lost</a>
                </div>
            </div>
            <a href="aboutUs.php">About Us</a>
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


    <!--The static page-->

    <div class="header_h">
        <h1 class="heading1">Hi
        <?php
        if(isset($_SESSION['useremail']))
        {
            echo ucfirst($_SESSION['username']);

        }  else{
            echo'Login to';
        }

        ?>
         Report what you Found or Lost </h1>
        <p class="par"> Do you have something to report, to help, any one today? Post it at Lost & Found, its free, for global people and very easy to use! </p>
        <button class="button button1" onclick="window.location.href='request_found.php';">Request For Found</button>
        <button class="button button2 " onclick="window.location.href='request_lost.php';">Request For Lost</button>
    </div>

</body>

</html>
