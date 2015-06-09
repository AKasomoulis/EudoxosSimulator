<?php
	
	$con = mysqli_connect("localhost","root","","Eudoxos");
	
	/* Check connection*/
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$flag = false;
	$query = "SELECT * FROM Books WHERE ";
	
	if (isset($_POST['aname'])) {
		if ($_POST['aname'] != "") {
			$query .= "B_Name=".  $_POST['aname'];  
			$flag = true;
		}
	}
	if (isset($_POST['isbn'])) {
		if ($_POST['isbn'] != "") {
			if ($flag == false)
				$query .= "B_ISBN=".  $_POST['isbn'];
			else
				$query .= " AND B_ISBN=".  $_POST['isbn'];
			$flag = true;
		}
	}
	if (isset($_POST['code'])) {
		if ($_POST['code'] != "") {
			if ($flag == false)
				$query .= "B_EudoxusCode=".  $_POST['code'];
			else
				$query .= " AND B_EudoxusCode=".  $_POST['code'];
			$flag = true;
		}
	}	
	if (isset($_POST['author'])) {
		if ($_POST['author'] != "") {
			if ($flag == false)
				$query .= "B_Author=".  $_POST['author'];
			else
				$query .= " AND B_Author=".  $_POST['author'];
			$flag = true;
		}
	}	
	if (isset($_POST['phouse'])) {
		if ($_POST['phouse'] != "") {
				if ($_POST['phouse'] != "") {
					if ($flag == false)
						$query .= "B_PublishingHouse=".  $_POST['phouse'];
					else
						$query .= " AND B_PublishingHouse=".  $_POST['phouse'];
					$flag = true;
				}
		}
	}
	if (isset($_POST['npublish'])) {
		if ($_POST['npublish'] != "") {
			if ($flag == false)
				$query .= "B_YearOfPublish=".  $_POST['npublish'];
			else
				$query .= " AND B_YearOfPublish=".  $_POST['npublish'];
			$flag = true;
		}
	}
	if ($_POST['idrima'] != "-") {
		if ($flag == false)
			$query .= "B_University=".  $_POST['idrima'];
		else
			$query .= " AND B_University=".  $_POST['idrima'];
		$flag = true;
	}
	if (isset($_POST['tmima']) && $_POST['tmima'] != "-") {
		if ($flag == false)
			$query .= "B_Department=".  $_POST['tmima'];
		else
			$query .= " AND B_Department=".  $_POST['tmima'];
		$flag = true;
	}
	if (isset($_POST['mathima']) && $_POST['mathima'] != "-") {
		if ($flag == false)
			$query .= "B_Lesson=".  $_POST['mathima'];
		else
			$query .= " AND B_Lesson=".  $_POST['mathima'];
		$flag = true;
	}
	
 	$books_query = mysqli_query($con, $query);
	
 	mysqli_close($con);
	
	while ($row = mysqli_fetch_array($books_query)) {
		$strVar .= "<tr>";
		$strVar .= ("<td>" . $row['B_EudoxusCode'] ."<td>". $row['B_Name'] ."<td>". $row['B_ISBN'] ."<td>". $row['B_Author'] ."<td>". $row['B_PublishingHouse'] . "</td>" ."<td>". $row['B_YearOfPublish'] . "</td>". "<td>". $row['B_BookStore'] . "</td>"."<td>". $row['B_University'] . "</td>"."<td>". $row['B_Department'] . "</td>"."<td>". $row['B_Semester'] . "</td>");
		$strVar .= "</tr>";
	}
	
	
 	session_start();
 	$_SESSION["booksRes"] = $strVar;
  	if (!isset($_SESSION["usernameSess"]))
 		header("Location: search.php");
	else
		header("Location: logSearch.php");

	
?>