<?php 

session_start();

//** Define Root directory แบบย่อ diectory path **//
define('ROOT',str_replace("\\",'/',dirname(__FILE__)));

  require('../../../db/connect.php');
  require('../../../db/loaddata.php');

//** End Define Root directory **//

mysqli_query('SET character_set_results=utf8');
mysqli_query('SET names=utf8');  
mysqli_query('SET character_set_client=utf8');
mysqli_query('SET character_set_connection=utf8');   
mysqli_query('SET character_set_results=utf8');   
mysqli_query('SET collation_connection=utf8_general_ci');


$type = $_POST['type'];

		//break;
switch ($type) {
	
	case 'add-article': //// add job
		print_r($_POST);
		$sql1 = "INSERT INTO `islaw-db`.`lawArticle`( `createdDate`, `article_ID`, `user_ID`, `cate_ID`,  `law_ID`, `type_ID`, `lawArticleTitle`, `description`,`lawArticleDetail`) 
																VALUES (CURRENT_TIMESTAMP,				
																'".$_POST["articleid"]."',
																'".$_POST["userid"]."',
																'".$_POST["category"]."',
																'".$_POST["lawtype"]."',
																'".$_POST["typearticle"]."',
																'".$_POST["title"]."',
																'".$_POST["description"]."',
																'".$_POST["content1"]."');";

		$upQuery1 = mysqli_query($link,$sql1);
		var_dump($sql1);
		
		# code...
		break;

}


?>