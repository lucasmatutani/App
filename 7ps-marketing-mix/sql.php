<?php
include_once "../includes/connection.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "./vendor/envio.php";

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
// $nome = $_REQUEST['nome'];

$produto = $_REQUEST['produto'];
$preco = $_REQUEST['preco'];
$praca = $_REQUEST['praca'];
$promocao = $_REQUEST['promocao'];
$pessoas = $_REQUEST['pessoas'];
$evidencias = $_REQUEST['evidencias'];
$processo = $_REQUEST['processo'];
$email = $_REQUEST['email'];

$data = $conn->query("SELECT * FROM 7ps_marketing_mix WHERE usuario_id = $usuario_id");
$linha = mysqli_fetch_assoc($data);
if (!empty($linha)) {
    $sql = "UPDATE 7ps_marketing_mix set usuario_id='$usuario_id', produto='$produto', preco='$preco', praca='$praca', promocao='$promocao',
    pessoas='$pessoas', evidencias='$evidencias', processo='$processo', email='$email' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO 7ps_marketing_mix set usuario_id='$usuario_id',produto='$produto', preco='$preco', praca='$praca', promocao='$promocao',
    pessoas='$pessoas', evidencias='$evidencias', processo='$processo', email='$email'";
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
