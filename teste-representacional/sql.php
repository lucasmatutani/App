<?php
include_once "../includes/connection.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "./vendor/envio.php";
echo $_SERVER['DOCUMENT_ROOT'];

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
echo $usuario_id;
$A = $_REQUEST['A'];
$C = $_REQUEST['C'];
$V = $_REQUEST['V'];
$AD = $_REQUEST['AD'];

$sql = "INSERT INTO teste_representacional (A, C, V, AD, usuario_id) VALUES ($A, $C, $V, $AD, $usuario_id)";
if (mysqli_query($conn, $sql)) {
    header("location: ../testes");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (!empty($email)) {
    $mail->addAddress($email);
    $mail->Body = "Seus resultados do Sistema Representacional: <br> A :" . $A . "<br> C :" . $C . "<br> V :" . $V  . "<br> AD     :" . $AD;
}
$mail->send();
mysqli_close($conn);
