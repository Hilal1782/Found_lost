<?php




include 'db.php';

if(isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$identity = $_POST['identity'];
	$file = $_FILES['image'];

	//print_r($file);

	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];

	if($fileerror == 0){
		
		$destfile = 'UserIdCard/'.$filename;
		move_uploaded_file($filepath, $destfile);

		
       

		
		$select = "SELECT email FROM usertable WHERE email = '$email'";
		
  		$query = mysqli_query($con, $select);

		$emailcount = mysqli_num_rows($query);

		if( $emailcount > 0 ){
			echo"email already exist";

		}else{
			$insert = "INSERT Into  usertable ( fname ,  lname,  phone_number ,  email ,  pwd, identity, image  ) VALUES ('$fname', '$lname','$phone_number', '$email', '$pwd', '$identity', '$destfile')";
			$insertquery = mysqli_query($con, $insert );

			if ($insertquery) {
				header("Location: login.php");
			}
		}


		//$insert = "INSERT Into  usertable ( fname ,  lname,  phone_number ,  email ,  pwd, identity, image  ) VALUES ('$fname', '$lname','$phone_number', '$email', '$pwd', '$identity', '$destfile')";
		



		

	}

}




/*$lname = $_POST['lname'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$identity = $_POST['identity'];
$image = $_POST['image'];

$con = mysqli_connect('localhost', 'root', '', 'loginform');



$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];

	if($fileerror == 0){
		
		$destfile = 'UserIdCard/'.$filename;
		move_uploaded_file($filepath, $destfile);

	  $select = "SELECT email FROM usertable WHERE email = ? Limit 1";

		$insert = "INSERT Into  usertable ( fname ,  lname,  phone_number ,  email ,  pwd ,  identity ,  image ) VALUES (?,?,?,?,?,?,?)";

		$stmt = $con->prepare($select);
		$stmt->bind_param("s" ,$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result(); 
		$rnum = $stmt->num_rows;
		if($rnum == 0){
			$stmt->close();

			$stmt = $con->prepare($insert);
			$stmt->bind_param("ssissss", $fname, $lname,$phone_number, $email, $pwd, $identity, $destfile);
			$stmt->execute();
			header('location: index.html');
		}else{
			echo"already registered account";
		}
		$stmt->close();
		$con->close();

 }
}*/

?>

