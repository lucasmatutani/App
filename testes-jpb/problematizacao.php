<?php
include_once "../includes/connection.php";
include_once "../vendor/envio.php";

$usuario_id = $_REQUEST['usuario_id'];
$email = utf8_decode($_REQUEST['email']);
$perg1 = utf8_decode($_REQUEST['perg1']);
$perg2 = utf8_decode($_REQUEST['perg2']);
$perg3 = utf8_decode($_REQUEST['perg3']);

$data = $conn->query("SELECT * FROM resposta_problematizacao WHERE usuario_id = $usuario_id");
$linha = mysqli_fetch_assoc($data);
if (!empty($linha)) {
    $sql = "UPDATE resposta_problematizacao set email='$email', perg1='$perg1', perg2='$perg2', perg3='$perg3' WHERE usuario_id = $usuario_id";
} else {
    $sql = "INSERT INTO resposta_problematizacao set email='$email', perg1='$perg1', perg2='$perg2', perg3='$perg3', usuario_id = $usuario_id";
}
if (mysqli_query($conn, $sql)) {
    header("location: ../testes");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (!empty($email)) {
    $mail->addAddress($email);
    $mail->Body = "Suas repostas sobre o cenário: <br><b>Quais situações de problema você traria a luz durante a sua apresentação?</b><br>" . utf8_encode($perg1) . "<br><b>Quais são as oportunidades potenciais conectadas a estes problemas?</b><br>" . utf8_encode($perg2) . "<br><b>Quais outras oportunidades você enxerga hoje para este cliente?</b><br>" . utf8_encode($perg3);
}
$mail->addCC("fabricio.favero@focustrade.com.br");
$mail->send();
mysqli_close($conn);
