<?php  
   
  session_start();//session starts here  
  if(isset($_SESSION['useremail'])){
    header('location:index.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login page</title>
    <link rel="stylesheet" href="CSS/stylesheet.css">
    
  </head>
  <body>
    

      <div class="logo">
        <img src="logo\mainlogo1.PNG" alt="mainlogo" class="mainlogo">
      </div>
      <div class="login">
        <div class="name">
          <form action="loginv.php" method="post">
            <label for="email">Enter Your Email </label>
            <input type="email" id="email" name="email" placeholder="Enter Your Email"><br>
            <label for="password"Password>Enter Your Password</label>
            <input type="password" id="pwd" name="pwd" placeholder="Enter Your password"><br>
             <input type="submit" value="login" name="login">
          </form>
          
          <hr id="hr">
          <button onclick="window.location.href='Register.html'" id="create_new_account">Create New Account</button>
        </div>

      </div>



  </body>
</html>
