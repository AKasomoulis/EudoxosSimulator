<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN"
	dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>�������- ����������� �������� ������������� �����������
	������������</title>
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
	<?php include 'loggedStHeader.php';?>

	<!-- ####################################################################################################### -->

	<div class="wrapper">
		<div class="container">
			<!-- 	Statiko panw meros selidas -->
			<?php include 'latestNews.php';?>


			<div class="content">


				<article id="navtabs" class="grid col-full">
				<div class="">
					<ul class="tabs clearfix">
						<li><a href="#tab1">���� ���������</a></li>
						<li><a href="#tab2">������� ���������</a></li>

					</ul>
					<div class="tab_container">
						<article id="tab1" class="tab_content">
						<div id="advancedsearch">
							<form action="simpleSearch.php" method="post">
								<fieldset>

									<label for="sname">�����: <input id="sname" name="sname"
										type="text" value="" style="width: 330px;" />
									</label>
									<div>
										<p>
											<input id="submitform1" name="submitform1" type="submit"
												value="���������" />
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

									<label for="aname">������: <input id="aname" name="aname"
										type="text" value="" />
									</label> <label for="isbn" class="margin">ISBN: <input
										id="isbn" name="isbn" type="text" value="" />
									</label> <label for="code" class="margin">������� �������: <input
										id="code" name="code" type="text" value="" />
									</label> <label for="author">����������: <input id="author"
										name="author" type="text" value="" />
									</label> <label for="phouse" class="margin">��������: <input
										id="phouse" name="phouse" type="text" value="" />
									</label> <label for="npublish" class="margin">���� �������: <input
										id="npublish" name="npublish" type="text" value="" />
									</label> <label for="idrima">������������ ������: <select
										id="idrima" name="idrima" style="width: 170px"
										onchange="enable(this.id)">
											<option value="-">- - -</option>
											<option value="�.�.�.�">�.�.�.�</option>
									</select>
									</label> <label for="tmima" class="margin">�����: <select
										id="tmima" name="tmima" style="width: 170px"
										onchange="enable(this.id)" disabled>
											<option value="-">- - -</option>
											<option value="����� ������������ ��� ���������������">�����
												������������ ��� ���������������</option>
									</select>
									</label> <label for="mathima" class="margin">������: <select
										id="mathima" name="mathima" style="width: 170px" disabled>
											<option value="-">- - -</option>
											<option value="����������� �������� �������">�����������
												�������� �������</option>
									</select>
									</label> 
<!-- 									<label for="type" class="margin">�����: <input -->
<!-- 										id="type" name="type" type="text" value="" /> -->
<!-- 									</label> -->

									<p>
										<input id="submitform" name="submitform" type="submit"
											value="���������" />

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
									<span>������������ ����������</span>
								</h2>
								<div class="clr"></div>
								<table cellspacing="0">
									<tr>
										<th>������</th>
										<th>ISBN</th>
										<th>����������</th>
										<th>��������</th>
										<th>������ ��������</th>
										<th>������</th>
										<th>�����</th>
										<th>������� ���������</th>
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
									<span>������������ ����������</span>
								</h2>
								<div class="clr"></div>
								<table cellspacing="0">
									<tr>
										<th>������� �������</th>
										<th>������</th>
										<th>ISBN</th>
										<th>����������</th>
										<th>��������</th>
										<th>���� �������</th>
										<th>������ ��������</th>
										<th>������</th>
										<th>�����</th>
										<th>�������</th>
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
	<?php include 'loggedStFooter.php';?>



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
