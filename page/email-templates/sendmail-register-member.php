<?php

//** Define Root directory แบบย่อ diectory path **//
define('ROOT',str_replace("\\",'/',dirname(__FILE__)));

require(ROOT.'/../../db/connect.php');

//** End Define Root directory **//




$showusername= $_GET["username"];
$showpassword= $_GET["password"];
$showfirstname= $_GET["firstname"];
$showlastname = $_GET["lastname"];
$showphone = $_GET["tel"];
$emailsend = $_GET["email"];


// $_SESSION["firstnamecu"] = $_GET["firstname"];
// $_SESSION["lastnamecu"] = $_GET["lastname"];
// $_SESSION["emailcu"] = $_GET["email"];
// $_SESSION["phonecu"] = $_GET["phone"];
// $_SESSION["companycu"] = $_GET["comname"];
// $_SESSION["subjectcu"] = $_GET["subject"];
// $_SESSION["messagecu"] = $_GET["message"];


	
	$body1 = file_get_contents('email-register2.html');
	$body1 = str_replace('%showfirstname%', $showfirstname, $body1); 
	$body1 = str_replace('%showlastname%', $showlastname, $body1); 
	$body1 = str_replace('%showusername%', $showusername, $body1); 
	$body1 = str_replace('%showpassword%', $showpassword, $body1); 
	$body1 = str_replace('%showphone%', $showphone, $body1); 
	$body1 = str_replace('%emailsend%', $emailsend, $body1); 
	





require(ROOT.'/../phpmailer/PHPMailerAutoload.php');
// require '../phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

require(ROOT.'/../../db/connectmailserver.php');



$mail->setFrom("reply@justroolaws.com", "JustRooLaws");

// $mail->addAddress($emailsend, 'User');     // Add a recipient
// 												           // Name is optional

// $mail->addReplyTo('contact@theimastermind.com', 'TheiMastermind');


$mail->addReplyTo('reply@justroolaws.com', 'JustRooLaws');
$mail->From       = 'reply@justroolaws.com';
$mail->FromName   = 'JustRooLaws';
$mail->addAddress($emailsend, $showfirstname);
$mail->Subject  = 'Thank you for your Registration. Do Not Reply';


$mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Thank you for your Message. - Not Reply';


// $body2 = 'ทางเราได้รับข้อมูลของคุณแล้ว และจะทำการพิจารณาและตอบกลับโดยเร็วที่สุด We have now received your message.  
// Your message is being verified. We will contact you back shortly.';


$mail->Body = $body1;
$mail->AltBody = 'We have now received your message.  Your message is being verified. We will contact you back shortly. ';


// $message = "ทางเราได้รับข้อมูลของคุณแล้ว และจะทำการพิจารณาและตอบกลับโดยเร็วที่สุด<br /><br />";
// $message .= "We have now received your message.  
// Your message is being verified. We will contact you back shortly.<br /><br />";
// $message .= "หมายเหตุ : อีเมล์นี้เป็นอีเมล์อัตโนมัติจาก TheiMastermind ไม่ต้องตอบกลับ<br /><br />";


// $mail->msgHTML($message);



// $body = <<<'EOT'
// TheiMastermind 2016 All Rights Reserved.
// EOT;


// $mail->WordWrap = 80;
// $mail->msgHTML($body, dirname(__FILE__), true); //Create message bodies and embed images

// $mail->addAttachment('img/image007.jpg','image007.jpg');  // optional name
// $mail->addAttachment('../PHPMailer/examples/images/phpmailer.png', 'phpmailer.png');  // optional name

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    // echo "<script>window.location = 'regcom.php'</script>";
    
} else {
    echo 'Message has been sent';
    echo "<script>window.location = '../en/register_member'</script>";
    // echo "<script>window.location = 'sendmail-contactus-toback.php'</script>";
}

?>