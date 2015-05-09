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
			<header id="header1">
				<a href="index.php"><img src="img/title.jpg" width="300px" height="150px" ></img></a>
				<a href="logout.php"><p id="header2" style="font-family:Ariel;font-size:30px;background-color:pink;color:black;float:right">Logout</p></a>
				<a href="settings.php"><p id="header2" style="font-family:Ariel;font-size:30px;background-color:pink;color:black;float:right">Settings</p></a>
				<a href="demo.php"><p id="header2" style="font-family:Ariel;font-size:20px;background-color:pink;color:black;float:right">Upload/Download</p></a>
				<br><br>
			<header>
			<hr color="black" />
			<br><br>
			<div id="main section">
				<form action="confirm.php" method="POST" style="text-align:right;">
					<table border=10 cellpadding=10 cellspacing=10 rules=cols frame=vsides>
						<tr id="row">
							<td style=”border-right: solid #eeeeee;">
								<img src="img/1.jpg" width="200px" align:"center" height="200px"></img>
								<p style="text-align:center"> #1 Rs. 2900</p>
								<p style="text-align:center"><input type="checkbox" name="select[]" value="1">Add!</p>
								<select name="quantity[]">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>
							</td>
							
							<td>
								<img src="img/2.jpg" width="200px" height="200px"></img>
								<p style="text-align:center"> #2 Rs. 1880</p>
								<p style="text-align:center"><input type="checkbox" name="select[]" value="2">Add!</p>
								<select name="quantity[]">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>
							</td>
							
							<td>
								<img src="img/3.jpg" width="200px" height="200px"></img>
								<p style="text-align:center"> #3 Rs. 2000</p>
								<p style="text-align:center"><input type="checkbox" name="select[]" value="3">Add!</p>
								<select name="quantity[]">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>
							</td>
							
							<td>
								<img src="img/4.jpg" width="200px" height="200px"></img>
								<p style="text-align:center"> #4 Rs. 2300</p>
								<p style="text-align:center"><input type="checkbox" name="select[]" value="4">Add!</p>
								<select name="quantity[]">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>
							</td>
							
						</tr>
					</table>
						<br><hr/><br>
					<table border=1 cellpadding=1 cellspacing=1 rules=cols frame=vsides>
						<tr id="row">
							<td>
								<img src="img/5.jpg" width="200px" height="200px"></img>
								<p style="text-align:center"> #5 Rs. 1900</p>
								<p style="text-align:center"><input type="checkbox" name="select[]" value="5">Add!</p>
								<select name="quantity[]">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>
							</td>
							
							<td>
								<img src="img/6.jpg" width="200px" height="200px"></img>
								<p style="text-align:center"> #6 Rs. 2500</p>
								<p style="text-align:center"><input type="checkbox" name="select[]" value="6">Add!</p>
								<select name="quantity[]">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>
							</td>
							
							<td>
								<img src="img/7.jpg" width="200px" height="200px"></img>
								<p style="text-align:center"> #7 Rs. 2400</p>
								<p style="text-align:center"><input type="checkbox" name="select[]" value="7">Add!</p>
								<select name="quantity[]">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>
							</td>
							
							<td>
								<img src="img/8.jpg" width="200px" height="200px"></img>
								<p style="text-align:center"> #8 Rs. 2900</p>
								<p style="text-align:center"><input type="checkbox" name="select[]" value="8">Add!</p>
								<select name="quantity[]">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>
							</td>
						
						</tr>
					</table>
						<br><hr/><br>
					<table border=1 cellpadding=1 cellspacing=1 rules=cols frame=vsides>
						<tr id="row">
							<td>
								<img src="img/9.jpg" width="200px" height="200px"></img>
								<p style="text-align:center"> #9 Rs. 3000</p>
								<p style="text-align:center"><input type="checkbox" name="select[]" value="9">Add!</p>
								<select name="quantity[]">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>
							</td>
							
							<td>
								<img src="img/10.jpg" width="200px" height="200px"></img>
								<p style="text-align:center"> #10 Rs. 2900</p>
								<p style="text-align:center"><input type="checkbox" name="select[]" value="10">Add!</p>
								<select name="quantity[]">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>
							</td>
							
							<td>
								<img src="img/11.jpg" width="200px" height="200px"></img>
								<p style="text-align:center"> #11 Rs. 2100</p>
								<p style="text-align:center"><input type="checkbox" name="select[]" value="11">Add!</p>
								<select name="quantity[]">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>
							</td>
							
							<td>
								<img src="img/12.jpg" width="200px" height="200px"></img>
								<p style="text-align:center"> #12 Rs. 1090</p>
								<p style="text-align:center"><input type="checkbox" name="select[]" value="12">Add!</p>
								<select name="quantity[]">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>
							</td>
						</tr>
					</table>
					<br><hr/><br>
					<a href="confirm.php"><input type="submit" style="background-color:pink;font-size:24px" value="Buy Now!"></a>
				</form>
			</div>
		</div>
	</body>
</html>