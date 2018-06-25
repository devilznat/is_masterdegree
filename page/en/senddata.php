<?php

session_start();


//** Define Root directory แบบย่อ diectory path **//
define('ROOT',str_replace("\\",'/',dirname(__FILE__)));

require(ROOT.'/../../db/connect.php');


//** End Define Root directory **//
/*
mysqli_query('SET character_set_results=utf8');
mysqli_query('SET names=utf8');  
mysqli_query('SET character_set_client=utf8');
mysqli_query('SET character_set_connection=utf8');   
mysqli_query('SET character_set_results=utf8');   
mysqli_query('SET collation_connection=utf8_general_ci');
*/

$type = $_POST['type'];

switch ($type) {


	case 'register-lawyer':

	$sql1 = "INSERT INTO user (`registerBy`, `userName`, `passWord`, `firstName`, 
							 `lastName`, `email`, `tel`, `role_ID`, `evidenceFile` ) 
				       VALUES (CURRENT_TIMESTAMP, 
				       '".mysqli_real_escape_string($link,$_POST["username"])."', 
				       '".mysqli_real_escape_string($link,$_POST['password'])."', 
				       '".$_POST["firstname"]."', 
				       '".$_POST["lastname"]."', 
				       '".$_POST["email"]."', 
				       '".$_POST["phone"]."',
				       '".$_POST["typerole"]."',
				       '".$_SESSION["evidence"]."');";

	$query = mysqli_query($link,$sql1) or die(mysqli_error($link));
					
#print $sql1;

						
		unset($_SESSION["evidence"]);
		# code...
		break;

		

	
	case 'register-member':

	$sql1 = "INSERT INTO user (`registerBy`, `userName`, `passWord`, `firstName`, 
							 `lastName`, `email`, `tel`, `role_ID`) 
				       VALUES (CURRENT_TIMESTAMP, 
				       '".mysqli_real_escape_string($link,$_POST["username"])."', 
				       '".mysqli_real_escape_string($link,$_POST['password'])."', 
				       '".$_POST["firstname"]."', 
				       '".$_POST["lastname"]."', 
				       '".$_POST["email"]."', 
				       '".$_POST["phone"]."',
				       '".$_POST["typerole"]."');";

	$query = mysqli_query($link,$sql1) or die(mysqli_error($link));


	
		# code...
		break;
	
	default:
		# code...
		break;
}


?>