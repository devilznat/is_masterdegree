<?php 

session_start();


//** Define Root directory แบบย่อ diectory path **//
define('ROOT',str_replace("\\",'/',dirname(__FILE__)));

  require('../../../db/connect.php');
  require('../../../db/loaddata.php');


//   echo "Test";
// echo "<br>";
// echo $_SESSION["user_ID"];
// echo "<br>";
// echo $_SESSION["role_ID"];

  


//** End Define Root directory **//

mysqli_query('SET character_set_results=utf8');
mysqli_query('SET names=utf8');  
mysqli_query('SET character_set_client=utf8');
mysqli_query('SET character_set_connection=utf8');   
mysqli_query('SET character_set_results=utf8');   
mysqli_query('SET collation_connection=utf8_general_ci');


$type = $_POST['type'];

switch ($type) {




	case 'add-article': //// add job
		$sql1 = "INSERT INTO `islaw-db`(`createdDate`, `article_ID`,   `cate_ID`,  `law_ID`, `type_ID`, `lawArticleTitle`, `description`,`lawArticleDetail`) 
		VALUES (CURRENT_TIMESTAMP,
				'".$_POST["articleid"]."',
				'".$_POST["category"]."',
																'".$_POST["lawtype"]."',
																'".$_POST["type"]."',
																'".$_POST["title"]."',
																'".$_POST["description"]."',
																'".$_POST["c"]."');";
		$upQuery1 = mysql_query($sql1);


		# code...
		break;

		,


?>