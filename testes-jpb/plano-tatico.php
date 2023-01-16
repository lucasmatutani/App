<?php
include_once "../includes/connection.php";
include_once "../vendor/envio.php";

$usuario_id = $_REQUEST['usuario_id'];
$email = utf8_decode($_REQUEST['email']);
$perg1 = utf8_decode($_REQUEST['perg1']);
$perg2 = utf8_decode($_REQUEST['perg2']);

$data = $conn->query("SELECT * FROM resposta_plano_tatico WHERE usuario_id = $usuario_id");
$linha = mysqli_fetch_assoc($data);
if (!empty($linha)) {
    $sql = "UPDATE resposta_plano_tatico set email='$email', perg1='$perg1', perg2='$perg2' WHERE usuario_id = $usuario_id";
} else {
    $sql = "INSERT INTO resposta_plano_tatico set email='$email', perg1='$perg1', perg2='$perg2', usuario_id = $usuario_id";
}
if (mysqli_query($conn, $sql)) {
    header("location: ../testes");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (!empty($email)) {
    $mail->addAddress($email);
    $mail->Body = "Suas repostas sobre o cenário: <br><b>Quais ações de promoção de marca, lançamento de produtos ou outros formatos de geração de demanda você considera importante comunicar no seu plano?</b><br>" . utf8_encode($perg1) . "<br><b>O que você precisa para construir o calendário promocional a ser implementado neste cliente?</b><br>" . utf8_encode($perg2);
}
$mail->addCC("fabricio.favero@focustrade.com.br");
$mail->send();
mysqli_close($conn);
