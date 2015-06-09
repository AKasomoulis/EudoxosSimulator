<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN"
	dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Åýäïîïò- ÇëåêôñïíéêÞ Õðçñåóßá ÏëïêëçñùìÝíçò Äéá÷åßñéóçò
	ÓõããñáììÜôùí</title>
<meta http-equiv="Content-Type"
	content="text/html; charset=windows-1253">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="imagetoolbar" content="no" />
	<link rel="stylesheet" href="styles/layout.css" type="text/css" />
	<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
	<script type="text/javascript" src="scripts/sliding.form.js"></script>

</head>



<script>
function enable(id){
	var myID = id;
	if (myID == "idrima") {
		if (document.getElementById(myID).value != "-")
			document.getElementById("tmima").disabled = false;
		else {
			document.getElementById("tmima").value = "-";
			document.getElementById("mathima").value = "-";
			document.getElementById("mathima").disabled = true;
			document.getElementById("tmima").disabled = true;
		}
	}
	if (myID == "tmima") {
		if (document.getElementById(myID).value != "-")
			document.getElementById("mathima").disabled = false;
		else {
			document.getElementById("mathima").value = "-";
			document.getElementById("mathima").disabled = true;
		}
	}
	
}
</script>


<body id="top">


	<!-- 	Statiko panw meros selidas -->
	<?php include 'header.php';?>

	<!-- ####################################################################################################### -->

	<div class="wrapper">
		<div class="container">
			<!-- 	Statiko panw meros selidas -->
			<?php include 'latestNews.php';?>


			<div class="content">


				<article id="navtabs" class="grid col-full">
				<div class="">
					<ul class="tabs clearfix">
						<li><a href="#tab1">ÁðëÞ ÁíáæÞôçóç</a></li>
						<li><a href="#tab2">Óýíèåôç ÁíáæÞôçóç</a></li>

					</ul>
					<div class="tab_container">
						<article id="tab1" class="tab_content">
						<div id="advancedsearch">
							<form action="simpleSearch.php" method="post">
								<fieldset>

									<label for="sname">¼íïìá: <input id="sname" name="sname"
										type="text" value="" style="width: 330px;" />
									</label>
									<div>
										<p>
											<input id="submitform1" name="submitform1" type="submit"
												value="ÁíáæÞôçóç" />
										</p>
									</div>

								</fieldset>
							</form>

						</div>
						</article>

						<article id="tab2" class="tab_content">
						<div id="advancedsearch">
							<form action="advancedSearch.php" method="post">
								<fieldset>

									<label for="aname">Ôßôëïò: <input id="aname" name="aname"
										type="text" value="" />
									</label> <label for="isbn" class="margin">ISBN: <input
										id="isbn" name="isbn" type="text" value="" />
									</label> <label for="code" class="margin">Êùäéêüò ÅÕÄÏÎÏÓ: <input
										id="code" name="code" type="text" value="" />
									</label> <label for="author">ÓõããñáöÝáò: <input id="author"
										name="author" type="text" value="" />
									</label> <label for="phouse" class="margin">Åêäüóåéò: <input
										id="phouse" name="phouse" type="text" value="" />
									</label> <label for="npublish" class="margin">¸ôïò ¸êäïóçò: <input
										id="npublish" name="npublish" type="text" value="" />
									</label> <label for="idrima">Åêðáéäåõôéêü ºäñõìá: <select
										id="idrima" name="idrima" style="width: 170px"
										onchange="enable(this.id)">
											<option value="-">- - -</option>
											<option value="Å.Ê.Ð.Á">Å.Ê.Ð.Á</option>
									</select>
									</label> <label for="tmima" class="margin">ÔìÞìá: <select
										id="tmima" name="tmima" style="width: 170px"
										onchange="enable(this.id)" disabled>
											<option value="-">- - -</option>
											<option value="ÔìÞìá ÐëçñïöïñéêÞò êáé Ôçëåðéêïéíùíéþí">ÔìÞìá
												ÐëçñïöïñéêÞò êáé Ôçëåðéêïéíùíéþí</option>
									</select>
									</label> <label for="mathima" class="margin">ÌÜèçìá: <select
										id="mathima" name="mathima" style="width: 170px" disabled>
											<option value="-">- - -</option>
											<option value="Åðéêïéíùíßá Áíèñþðïõ Ìç÷áíÞò">Åðéêïéíùíßá
												Áíèñþðïõ Ìç÷áíÞò</option>
									</select>
									</label> 
