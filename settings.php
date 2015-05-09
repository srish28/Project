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
		<br><br>
		<div id="big-wrapper" style="background-color:white">
			<header id="header3">
				<a href="index.php"><img src="img/title.jpg" width="300px" height="150px" ></img></a>
				<a href="logout.php"><p id="header2" style="font-family:Ariel;font-size:30px;color:black;background-color:pink;float:right">Logout!</p></a>
				<a href="settings.php"><p id="header2" style="font-family:Ariel;font-size:30px;color:black;background-color:pink;float:right;clear:right">Settings</p></a>
				<br><br>
			<header>
			
			<hr color="black" />
			<br><br>
			<div id="mainsection">
			
				<p style="text-align:left;font:20px Tahoma;">Change Password:</p>
				<br>
				
				<div id="set">
				<form action="" method="POST" align="right">	
					Old Password:<input type="password"&tt name="oldpass" placeholder="Old Password" required="true">
					<br><br>
					New Password:<input type="password"&tt name="newpass" placeholder="New Password" required="true">
					<br><br>
					Re-Type New Password:<input type="password"&tt name="new1pass" placeholder="Re-Type New Password" required="true">
					<br><br>
					<input type="submit" style="background-color:pink;font-size:24px" value="Submit!">
				</form>
				<?php
					
					echo "<b>".$_GET['error']."</b>";
				?>
			</div>
			
			</div>
			<br><br>
			<hr/>
		</div>
	</body>
</html>

<?php
		
		$con=mysql_connect("localhost","root","") or die(mysql_error());
		$sql=mysql_select_db('cinderella_db') or die(mysql_error());
		
		$old=$_POST['oldpass'];
		$old = mysql_real_escape_string($old);
		$old = strip_tags($old);
		$old = MD5($old);

		
		$new=$_POST['newpass'];
		$new = mysql_real_escape_string($new);
		$new = strip_tags($new);
		$new = MD5($new);
		
		$new1=$_POST['new1pass'];
		$new1 = mysql_real_escape_string($new1);
		$new1 = strip_tags($new1);
		$new1 = MD5($new1);

		$email1=$_SESSION['email'];
		$sql= "SELECT email,password FROM persons WHERE email='$email1' and password='$old'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$orig= $row['password'];
		echo 'sg';
		if($orig!=$old)
			header('location: settings.php?error="Wrong Password"');
			
		else if($new!=$new1)
			header('location: settings.php?error=The two passwords don\'t match');
		else
		{	$sql="UPDATE persons SET password='$new' WHERE password='$old' and email='$email1'";
			mysql_query($sql);
		    header('location: settings.php?error="Password Updated"');
		}
	?>