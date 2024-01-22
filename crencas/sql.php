<?php
include_once "../includes/connection.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "./vendor/envio.php";

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
$futuro_positivo_presente_negativo = $_REQUEST['futuro_positivo_presente_negativo'];
$futuro_positivo_presente_positivo = $_REQUEST['futuro_positivo_presente_positivo'];
$futuro_negativo_presente_negativo = $_REQUEST['futuro_negativo_presente_negativo'];
$futuro_negativo_presente_positivo = $_REQUEST['futuro_negativo_presente_positivo'];

$data = $conn->query("SELECT * FROM crencas WHERE usuario_id = $usuario_id");
$linha = mysqli_fetch_assoc($data);

if (!empty($linha)) {
    $sql = "UPDATE crencas set usuario_id='$usuario_id', email='$email',  futuro_positivo_presente_negativo='$futuro_positivo_presente_negativo', futuro_positivo_presente_positivo='$futuro_positivo_presente_positivo', futuro_negativo_presente_negativo='$futuro_negativo_presente_negativo', futuro_negativo_presente_positivo='$futuro_negativo_presente_positivo' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO crencas set usuario_id='$usuario_id', email='$email', futuro_positivo_presente_negativo='$futuro_positivo_presente_negativo', futuro_positivo_presente_positivo='$futuro_positivo_presente_positivo', futuro_negativo_presente_negativo='$futuro_negativo_presente_negativo', futuro_negativo_presente_positivo='$futuro_negativo_presente_positivo'";
}

if (!empty($email)) {
    $mail->addAddress($email);
    $mail->CharSet = 'UTF-8';
    $mail->Body = "Você pode ver suas repostas através do link: </br> http://focustradeapp.com.br/testes/index.php";
}
$mail->send();

if (mysqli_query($conn, $sql)) {
    header("location: ../testes");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
