<?php
	if(!isset($_SESSION))
		session_start();
	$con = mysqli_connect("localhost","root","","Eudoxos");

	/* Check connection*/
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$username = $_SESSION['usernameSess'];
	$result1 = mysqli_query($con,"SELECT * FROM Students WHERE ST_Username='$username'");


	mysqli_close($con);
	
?> 






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Εύδοξος- Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Συγγραμμάτων</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1253">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>

<script>

function submitUpdate() {
	if (document.getElementById("Pmail").value == "")
		document.getElementById("Pmail").value = document.getElementById("Pmail").getAttribute("placeholder");
	if (document.getElementById("ArKinitou").value == "")
		document.getElementById("ArKinitou").value = document.getElementById("ArKinitou").getAttribute("placeholder");
 	document.getElementById("updateProfileForm").submit();
}

</script>

</head>
<body id="top">				<!-- Sto top meros tis selidas -->
	<!-- 	Statiko panw meros selidas -->
	<?php include 'loggedStHeader.php';?>



<div class="wrapper">
  <div class="container">
    <div class="content">
	      <div class="mainbar2">
	        <div class="article">
	          <h2><span>Στοιχεία Προφίλ Φοιτητή</span> </h2>
	          <div class="clr"></div>
	          	<br></br>
	          	<?php $row = mysqli_fetch_array($result1)?>
				<p><strong>Όνομα: </strong> <?php echo $row['ST_Name']?> </p>
				<p><strong>Επώνυμο: </strong> <?php echo $row['ST_LastName']?> </p>
				<p><strong>Ίδρυμα: </strong> <?php echo $row['ST_Idrima']?> </p>
				<p><strong>Τμήμα: </strong> <?php echo $row['ST_Tmima']?> </p>
				<p><strong>Προσωπικό E-mail: </strong> <?php echo $row['ST_Email']?> </p>
				<p><strong>Αριθμός Κινητού Τηλεφώνου: </strong> <?php echo $row['ST_Phone']?> </p>
				<p><strong>Τρέχον Εξάμηνο: </strong> <?php echo $row['ST_Examino']?> </p>
				<p><strong>Αριθμός παραληφθέντων συγγραμμάτων μέσω του Εύδοξος: </strong> <?php echo $row['ST_Received']?> </p>
				<p><strong>Αριθμός ανταλλαγών μέσω του Εύδοξος: </strong> <?php echo $row['ST_Exchanged']?> </p>
				<p><strong>Πιστωτικές Μονάδες: </strong> <?php echo $row['ST_Points']?> </p>
				<br></br>
								
				<div>
				  <p>
				    <label class="btn" for="modal-2">Αλλαγή Προφίλ</label>
				  </p>
				</div>
				
				<input class="modal-state" id="modal-2" type="checkbox" />
				<div class="modal">
				  <label class="modal__bg" for="modal-2"></label>
				  <div class="modal__inner">
				    <label class="modal__close" for="modal-2"></label>				    
						<div class="mainbar3">
					        <div class="article">
					          <h2><span>Αλλαγή Στοιχείων Προφίλ</span> </h2>
					          <div class="clr"></div>
					          	<form action="updateProfile.php" method="post" id="updateProfileForm">
					            <ol>
					              <li>
					                <label for="Pmail">Προσωπικό E-mail</label>
					                <input id="Pmail" name="Pmail" class="text" placeholder="<?php echo $row['ST_Email']?>"/>
					              </li>
					              <li>
					                <label for="ArKinitou">Αριθμός Κινητού Τηλεφώνου</label>
					                <input id="ArKinitou" name="ArKinitou" class="text" placeholder="<?php echo $row['ST_Phone']?>" />
					              </li>		
					              <div>
									  <p>
									    <label class="btn" id="UpProfile" name="UpProfile" type="button" onclick="submitUpdate()">Αποθήκευση Αλλαγών</label>
									    <label class="btn" id="Akur" name="Akur">Ακύρωση</label>
									  </p>
								 </div>			              
					            </ol>
					            </form>
					          
					        </div>
					      </div>				    
				  </div>
				</div>

	        </div>
	      </div>



    </div>
    
    <div class="column">
        
    	<ul class="social">
	       <li><a href="#"><img src="images/Original DryIcons/rss.png" alt="RSS" /></a></li>
	       <li><a href="#"><img src="images/Original DryIcons/facebook.png" alt="facebook" /></a></li>
	       <li><a href="#"><img src="images/Original DryIcons/twitter.png" alt="twitter" /></a></li>
	       <li><a href="#"><img src="images/Original DryIcons/yahoo.png" alt="yahoo" /></a></li>
	    </ul>	
    
    
    </div>
    <br class="clear" />
  </div>
</div>

	<!-- 	Statiko panw meros selidas -->
	<?php include 'loggedStFooter.php';?>
</body>
</html>
