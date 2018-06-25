<?php

$mail->isSMTP();
$mail->CharSet = "utf-8";
// $mail->SMTPDebug  = 2;
$mail->Host       = "mail.justroolaws.com";
$mail->Port       = 25;
$mail->SMTPSecure = "tls";

$mail->SMTPSecure = false;
$mail->SMTPAutoTLS = false;

$mail->SMTPAuth   = true;
$mail->Username   = "reply@justroolaws.com";
$mail->Password   = "1234";

?>