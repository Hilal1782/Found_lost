<?php
session_start();

if(!isset($_SESSION['useremail'])){
    header('location:login.php');
   exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request for Lost</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <!-- This is the start of hearder -->
    

    <header>

        <!--Web Logo is the main logo of website-->

        <a href="#" class="Web-Logo"><span>LOST</span> & <span>Found</span></a>

        <!--This is the navigation bar-->

        <nav class="navbar">
            <a href="index.php">HOME</a>
            <a href="found_display.php">Found</a>
            <a href="lost_display.php">Lost</a>
            <div class="dropdown">
                <a href = '#'>Request</a>
                    <div class="dropdown-content">
                        <a href="request_found.php">Request for Found</a>
                        <a href="#">Request for Lost</a>
                    </div>
            </div>
            <a href="aboutUs.php">About Us</a>
            <a href="contactUs.php">Contact Us</a>

        </nav>





        <!--This is the login buttion inside website-->





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
    





    <!-- the form for Request for Lost Start here -->



    <div id="main-con">
        <h1 id="con_h">Request for Lost</h1>  

        <div>

            <form action="lost_data.php" method="post" enctype="multipart/form-data">
                <label for="title" class="name" id="name">Enter Your Title/Name of the found object</label>
                <input type="text" class="fname" name="title" placeholder="Enter Your Title/Name of Found object" required>
                <br>
                <label for="ph:no" class="name">Enter Your Ph:no</Label>
                <input type="tel" class="fname" name="phone" placeholder="Enter Your Phone number" required>
                <br>
                <label for="numb" class="name">Enter Quantity</label>
                <input type="number" class="quantity" name="quantity" min="1" placeholder="Enter the number of Objects you have Found" required>
                <br>
                <label for="img" class="name">Enter Image</label>
                <input type="file" id="email" class="fname" name="img" placeholder="Upload image" required>
                <br>
                <label for="message" class="name">Discription</label>
                <textarea name="message" class="fname" id="" cols="30" rows="10" placeholder="Discribe The object You have Found" required></textarea>
                <input type="submit" value="Submit" id="c_f_submit" name="lost_submit">
            </form>
        </div>



    </div>




        <!-- the form for Request for Lost ends here -->
</body>


</html>