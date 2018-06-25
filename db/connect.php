<?php

	ini_set('error_reporting', E_ALL & ~E_NOTICE);
	error_reporting(E_ALL & ~E_NOTICE);

header('Content-Type: text/html; charset=utf-8');
	
$link = mysqli_connect("localhost","isdb-user","db-1234", "islaw-db");
#$link = mysqli_connect("localhost","root","0000", "prj_islaw-db");
  
//Set Defult timezone to Thailand

  date_default_timezone_set("Asia/Bangkok");
 

// if ($link->connect_errno) {
//     die( "Failed to connect to MySQL : (" . $link->connect_errno . ") " . $link->connect_error);
// }
$link->set_charset("utf8");

if (mysqli_connect_errno())
  {
    echo "Database Connect Failed : " . mysqli_connect_error();
    exit();
  }

  //*** Reject user not online
  $intRejectTime = 20; // Minute
  $sql = "UPDATE user SET loginStatus = '0', LastLogin = '0000-00-00 00:00:00'  WHERE 1 AND DATE_ADD(LastLogin, INTERVAL $intRejectTime MINUTE) <= NOW() ";
  $query = mysqli_query($link,$sql);


$_EMAIL = "reply@justroolaws.com";


////check connection//////
// if (!$link) {
//     echo "Error: Unable to connect to MySQL." . PHP_EOL;
//     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//     exit;
// }
// echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
// echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;


//////Close check connecttion//////

// //******LOGIN MODULE CHECK ONLINE STATUS*******//
// $serverName   = "localhost";
// $userName     = "isdb-user";
// $userPassword     = "db-1234";
// $dbName   = "islaw-db";

// $con = mysqli_connect($serverName,$userName,$userPassword,$dbName);

// 	//Set Defult timezone to Thailand
// 	ini_set("date.timezone", "Asia/Bangkok");
	
	
// 	//SET Defult Encoding
// 	mysqli_query("SET NAMES UTF8");


// //*** Reject user not online
// $intRejectTime = 20; // Minute
// $sql = "UPDATE user SET LoginStatus = '0', LastLogin = '0000-00-00 00:00:00'  WHERE 1 AND DATE_ADD(LastLogin, INTERVAL $intRejectTime MINUTE) <= NOW() ";
// $query = mysqli_query($con,$sql);



// //******END LOGIN MODULE CHECK ONLINE STATUS*******//


	// $connection = mysql_connect("mysql-5.5.chaiyohosting.com","thei_db","DB_2016");

	


	// Convert Variable Array To Variable
	while(list($xVarName, $xVarvalue) = each($_GET)) {
     ${$xVarName} = $xVarvalue;
	}
 
 
	while(list($xVarName, $xVarvalue) = each($_POST)) {
     ${$xVarName} = $xVarvalue;
}	
 
while(list($xVarName, $xVarvalue) = each($_FILES)) {
     ${$xVarName."_name"} = $xVarvalue['name'];
     ${$xVarName."_type"} = $xVarvalue['type'];
     ${$xVarName."_size"} = $xVarvalue['size'];
     ${$xVarName."_error"} = $xVarvalue['error'];
     ${$xVarName} = $xVarvalue['tmp_name'];
}

foreach($_POST as $key => $val){
  $_POST[$key] = addslashes($val);
}
foreach($_GET as $key => $val){
  $_GET[$key] = addslashes($val);
}

foreach (array_merge($_GET, $_POST) as $key => $val) {
  global $$key;
  $$key = addslashes($val);
}



function show_date($d) {
	list($date, $time) = explode(" ",$d);
	list($y,$m,$d) =  explode("-",$date);
	return "$d/$m/$y";
}

function send_mail($nfrom, $efrom, $eto ,$subject, $html) {

	if (strtoupper(substr(PHP_OS,0,3)=='WIN')) { 
	  $eol = "\r\n"; 
	} elseif (strtoupper(substr(PHP_OS,0,3)=='MAC')) { 
	  $eol = "\r"; 
	} else { 
	  $eol = "\n"; 
	} 
	$headers  = "MIME-Version: 1.0".$eol;
	$headers .= "Content-type: text/html; charset=utf-8".$eol;
	$headers .= "From: ".$nfrom." <".$efrom.">".$eol;
	$headers .= "Return-Path: ".$nfrom." <".$efrom.">".$eol;
	$headers .= "X-Mailer: PHP v".phpversion().$eol;
	$headers .= "Message-ID: <".date("YmdHis")." TheSystem@".$_SERVER['SERVER_NAME'].">".$eol;
	@mail($eto,$subject,$html,$headers);	

}

?>
