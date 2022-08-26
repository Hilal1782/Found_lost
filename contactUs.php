<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
            <a href="aboutUs.php">About Us</a>
            <a href="#">Contact Us</a>

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

    <!-- Contact us form-->

    <div id="main-con">
        <h1 id="con_h">Contact Us</h1>

        <form action="" method="">
            <label for="fname" class="name" id="name">Enter Your First Name</label>
            <input type="text" class="fname" name="first-name" placeholder="Enter Your First Name" required>
            <label for="lname" class="name">Enter Your Last Name</Label>
            <input type="text" class="fname" name="last-name" placeholder="Enter Your Last Name" required>
            <label for="email" class="name">Enter Your Email</label>
            <input type="email" id="email" class="fname" name="email" placeholder="Enter Your Email" required>
            <label for="message" class="name">Message</label>
            <textarea name="Message" class="fname" id="" cols="30" rows="10" placeholder="Enter Your message" required></textarea>
            <input type="submit" value="Submit" id="c_f_submit">
        </form>


    </div>

</body>
</html>
