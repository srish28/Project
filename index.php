<!DOCTYPE html>
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
				<a href="index.php"><img src="img/title.jpg" width="300px" height="150px" float:right></img></a>
				<a href="siglog.php"><p id="header2" style="font-family:Ariel;font-size:30px;color:black;background-color:pink;float:right">Sign up/Login!</p></a>
				<br><br>
			<header>
			
			<hr color="black" />
			
			<div id="main section">
				<div id="first">
					<div id="photo">
						
					</div>
						<div id="desc">
							<p>"Glamour on your heels.Give a Girl the Right Shoes and She Can Conquer the World.The fact is, sometimes it's really hard to walk in a single woman's shoes. That's why we need really special ones now and then to make the walk a little more fun.You know you're a certified shoe addict if you think there's ALWAYS room for one more pair"</p>
							<br>
							<div id="foot1">
								<p>#1</p>
							</div>

							<div id="foot2">
								<p>Rs. 2500</p>
							</div>
						</div>
					<img src="img/1.jpg" width="300px" height="300px"></img>
				</div>
				<hr/>
				<div id="first">
					<div id="photo">
						
					</div>
						<div id="desc">
							<p>"Glamour on your heels.Give a Girl the Right Shoes and She Can Conquer the World.The fact is, sometimes it's really hard to walk in a single woman's shoes. That's why we need really special ones now and then to make the walk a little more fun.You know you're a certified shoe addict if you think there's ALWAYS room for one more pair"</p>
							<br>
							<div id="foot1">
								<p>#2</p>
							</div>

							<div id="foot2">
								<p>Rs. 2300</p>
							</div>
						</div>
					<img src="img/2.jpg" width="300px" height="300px"></img>
				</div>
				<hr width=90% style="clear:both"></hr>
				<div id="first">
					<div id="photo">
						</div>
						<div id="desc">
							<p>"Glamour on your heels.Give a Girl the Right Shoes and She Can Conquer the World.The fact is, sometimes it's really hard to walk in a single woman's shoes. That's why we need really special ones now and then to make the walk a little more fun.You know you're a certified shoe addict if you think there's ALWAYS room for one more pair"</p>
							<br>
							<div id="foot1">
								<p>#3</p>
							</div>

							<div id="foot2">
								<p>Rs. 2000</p>
							</div>
						</div>
					<img src="img/3.jpg" width="300px" height="300px"></img>
				</div>
				
				<hr/>
			</div>
		</div>
	</body>
</html>