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
function submitDilwsi() {
 	document.getElementById("oloklirwsi").submit();
}

 function submitAkirwsi() {
 	 document.getElementById("akirwsi").submit();
 }
</script>

</head>
<body id="top">				<!-- Sto top meros tis selidas -->
	<!-- 	Statiko panw meros selidas -->
	<?php include 'loggedStHeader.php';?>

<form action="neaDilwsi.php" method="post" id="akirwsi">
</form>

<form action="dilwseis.php" method="post" id="oloklirwsi">
</form>

<div class="wrapper">
  <div class="container">
    <div class="content">
	      <div class="mainbar4">
	        <div class="article">
	          <h2><span>Επισκόπηση Τρέχουσας Δήλωσης</span> </h2>
	          <div class="clr"></div>
	          	<?php if (isset($_POST['logiki'])) {
	          		list($part1, $part2) = explode(':', $_POST['logiki']);
	          		echo "<p><strong>".$part1." :</strong>".$part2."</p>";
	          	}?>
	          	<?php if (isset($_POST['analisi'])) {
	          		list($part1, $part2) = explode(':', $_POST['analisi']);
	          		echo "<p><strong>".$part1." :</strong>".$part2."</p>";
	          	}?>				
	          	<?php if (isset($_POST['domes'])) {
	          		list($part1, $part2) = explode(':', $_POST['domes']);
	          		echo "<p><strong>".$part1." :</strong>".$part2."</p>";
	          	}?>
	          	<?php if (isset($_POST['arxitektoniki'])) {
	          		list($part1, $part2) = explode(':', $_POST['arxitektoniki']);
	          		echo "<p><strong>".$part1." :</strong>".$part2."</p>";
	          	}?>
				<br>
								
				<div>
				  <p>
				    <label class="btn" for="modal-2" type="button" onclick="submitDilwsi()">Δήλωση</label>
				    <label class="btn" for="modal-2" type="button" onclick="submitAkirwsi()">Ακύρωση</label>
				    <br>
				  </p>
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
