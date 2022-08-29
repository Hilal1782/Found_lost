<?php  
   
  session_start();//session starts here  
  if(isset($_SESSION['useremail'])){
    header('location:index.php');
  exit();
}
 
  
include("db.php");  
  
if(isset($_POST['login']))  
{  
    $email=$_POST['email'];  
    $pwd=$_POST['pwd']; 
    
  
    $check_user="select * from usertable WHERE email='$email'AND pwd='$pwd' ";  
  
    $run=mysqli_query($con,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  

        echo "<script>window.open('index.php','_self')</script>"; 
        $userdata = mysqli_fetch_assoc($run);
        
        $_SESSION['username'] = $userdata['fname']; 
       // $_SESSION['contact'] = $userdata['lname'];
  
        $_SESSION['useremail']=$email;//here session is used and value of $user_email store in $_SESSION.  
        
        
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
      
    }  
}  
?> 