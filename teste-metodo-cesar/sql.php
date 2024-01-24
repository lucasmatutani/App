<?php
include_once "../includes/connection.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "./vendor/envio.php";
echo $_SERVER['DOCUMENT_ROOT'];

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
$case = $_REQUEST['case'];
$confianca = $_REQUEST['confianca'];
$empatia = $_REQUEST['empatia'];
$seguranca = $_REQUEST['seguranca'];
$aparencia = $_REQUEST['aparencia'];
$resposta = $_REQUEST['resposta'];
$observacoes = $_REQUEST['observacoes'];

$data = $conn->query('SELECT * FROM teste_metodo_cesar');
$linha = mysqli_fetch_assoc($data);
if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
    $sql = "UPDATE teste_metodo_cesar set email='$email', caso='$case', confianca='$confianca', empatia='$empatia', seguranca='$seguranca', aparencia='$aparencia', resposta='$resposta', observacoes='$observacoes' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO teste_metodo_cesar (email, caso, confianca, empatia, seguranca, aparencia, resposta, observacoes, usuario_id) VALUES ('$email', '$case', '$confianca', '$empatia', '$seguranca', '$aparencia', '$resposta', '$observacoes' , '$usuario_id')";
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
