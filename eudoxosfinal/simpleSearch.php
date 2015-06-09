<?php
	
	$con = mysqli_connect("localhost","root","","Eudoxos");
	
	/* Check connection*/
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	if (isset($_POST['sname'])) { 
			$val = $_POST['sname'];
			$books_query = mysqli_query($con, "SELECT * FROM Books WHERE B_Name='$val' OR B_ISBN='$val' OR B_Author='$val' OR B_YearOfPublish='$val' OR `B_PublishingHouse`='$val' OR `B_Semester`='$val' OR `B_Department`='$val' OR `B_EudoxusCode`='$val' OR `B_University`='$val'");
	}
	
	mysqli_close($con);
	
	while ($row = mysqli_fetch_array($books_query)) {
		$strVar .= "<tr>";
		$strVar .= ("<td>" . $row['B_EudoxusCode'] ."<td>". $row['B_Name'] ."<td>". $row['B_ISBN'] ."<td>". $row['B_Author'] ."<td>". $row['B_PublishingHouse'] . "</td>" ."<td>". $row['B_YearOfPublish'] . "</td>". "<td>". $row['B_BookStore'] . "</td>"."<td>". $row['B_University'] . "</td>"."<td>". $row['B_Department'] . "</td>"."<td>". $row['B_Semester'] . "</td>");
		$strVar .= "</tr>";
	}
	
	
 	session_start();
//	$_SESSION["booksRes"] = $books_query->fetch_all();
 	$_SESSION["booksRes"] = $strVar;
// 	echo $_SESSION["booksRes"];
	if (!isset($_SESSION["usernameSess"]))
 		header("Location: search.php");
	else
		header("Location: logSearch.php");
	
?>