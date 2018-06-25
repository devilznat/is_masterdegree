<?php
	session_start();
	session_destroy();

	define('ROOT',str_replace("\\",'/',dirname(__FILE__)));

	require_once(ROOT.'../../../db/connect.php');
	

	//*** Update Status
	$sql = "UPDATE user SET loginStatus = '0', LastLogin = '0000-00-00 00:00:00' WHERE user_ID = '".$_SESSION["user_ID"]."' ";
	$query = mysqli_query($link,$sql);

	session_destroy();
	header("location:login");
?>