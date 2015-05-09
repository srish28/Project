<?php
	$con=mysql_connect("localhost","root","") or die(mysql_error());
	$sql=mysql_select_db('cinderella_db') or die(mysql_error());
	$email = (isset($_POST['yemail'])) ? $_POST['yemail']: '';
	$email = mysql_real_escape_string($email);
	$email = strip_tags($email);

	$pass = (isset($_POST['ypassword'])) ? $_POST['ypassword']: '';
	$pass = mysql_real_escape_string($pass);
	$pass = strip_tags($pass);
	$pass = MD5($pass);

	$sql="SELECT email FROM persons WHERE email='$email' and password='$pass'";
	$result=mysql_query($sql);
	$row=mysql_fetch_row($result);
	$count=mysql_num_rows($result);
	if($count==1)
	{
		session_start();
		$_SESSION['email']=$email;
		header('location:home.php');
	}
	
	else
	{
		$m="<span style='color:red;font-size:0.8em;'>Email Id/Password don't match</span>";
		header('location:siglog.php?m2='.$m);	
	}
?>