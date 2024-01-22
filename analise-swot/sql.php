<?php
include_once "../includes/connection.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "./vendor/envio.php";

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
$pontos_fortes = $_REQUEST['pontos_fortes'];
$pontos_fracos = $_REQUEST['pontos_fracos'];
$oportunidades = $_REQUEST['oportunidades'];
$ameacas = $_REQUEST['ameacas'];


$data = $conn->query("SELECT * FROM analise_swot WHERE usuario_id = $usuario_id");
$linha = mysqli_fetch_assoc($data);
if (!empty($linha)) {
    $sql = "UPDATE analise_swot set usuario_id='$usuario_id', email='$email', pontos_fortes='$pontos_fortes', pontos_fracos='$pontos_fracos', oportunidades='$oportunidades', ameacas='$ameacas' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO analise_swot set usuario_id='$usuario_id', email='$email', pontos_fortes='$pontos_fortes', pontos_fracos='$pontos_fracos', oportunidades='$oportunidades', ameacas='$ameacas'";
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
