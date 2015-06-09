<?php
	if(!isset($_SESSION))
		session_start();
	$con = mysqli_connect("localhost","root","","Eudoxos");

	/* Check connection*/
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$username = $_SESSION['usernameSess'];
	$result = mysqli_query($con,"SELECT ST_Name, ST_LastName FROM Students WHERE ST_Username='$username'");


	mysqli_close($con);
	
?> 

<div class="wrapper">		<!-- panw aristera to icon tou eudojos - sundesmos sto home -->
  <div id="header">
    <div class="fl_left"><a href="home.php"><img src="images/eudojos-icon.png" alt="" /></a></div>
    	<div class="user">
	      <img src="images/avatar.png">
	      
	      <?php $row1 = mysqli_fetch_array($result)?>
	      <h5><?php echo $row1['ST_Name']." ".$row1['ST_LastName'];?> 
					<small></small></h5>
	      <ul>
	        <li><a href="profile.php">Επισκόπηση Προφίλ</a></li>
	        <li><a href="logout.php">Αποσύνδεση</a></li>
	      </ul>
   	</div>
    <br class="clear" />
  </div>
</div>

<div class="wrapper col2">  	<!-- Menu -->
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="home.php">Αρχική</a></li>        
		<li><a href="#">Συγγράμματα</a>
          <ul>
            <li><a href="./neaDilwsi.php">Νέα Δήλωση</a></li>
            <li><a href="./dilwseis.php">Ιστορικό Δηλώσεων</a></li>
            <li><a href="./antallagi.php">Ανταλλαγή</a></li>
            <li><a href="./logSearch.php">Αναζήτηση</a></li>
          </ul>
        </li>
        <li><a href="#">Χρήστης</a>
          <ul>
            <li><a href="profile.php">Προφίλ</a></li>
            <li><a href="signout.php">Αποσύνδεση</a></li>
          </ul>
        </li>   
        <li><a href="#">Χρήσιμα</a>
          <ul>
            <li><a href="#">Επικοινωνία</a></li>
            <li><a href="#">Online Αναφορά</a></li>
            <li><a href="#">Επικοινωνιακό Υλικό</a></li>
            <li><a href="#">Χρήσιμα Links</a></li>
            <li><a href="#">Οδηγίες Δήλωσης</a></li>
            <li><a href="#">Οδηγίες Ανταλλαγής</a></li>
            <li><a href="#">Συχνές Ερωτήσεις</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>