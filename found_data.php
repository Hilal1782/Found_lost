<?php

include'db.php';

if(isset($_POST['submit'])){

	$title = $_POST['title'];
	$phone = $_POST['phone'];
	$quantity = $_POST['quantity'];
	$file = $_FILES['img'];
	$message = $_POST['message'];

	//print_r($file);

	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];

	if($fileerror == 0){
		
		$destfile = 'upload/'.$filename;
		move_uploaded_file($filepath, $destfile);

		//$insertquery = "INSERT INTO found_data( title, phone, quantity, img, message ) VALUES('$title', '$phone', '$quantity', '$destfile', '$message')";


		$insert = "INSERT Into  found_data ( title ,  phone,  quantity ,  img ,  message  ) VALUES ('$title', '$phone','$quantity', '$destfile', '$message')";
  
		//$stmt = $con->prepare($insert);
		//$stmt->bind_param("siiss", $title, $phone,$quantity, $destfile, $message);
		//$stmt->execute();
		//$stmt->store_result();
		//$stmt->close();
		//$con->close();




		$query = mysqli_query($con, $insert);

		if ($query) {
			// code...
			// echo "inserted this is found";
		}else{
			echo'error';
		}

		header('location:found_display.php');

	}

}


?>