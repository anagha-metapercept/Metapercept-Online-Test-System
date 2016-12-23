<?php

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';

$mail->SMTPAuth = true;

$mail->Username = 'anaghad1990@gmail.com';

$mail->Password = 'onkar123#';

$mail->SMTPSecure = 'tls';

$mail->From = 'anaghad1990@gmail.com';

$mail->FromName = 'Anagha D';

$mail->addAddress('anagha@metapercept.com', 'anagha');

//$mail->addReplyTo('beingbalram@gmail.com', 'Balram Khichar');

$mail->WordWrap = 50;

$mail->isHTML(true);

$mail->Subject = 'I am using PHPMailer';

$mail->Body    = 'Hi Iam using PHPMailer library to sent SMTP mail from localhost';

if(!$mail->send()) {

   echo 'Message could not be sent.';

   echo 'Mailer Error: ' . $mail->ErrorInfo;

   exit;

}

echo 'Message has been sent';

?>