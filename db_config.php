<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'mysql';
$db = 'deco1100';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

if(!$conn){
	die('Could not connect: ' . mysqli_error());
}

?>