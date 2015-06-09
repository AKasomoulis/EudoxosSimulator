<?php

	$con = mysqli_connect("localhost","root","","Eudoxos");

	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
  	
  	$username_query = mysqli_query($con, "SELECT COUNT(`ST_Username`) FROM `Students` WHERE `ST_Username`='$_POST[username]'");
  	
  	$username_result = mysqli_fetch_row($username_query);
  	
  	if ($username_result[0] != '0') {
  		session_start();
  		$_SESSION["userExists"] = "true";
  		header("Location: signUp.php");
  	}
  	

	$sql="INSERT INTO Students (ST_Username, ST_Name, ST_Lastname, ST_Password, ST_Email, ST_Phone, ST_Idrima, ST_Tmima, ST_Examino, ST_Received, ST_Exchanged, ST_points) VALUES
		('$_POST[username]', '$_POST[name]', '$_POST[lastname]', '$_POST[password]', '$_POST[email]', '$_POST[phone]', '$_POST[idrimaaa]', '$_POST[tmimaaa]', '$_POST[examino]', 0, 0, 0)";

	if (!mysqli_query($con,$sql)) {
  		die('Error: ' . mysqli_error($con));
  	}
	echo $_POST[username] . "Inserted";
	
	mysqli_close($con);
	
	session_start();
	$_SESSION["usernameSess"] = $_POST[username];
	header("Location: home.php");

?> 