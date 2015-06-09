<?php

	if(!isset($_SESSION))
		session_start();
	$username = $_SESSION['usernameSess'];

	if (isset($_POST['Pmail']))
		$mail = $_POST['Pmail'];
	
	if (isset($_POST['ArKinitou']))
		$phone = $_POST['ArKinitou'];
	
	$con = mysqli_connect("localhost","root","","Eudoxos");
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
		
	mysqli_query($con,"UPDATE Students SET ST_Email='$mail', ST_Phone='$phone' 
						WHERE ST_Username='$username'");
	
	mysqli_close($con);

 	header("Location: profile.php");
	
?>