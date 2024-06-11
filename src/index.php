<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once './vendor/autoload.php';
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = '****';
$mail->SMTPAuth = true;
$mail->Username = '****';
$mail->Password = '****';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 465;

$mail->setFrom('****', '****');
$mail->addAddress('****', '****');
$mail->Subject = 'Welcome';

$mail->isHTML(TRUE);
$mail->Body = '<html>Hello ladies and gentlemen.</html>';
$mail->AltBody = 'Hello ladies and gentlemen.';

// add attachment 
// just add the '/path/to/file.pdf'
// $attachmentPath = './confirmations/yourbooking.pdf';
// if (file_exists($attachmentPath)) {
//     $mail->addAttachment($attachmentPath, 'yourbooking.pdf');
// }

if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}