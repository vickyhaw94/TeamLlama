<?php
require 'db_config.php';
session_start();

$error='';
$username = $_POST['username'];
$password = $_POST['password'];


if(empty($username) && empty($password))
{
	$error="Username and Password invalid";
}
else
{
	/*'' this is used for string*/
	$sql = "SELECT * FROM `users` WHERE username='$username' AND password= '$password'";
	echo $sql;
	$result = mysqli_query($conn,$sql);
	$row_count = mysqli_num_rows($result);
	if($row_count == 1)
	{
		echo "login good";
		$_SESSION["user"] = $username;
		header('Location:home.php');
	}
	else
	{
		echo "login failed";
	}
}
mysqli_close($conn);
?>