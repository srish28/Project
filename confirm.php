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
				<a href="settings.php"><p id="header2" style="font-family:Ariel;font-size:30px;color:black;background-color:pink;float:right;clear:both">Settings</p></a>
				<br><br>
			<header>
			
			<hr color="black" />
			<br><br>
			<div id="mainsection">
			
			<p style="font:30px Tahoma;text-decoration:underline;"> Your Order</p>
			<br>
			<p style="font:20px Tahoma"> Please confirm that you wish to order the following items.</p>	
			</div>
			<br>
			<div id="fle">
				<table style="text-align:right;" border="0" width="200" class="centerTable"  >
					<tr>
						<td>
							<p style="font:bold 20px ariel;text-decoration:underline;">Item No.<p>
							<br>
						</td>
						
						<td>
							<p style="font:bold 20px ariel;text-decoration:underline">Cost</p>
							<br>
						</td>						
					</tr>
				</table>
					<?php
					xdebug_disable();
					
					error_reporting(0);
					$con=mysql_connect("localhost","root","") or die(mysql_error());
					$sql=mysql_select_db('cinderella_db') or die(mysql_error());
					
					$sum=0;
					$i=0;
					$j=0;
					if(isset($_POST['select']))
					{
						foreach((array)$_POST['select'] as $value)
						{
						$value1=$_POST['quantity'];
						$sql="SELECT * FROM shoes WHERE id=$value";
						$result=mysql_query($sql);
						if($result)
						{
							echo '<table style="text-align:right;" border="0" class="centerTable" width="200" frame=hsides>';
							$row=mysql_fetch_row($result);

							while($row)
							{
							
							$columns=count($row);
							$price=$value1[$value - 1]*$row[1];
							echo "<tr>";
							echo "<td>".$value1[$value - 1]."</td>";
							echo '<td style="text-align:center;">#'.$row[0]."</td>";
							echo '<td style="text-align:center;">'.$price."</td>";
							$que[$i++]=$row[0];
							$sum=$sum+$price;
							$j++;
							echo "</tr>";
							$row=mysql_fetch_row($result);
							}
						echo "</table>";
						}
						
						}
					}
					if($sum == 0)
						header('location:home.php');
					session_start();	
					$_SESSION['ids']=$que;
					

					?>
					<table style="text-align:right;" border="1" class="centerTable" width="200" frame=hsides >
					<tr>
						<?php
						echo "<td>";
							echo '<p style="font:bold 18px ariel">Total<p>';
						echo "</td>";
						echo "<td>";
							echo '<p style="font:bold 18px ariel">Rs. '.$sum."</p>";
						echo "</td>";
						?>
					</tr>
					</table>
				
				<br>
				<form style="text-align:center;">
					<a href="success.php"><input type="button" style="background-color:pink;font-size:24px" value="Confirm!"></a>
				</form>
				<br>
				<hr/>
				
			</div>
		</div>
	</body>
</html>