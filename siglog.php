<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Cinderella-Shoe Store</title>
		<link rel="stylesheet" href="main.css">
	</head>
	
	<body style="background-color:#17375d;">
		<br><br>
		<?php
			xdebug_disable();
			
			error_reporting(0);
			$con=mysql_connect("localhost","root","") or die(mysql_error());
			$sql=mysql_select_db('cinderella_db') or die(mysql_error());
			session_start();
			if(isset($_SESSION['email']))
			{
			header('location:home.php');
			}
		?>
		<div id="big-wrapper" style="background-color:white">
			<header id="header1">
				<a href="index.php"><img src="img/title.jpg" width="300px" height="150px" ></img></a>
				<br><br>
			<header>
			
			<hr color="black" />
			
			<div id="sign" style="background-color:#C0CDC0">
				<div><p id="tip" style="color:purple">Sign Up</p></div>
				<br>
				<form action="signup-script.php" method="post">	
					Name:<input type="text" name="yname" placeholder="Name" required="true"/>
					<br>
					E-mail:<input type="email" name="yemail" placeholder="Email" required="true"/>
					<br>
					Password:<input type="password"&tt name="ypassword" placeholder="Password" required="true"/>
					<br>
					Contact:<input type="tel" name="ycontact" placeholder="Contact" required="true"/>
					<br>
					City:<input type="text" name="ycity" placeholder="City" required="true"/>
					<br>
					
					<?php echo "<b>".$_GET['m1']."</b>"; ?>
					<input type="submit" style="background-color:pink;font-size:24px" value="Sign Up!"/>
				</form>
			</div>
			
			<div id="log"  style="background-color:#C0CDC0">
				<div><p id="tip" style="color:purple">Login</p></div>
				<br>
				<form action="login-script.php" method="post">	
					E-mail:<input type="email" name="yemail" placeholder="Email" required="true"/>
					<br>
					Password:<input type="password"&tt name="ypassword" placeholder="Password" required="true"/>
					<br>
					<input type="submit" style="background-color:pink;font-size:24px" value="Login!"/>
				</form>
				<?php echo "<b>".$_GET['m2']."</b>"; ?>
				<br>
				<p style="text-align:left;text-decoration:underline">Forgot Password</p>
				
			</div>
				<hr/>
		</div>
	<hr/>
	</body>
</html>