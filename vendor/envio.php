<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once $_SERVER['DOCUMENT_ROOT'] . "./vendor/autoload.php";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                     //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.focustrade.com.br';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Port       =  587;
    $mail->SMTPSecure = false;
    $mail->SMTPAutoTLS = false;                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->Username   = 'respostas@focustrade.com.br';                     //SMTP username
    $mail->Password   = 'H^utbHN907*u';
    $mail->Sender = "respostas@focustrade.com.br";
    $mail->setFrom('respostas@focustrade.com.br');
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Resposta teste Focustrade';
} catch (Exception $e) {
    echo "Email não foi enviado, erro: {$mail->ErrorInfo}";
}
