<?php
	$con=mysql_connect("localhost","root","") or die(mysql_error());
	$sql=mysql_select_db('cinderella_db') or die(mysql_error());
	session_start();
	$name = (isset($_POST['yname'])) ? $_POST['yname']: '';
	$email = (isset($_POST['yemail'])) ? $_POST['yemail']: '';
	$email = mysql_real_escape_string($email);
	$email = strip_tags($email);

	$pass = (isset($_POST['ypassword'])) ? $_POST['ypassword']: '';
	$pass = mysql_real_escape_string($pass);
	$pass = strip_tags($pass);
	$pass = MD5($pass);

	$cont = (isset($_POST['ycontact'])) ? $_POST['ycontact']: '';
	$city = (isset($_POST['ycity'])) ? $_POST['ycity']: '';
	$add = (isset($_POST['yaddress'])) ? $_POST['yaddress']: '';
	$regex =  "/^[789][0-9]{9}$/";
	$em = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	$query = "SELECT * FROM persons WHERE Email='$email'";
	
	$result = mysql_query($query);
	$num = mysql_num_rows($result);

	if($num!=0)
	{
		$m = "<span style='font-size:0.8em; color:red;'>Email Already Exists</span>";
		header('location: siglog.php?m1='.$m);
	}
	else if(!(preg_match($regex,$cont)))
	{
		$m = "<span style='font-size:0.8em;color: red;'>Not a valid Contact</span>";
		header('location: siglog.php?m1='.$m);

	}
	
	else if(!(preg_match($em,$email)))
	{
		$m = "<span style='color: red;font-size:0.8em;'>Not a valid Email Id</span>";
		header('location: siglog.php?m1='.$m);

	}
	else
	{
		$sql="INSERT INTO persons VALUES('$name','$email','$pass','$cont','$add','$city')";
		
		$_SESSION['email']=$email;
		if(mysql_query($sql))
			header('location:home.php');
		
		else
			header('index:home.php');
	}
	
	
?>