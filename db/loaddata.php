<?php

session_start();

// define('ROOT',str_replace("\\",'/',dirname(__FILE__)));

require_once 'connect.php';

  	// load data from database member
  	$strSQL = "SELECT * FROM user WHERE user_ID = '".$_SESSION['user_ID']."' ";
	$objQuery = mysqli_query($link,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);

	$nameuser = $objResult["firstName"];
	$lastnameuser = $objResult["lastName"];
	$userid = $_SESSION['user_ID'];
	$_SESSION['role_ID'] = $objResult["role_ID"];

	// load data from database member
  	$strSQL2 = "SELECT * FROM role WHERE role_ID = '".$_SESSION['role_ID']."' ";
	$objQuery2 = mysqli_query($link,$strSQL2);
	$objResult2 = mysqli_fetch_array($objQuery2);

	$roletitle = $objResult2["roleTitle"];

?>