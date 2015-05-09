
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
				<a href="logout.php"><p id="header2" style="font-family:Ariel;font-size:30px;background-color:pink;color:black;float:right">Logout!</p></a>
				<a href="settings.php"><p id="header2" style="font-family:Ariel;font-size:30px;background-color:pink;color:black;float:right;clear:both">Settings</p></a>
				<br><br>
			<header>
			
			<hr color="black" />
			<br><br>
			<div id="mainsection">
				<form action="upload.php" method="post" enctype="multipart/form-data">
					<p style="font:30px curlz mt;">Design your own perfect shoe!! :)<br/> <input type="file" name="uploadFile"><br></p>
					<br><br>
					<p style="float:center;"><input type="submit" value="Upload File"></p>
				</form>
				<br><br>
				<p style="font:30px curlz mt;">Size Chart Download:</p>
				<?php
					$file= "Sizechart.jpg";
									
					echo"<a href = 'download.php?name=".$file."'>Click Here</a>";
				?>

				
			</div>
			<br><br>
			<hr/>
		</div>
	</body>
</html>

