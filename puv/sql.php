<?php
include_once "../includes/connection.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "./vendor/envio.php";

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
// $nome = $_REQUEST['nome'];

$servicos = $_REQUEST['servicos'];
$segmento = $_REQUEST['segmento'];
$necessidade = $_REQUEST['necessidade'];
$verbos = $_REQUEST['verbos'];
$elementos = $_REQUEST['elementos'];



$data = $conn->query("SELECT * FROM puv WHERE usuario_id = $usuario_id");
$linha = mysqli_fetch_assoc($data);
if (!empty($linha)) {
    $sql = "UPDATE puv set usuario_id='$usuario_id', email='$email',  servicos='$servicos', segmento='$segmento', necessidade='$necessidade', verbos='$verbos', elementos='$elementos' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO puv set usuario_id='$usuario_id', email='$email', servicos='$servicos', segmento='$segmento', necessidade='$necessidade', verbos='$verbos', elementos='$elementos'";
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
