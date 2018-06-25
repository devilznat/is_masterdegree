<?php 
session_start();
//** Define Root directory แบบย่อ diectory path **//
define('ROOT',str_replace("\\",'/',dirname(__FILE__)));

require(ROOT.'/../../../db/connect.php');

//** End Define Root directory **//

require('Uploader.php');

// Directory where we're storing uploaded images
// Remember to set correct permissions or it won't work
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$rando = generateRandomString(24);


$namefile  ="resources".$rando.".";


$upload_dir = '../../uploadfile/resources/';
$Upload = new FileUpload('resources');
$ext = $Upload->getExtension(); // Get the extension of the uploaded file
$Upload->newFileName = $namefile.$ext;
$namefiledb = $namefile.$ext;
$result = $Upload->handleUpload($upload_dir, $valid_extensions);


if (!$result) {
  exit(json_encode(array('success' => false, 'msg' => $uploader->getErrorMsg())));  
}

echo json_encode(array('success' => true));

$_SESSION["resources"] = $namefiledb;

session_write_close();


?>