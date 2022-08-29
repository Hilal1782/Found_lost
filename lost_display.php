
<?php
session_start();






?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Found</title>
	<link rel="stylesheet" href="CSS/style.css">
    <style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {

  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
  margin-top: 100px;
}

/* Create two unequal columns that floats next to each other */
/* Left column 
.leftcolumn {   
  float: left;
  width: 75%;
}*/

/* Right column 
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}*/

/* Fake image */
.fakeimg {
  
  padding: 20px;
}

img {
  max-width: 90%;
  margin-left: auto;
  margin-right: auto;
  height: auto;
  border-radius: 8px;
  text-align: center;
    border: 1px solid white;
    
  box-shadow: 5px 10px 18px #888888;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   width: 70%;
   margin: auto;
   padding: 20px;
   margin-top: 20px;
   border-radius: 15px;
   
    border: 1px solid white;
    padding: 10px;
  box-shadow: 5px 10px 18px #888888;
    
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  padding: 30px;
}

.phone{
    position: relative;
    top: -17px;
    left: 13%;
}
.number_h{
    margin-top: 15px;
}
.par_message{
    width: 90%;
    margin-top: 15px;
    text-align: center;
    border: 1px solid white;
    padding: 10px;
    border-radius: 15px;
  box-shadow: 5px 10px 18px #888888;

}
.title_stl{
    margin-top: 15px;
    margin-left: 25px;
}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
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
            <a href="index.php">HOME</a>
            <a href="found_display.php">Found</a>
            <a href="#">Lost</a>
            
            <div class="dropdown">
                <a href = '#'>Request</a>
                    <div class="dropdown-content">
                        <a href="request_found.php">Request for Found</a>
                        <a href="request_lost.php">Request for Lost</a>
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


 <div class="header">
  <h2>Lost</h2>
</div>

<?php 

include 'db.php';

$selectquery = "select * from lost_data ORDER BY create_at DESC";
// $selectquery = '"SELECT * FROM found_data ORDER BY DESC';

$query = mysqli_query($con, $selectquery);


    // code...


?>

<div class="row">
  <?php foreach ($query as $q) {
      // code...
  ?>
  
    <div class="card">
        <div class="title_stl">
         <h2><?php  echo $q['title']   ?></h2>
         <h5><?php  echo date('F j, Y: h:i:sa ', strtotime($q['create_at']))    ?></h5>
         <h3 class="number_h">Phone no:</h3>
         <p class="phone"> <?php  echo $q['phone']   ?></p>
         <h3>Quantity:</h3>
         <h4 class="phone"><?php  echo $q['quantity']   ?></h4>
        </div>
      <div class="fakeimg">
            <img src="<?php  echo $q['img']  ?> " class="fakeimg" >
     
         <p class="par_message"><?php  echo $q['message']   ?></p>
      </div> 
</div>


<?php



}


?>







</body>
</html>