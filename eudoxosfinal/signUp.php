<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>�������- ����������� �������� ������������� ����������� ������������</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1253">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>
<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
</head>
<body id="top">	


<script>
function checkEmail(){
	var inputvalue = document.getElementById("email").value;
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if (re.test(inputvalue) == false) {
		document.getElementById("email").style.borderColor="#FF0000";
		return false;
	}
	else {
		document.getElementById("email").style.borderColor="#00FF00";
		return true;
	}
}


function checkRegPass(){
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("rpassword").value;

    if(pass1 == pass2){
    	document.getElementById("rpassword").style.borderColor="#00FF00";
    	return true;
    }
    else{
		document.getElementById("rpassword").style.borderColor="#FF0000";
		return false;
    }
}  

function registerEmptyFields() {
	var flag = 0;
	if (document.getElementById("username").value == "") {
		document.getElementById("username").style.borderColor="#FF0000";
		flag = 1;
	}
	else
		document.getElementById("username").style.borderColor="black";

	if (document.getElementById("password").value == "") {
		document.getElementById("password").style.borderColor="#FF0000";
		flag = 1;
	}
	else
		document.getElementById("password").style.borderColor="black";

	if (document.getElementById("rpassword").value == "") {
		document.getElementById("rpassword").style.borderColor="#FF0000";
		flag = 1;
	}
	else
		document.getElementById("rpassword").style.borderColor="black";
	
	if (document.getElementById("name").value == "") {
		document.getElementById("name").style.borderColor="#FF0000";
		flag = 1;
	}
	else
		document.getElementById("name").style.borderColor="black";

	if (document.getElementById("lastname").value == "") {
		document.getElementById("lastname").style.borderColor="#FF0000";
		flag = 1;
	}
	else
		document.getElementById("lastname").style.borderColor="black";

	if (document.getElementById("email").value == "") {
		document.getElementById("email").style.borderColor="#FF0000";
		flag = 1;
	}
	else
		document.getElementById("email").style.borderColor="black";

	if (document.getElementById("phone").value == "") {
		document.getElementById("phone").style.borderColor="#FF0000";
		flag = 1;
	}
	else
		document.getElementById("phone").style.borderColor="black";

	if (document.getElementById("examino").value == "") {
		document.getElementById("examino").style.borderColor="#FF0000";
		flag = 1;
	}
	else
		document.getElementById("examino").style.borderColor="black";

	if (flag == 1)
		return false;
	
	return true;
}


function submitSignUp() {
	if (registerEmptyFields() == false) {
		document.getElementById("regP").innerHTML = "�������� ���� �����";
 		document.getElementById("regP").style.color = "red";
	}
	else if (checkEmail() == false) {
		document.getElementById("regP").innerHTML = "To e-mail ��� ����� ������";
 		document.getElementById("regP").style.color = "red";
	}
	else if (checkRegPass() == false) {
		document.getElementById("regP").innerHTML = "�� ������� ��� ����� '�������' ��� '���������� �������' ��� ������������";
 		document.getElementById("regP").style.color = "red";
	}
 	else
 		document.getElementById("signup").submit();
}


</script>

	<!-- 	Statiki forma sindesis -->
	<?php include 'loginForm.php';?>


	<!-- 	Statiko panw meros selidas -->
	<?php include 'header.php';?>

<!-- ####################################################################################################### -->

<div class="wrapper">
  <div class="container">
  
  	<!-- 	Forma me katigories eggrafis -->
	<?php include 'regPopUp.php';?>  
	<!-- 	Statiko panw meros selidas -->
	<?php include 'latestNews.php';?>     
  
   
    <div class="content">
	    
	      <div class="mainbar">
	        <div class="article">
	          <h2><span>������� ���� �������</span> </h2>
	          <?php 
	          	 	if(!isset($_SESSION))
						session_start();
					if(!isset($_SESSION["userExists"])) {?>
	          			<h2><p id="regP" value="" style="font-size: 13px"></p></h2>
	          		<?php } 
	          		else {?>
	          			<h2><p id="regP" value="" style="font-size: 13px; color: red">�� username ��� ����� ���������</p></h2>
	          		<?php }
	          		unset($_SESSION["userExists"]);?>
	          <div class="clr"></div>
	          <form action="register.php" method="post"  id="signup">
	            <ol>
	              <li>
	                <label for="username">����� ������*</label>
	                <input id="username" name="username" class="text" />
	              </li>
	              <li>
	                <label for="password">������� ���������*</label>
	                <input id="password" name="password" class="text" />
	              </li>
	              <li>
	                <label for="rpassword">����������� ������� ���������*</label>
	                <input id="rpassword" name="rpassword" class="text" onkeyup="checkRegPass();"/>
	              </li>
	               <li>
	                <label for="name">�����*</label>
	                <input id="name" name="name" class="text" />
	              </li>
	               <li>
	                <label for="lastname">�������*</label>
	                <input id="lastname" name="lastname" class="text" />
	              </li>
	              <li>
	                <label for="email">E-mail*</label>
	                <input id="email" name="email" class="text"  onkeyup="checkEmail();"/>
	              </li>
	              <li>
	                <label for="phone">������ ��������*</label>
	                <input id="phone" name="phone" class="text" />
	              </li>
	              <li>
	                <label for="idrimaa">������*</label>
	              	<select id="idrima" name="idrimaaa">
					  <option value="������ ������������� ������������ ������">������ ������������� ������������ ������</option>
<!-- 					  <option value="���������� ������������ ������">���������� ������������ ������</option> -->
<!-- 					  <option value="������� ������������">������� ������������</option> -->
<!-- 					  <option value="������� ����� ����� ������">������� ����� ����� ������</option> -->
					</select>
	              </li>
	              <li>
	                <label for="tmimaa">�����*</label>
	              	<select id="tmima" name="tmimaaa">
					  <option value="������������ ��� ���������������">������������ ��� ���������������</option>
<!-- 					  <option value="����������">����������</option> -->
<!-- 					  <option value="������">������</option> -->
<!-- 					  <option value="������� ���������">������� ���������</option> -->
					</select>
	              </li>
	              <li>
	                <label for="examino">�������*</label>
	                <input id="examino" name="examino" class="text" />
	              </li>
	              <br></br>

	              <li>
	                <p>
	                <button class="btn" id="signup" type="button" onclick="submitSignUp();">�������</button>
                	</p>    
	                <div class="clr"></div>
	              </li>
	            </ol>
	          </form>
	        </div>
	      </div>
	     
    </div>
    
    <br class="clear" />
  </div>
</div>

	<!-- 	Statiko panw meros selidas -->
	<?php include 'footer.php';?>
</body>
</html>