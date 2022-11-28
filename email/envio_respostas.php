<?php
session_start();
include_once "../vendor/envio.php";

$email = $_POST["email"];
if (strstr(strtolower($email), "@siteblindado")) {
    exit;
}

$mail->addAddress($email);

$mail->Body = "TESTE";

$mail->send();
