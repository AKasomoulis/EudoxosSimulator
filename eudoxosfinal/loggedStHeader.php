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
	        <li><a href="profile.php">���������� ������</a></li>
	        <li><a href="logout.php">����������</a></li>
	      </ul>
   	</div>
    <br class="clear" />
  </div>
</div>

<div class="wrapper col2">  	<!-- Menu -->
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="home.php">������</a></li>        
		<li><a href="#">�����������</a>
          <ul>
            <li><a href="./neaDilwsi.php">��� ������</a></li>
            <li><a href="./dilwseis.php">�������� ��������</a></li>
            <li><a href="./antallagi.php">���������</a></li>
            <li><a href="./logSearch.php">���������</a></li>
          </ul>
        </li>
        <li><a href="#">�������</a>
          <ul>
            <li><a href="profile.php">������</a></li>
            <li><a href="signout.php">����������</a></li>
          </ul>
        </li>   
        <li><a href="#">�������</a>
          <ul>
            <li><a href="#">�����������</a></li>
            <li><a href="#">Online �������</a></li>
            <li><a href="#">������������� �����</a></li>
            <li><a href="#">������� Links</a></li>
            <li><a href="#">������� �������</a></li>
            <li><a href="#">������� ����������</a></li>
            <li><a href="#">������ ���������</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>