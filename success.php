<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Cinderella-Shoe Store</title>
		<link rel="stylesheet" href="main.css">
	</head>
	
	<body style="background-color:#17375d;">
		<?php
		session_start();
		if(!isset($_SESSION['email']))
		header('location:index.php');
		?>
		
		<?php
		xdebug_disable();
		error_reporting(0);
		$con=mysql_connect("localhost","root","") or die(mysql_error());
		$sql=mysql_select_db('cinderella_db') or die(mysql_error());
		session_start();
		
		if(isset($_SESSION['email']))
		{
			$to=$_SESSION['email'];
			$subject="Confirmation of the order";
			$message="Your order is confirmed. It will be delivered to you shortly. Thank you for shopping with us.";
			$from="head@cinderella.com";
			$to1="storekeeper@gmail.com";
			$message1="Email Id: ".$to."Shoes Id: ";
			$p=$_SESSION['ids'];
			foreach($p as $val)
				$message1=$message1.$val." ";
			mail($to,$subject,$message);
			mail($to1,$subject,$message1);
		}
		?>
		<br><br>
		<div id="big-wrapper" style="background-color:white">
			<header id="header3">
				<a href="index.php"><img src="img/title.jpg" width="300px" height="150px" ></img></a>
				<a href="siglog.php"><p id="header2" style="font-family:Ariel;font-size:30px;background-color:pink;color:black;float:right">Logout!</p></a>
				<a href="settings.php"><p id="header2" style="font-family:Ariel;font-size:30px;background-color:pink;color:black;float:right;clear:both">Settings</p></a>
				<br><br>
			<header>
			
			<hr color="black" />
			<br><br>
			<div id="mainsection">
			
			<p style="font:20px Tahoma;">Thank you for ordering from Cinderella.<br> The items shall be delivered to you shortly.</p>
			<br>
			<p style="font:20px Tahoma">Order some more shoes <a href="home.php">here</a></p>	
			</div>
			<br><br>
			<hr/>
		</div>
	</body>
</html>