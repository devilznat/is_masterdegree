<?php

session_start();

define('ROOT',str_replace("\\",'/',dirname(__FILE__)));

	require_once(ROOT.'/../../db/connect.php');
	
	
	$strUsername = mysqli_real_escape_string($link,$_POST['txtUsername']);
	$strPassword = mysqli_real_escape_string($link,$_POST['txtPassword']);

	$strSQL = "SELECT * FROM user WHERE userName = '".$strUsername."' 
	and passWord = '".$strPassword."'";
	$objQuery = mysqli_query($link,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		// echo "Username and Password Incorrect!";
		header("location:login_wrong");
		exit();
	}
	else
	{
		if($objResult["loginStatus"] == "1")
		{
			echo "'".$strUsername."' Exists login!";
			exit();
		}
		else
		{
			//*** Update Status Login
			$sql = "UPDATE user SET loginStatus = '1' , LastLogin = NOW() WHERE user_ID = '".$objResult["user_ID"]."' ";
			$query = mysqli_query($link,$sql);

			//*** Session
			$_SESSION["user_ID"] = $objResult["user_ID"];
			$_SESSION["role_ID"] = $objResult["role_ID"];
			session_write_close();

			if ($objResult["role_ID"] == "1") {
				//*** Go to Main page
			header("location:member/dashboard_member");
			}

			else if ($objResult["role_ID"] == "2" ) {

				if($objResult["approveStatus_ID"] == "1"){
				//*** Go to Main page
				header("location:lawyer/dashboard_lawyer");
				}
				else {
					alert("คุณยังไม่ได้รับการอนุัมติเข้าสู่ระบบ");
				}
			}

			else if ($objResult["role_ID"] == "3") {
				//*** Go to Main page
			header("location:admin/dashboard_main");
			}


		}
			
	}
	mysqli_close($link);

	?>