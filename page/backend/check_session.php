<?php
if($_SESSION["role_ID"] == "1")
{
	
}
else if ($_SESSION["role_ID"] == "2") {
	
	session_destroy();
	header("location:http://www.justroolaws.com");
}
else  {

	session_destroy();
	header("location:http://www.justroolaws.com");
}


?>