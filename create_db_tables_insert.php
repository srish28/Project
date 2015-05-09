<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
$sql="CREATE DATABASE cinderella_db";

if(mysql_query($sql))
	echo "Database Created Successfully";
else
	echo "Error creating database: ".mysql_error();
?>

<?php
$con=mysql_connect("localhost","root","");
$sql=mysql_select_db('cinderella_db');
$sql = "CREATE TABLE shoes ( id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, price INT)";

if (mysql_query($sql))
{
echo "Table Created Successfully";
}
else
{
echo "Error creating table: ".mysql_error();
}
?>

<?php
$con=mysql_connect("localhost","root","");
$sql=mysql_select_db('cinderella_db');
$sql= "CREATE TABLE persons ( name CHAR(50) NOT NULL, email CHAR(50) NOT NULL UNIQUE, password CHAR(50) NOT NULL, contact CHAR(50) NOT NULL, address CHAR(50) NOT NULL, city CHAR(50) NOT NULL)";

if (mysql_query($sql))
{
echo "Table Created Successfully";
}
else
{
echo "Error creating table: ".mysql_error();
}
?>

<?php
$con=mysql_connect("localhost","root","");
$sql=mysql_select_db('cinderella_db');
$sql="INSERT INTO shoes VALUES('1','2900'),('2','1880'),('3','2000'),('4','2300'),('5','1900'),('6','2500'),('7','2400'),('8','2900'),('9','3000'),('10','2900'),('11','2100'),('12','1090')";
	
if (mysql_query($sql))
{
echo "Inserted Successfully";
}
else
{
echo "Error inserting: ".mysql_error();
}
?>

