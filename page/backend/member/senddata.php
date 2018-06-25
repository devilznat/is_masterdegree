<?php

session_start();


//** Define Root directory แบบย่อ diectory path **//
define('ROOT',str_replace("\\",'/',dirname(__FILE__)));

require(ROOT.'/../../db/connect.php');


//** End Define Root directory **//

mysqli_query('SET character_set_results=utf8');
mysqli_query('SET names=utf8');  
mysqli_query('SET character_set_client=utf8');
mysqli_query('SET character_set_connection=utf8');   
mysqli_query('SET character_set_results=utf8');   
mysqli_query('SET collation_connection=utf8_general_ci');




?>