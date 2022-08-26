<?php

include'db.php';

if(isset($_POST['lost_submit'])){

	$title = $_POST['title'];
	$phone = $_POST['phone'];
	$quantity = $_POST['quantity'];
	$file = $_FILES['img'];
	$message = $_POST['message'];

	//print_r($message);

	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];

	if($fileerror == 0){

		$destenfile = 'lost/'.$filename;
		move_uploaded_file($filepath, $destenfile);

		//$insertquery = "INSERT INTO found_data( title, phone, quantity, img, message ) VALUES('$title', '$phone', '$quantity', '$destfile', '$message')";


		$insert = "INSERT Into  lost_data ( title ,  phone,  quantity ,  img ,  message  ) VALUES ('$title', '$phone','$quantity', '$destenfile', '$message')";

		$query = mysqli_query($con, $insert);

		if ($query) {
			// code...
			echo "inserted";
		}else{
			echo'error';
		}

		header('location:lost_display.php');

	}

}
?>