<!-- 									<label for="type" class="margin">Ôýðïò: <input -->
<!-- 										id="type" name="type" type="text" value="" /> -->
<!-- 									</label> -->

									<p>
										<input id="submitform" name="submitform" type="submit"
											value="ÁíáæÞôçóç" />

									</p>
								</fieldset>
							</form>
						</div>
						</article>
					</div>
				</div>
				</article>


				<?php
				if(!isset($_SESSION))
					session_start();
				if(!isset($_SESSION["booksRes"])) {
				?>
				<input class="modal-state" id="modal-2" type="checkbox" />
				<div class="modal">
					<label class="modal__bg" for="modal-2"></label>
					<div class="modal__inner" style="width: 1300px">
						<label class="modal__close" for="modal-2"></label>
						<div class="mainbar5">
							<div class="article">
								<h2>
									<span>ÁðïôåëÝóìáôá ÁíáæÞôçóçò</span>
								</h2>
								<div class="clr"></div>
								<table cellspacing="0">
									<tr>
										<th>Ôßôëïò</th>
										<th>ISBN</th>
										<th>ÓõããñáöÝáò</th>
										<th>Åêäüóåéò</th>
										<th>Óçìåßï ÄéáíïìÞò</th>
										<th>ºäñõìá</th>
										<th>Ó÷ïëÞ</th>
										<th>ÅðéëïãÞ ÅíÝñãåéáò</th>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<?php } else {?>
				<input class="modal-state" id="modal-2" type="checkbox" checked />
				<div class="modal">
					<label class="modal__bg" for="modal-2"></label>
					<div class="modal__inner" style="width: 1300px">
						<label class="modal__close" for="modal-2"></label>
						<div class="mainbar5">
							<div class="article">
								<h2>
									<span>ÁðïôåëÝóìáôá ÁíáæÞôçóçò</span>
								</h2>
								<div class="clr"></div>
								<table cellspacing="0">
									<tr>
										<th>Êùäéêüò ÅÕÄÏÎÏÓ</th>
										<th>Ôßôëïò</th>
										<th>ISBN</th>
										<th>ÓõããñáöÝáò</th>
										<th>Åêäüóåéò</th>
										<th>¸ôïò ¸êäïóçò</th>
										<th>Óçìåßï ÄéáíïìÞò</th>
										<th>ºäñõìá</th>
										<th>Ó÷ïëÞ</th>
										<th>ÅîÜìçíï</th>
									</tr>
									<?php 

										echo $_SESSION["booksRes"];?>
								</table>
							</div>
						</div>
					</div>
				</div>
				<?php }
				unset($_SESSION["booksRes"]);
				?>



			</div>

			<br class="clear" />
		</div>
	</div>

	<!-- 	Statiko panw meros selidas -->
	<?php include 'footer.php';?>



	<script>
//TABS
 var tabContents = $(".tab_content").hide(), 
     tabs = $("ul.tabs li");
 
 tabs.first().addClass("active").show();
 tabContents.first().show();
 
 tabs.click(function() {
     var $this = $(this), 
         activeTab = $this.find('a').attr('href');
     
     if(!$this.hasClass('active')){
         $this.addClass('active').siblings().removeClass('active');
         tabContents.hide().filter(activeTab).fadeIn();
     }
     return false;
 });
</script>
</body>
</html>
