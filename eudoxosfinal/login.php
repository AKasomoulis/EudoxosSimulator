<?php
	
	$con = mysqli_connect("localhost","root","","Eudoxos");
	
	/* Check connection*/
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$flag = false;
	if (isset($_POST['usernameLog'])) { 
	
		$username = mysqli_real_escape_string($con, $_POST['usernameLog']);
		$password = mysqli_real_escape_string($con, $_POST['passwordLog']);
		
		if (!empty($username)) {
			$username_query = mysqli_query($con, "SELECT COUNT(`ST_Username`) FROM `Students` WHERE `ST_Username`='$username' AND `ST_Password`='$password'");
	
			$username_result = mysqli_fetch_row($username_query);
	
			if ($username_result[0] == '0') {
				$flag = false;
			} else {
				$flag = true;
			}
		}
	}
	
	mysqli_close($con);
	
	if ($flag == false) {
		session_start();
		$_SESSION["loginerror"] = "true";
		header("Location: index.php");
	}
	else {
		session_start();
		$_SESSION["usernameSess"] = $username;
	 	header("Location: home.php");
	}
	
?>