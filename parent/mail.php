<?php 

require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer();                                   //
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'akilahgm@gmail.com';                 // SMTP username
$mail->Password = 'Hikila_187';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;

$mail->From = 'akilahgm@gmail.com';
$mail->FromName = 'Mailer';
$mail->addAddress('akilakavindu02@gmail.com');     // Add a recipient
$mail->addReplyTo('akilahgm@gmail.com', 'Information');

$mail->Subject = 'Check';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}



 ?>