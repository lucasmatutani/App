<?php
include_once "../includes/connection.php";
include_once "../vendor/envio.php";

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
$perg1 = $_REQUEST['perg1'];
$perg2 = $_REQUEST['perg2'];

$data = $conn->query('SELECT * FROM resposta_cenario');
$linha = mysqli_fetch_assoc($data);
if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
    $sql = "UPDATE respota_cenario set email='$email', perg1='$perg1', perg2='$perg2' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO respota_cenario set email='$email', perg1='$perg1', perg2='$perg2'";
}
if (mysqli_query($conn, $sql)) {
    header("location: ../testes");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (!empty($email)) {
    $mail->addAddress($email);
    $mail->Body = "Suas repostas sobre o cenário: <br>" . $perg1 . "<br>" . $perg2;
}
$mail->send();
mysqli_close($conn);
