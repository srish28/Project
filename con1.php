<?php

$con=mysql_connect("localhost","root","") or die(mysql_error());
$sql=mysql_select_db('cinderella_db') or die(mysql_error());
session_start();
$p=$_SESSION['ids'];
foreach($p as $val)
	echo $val;
?>