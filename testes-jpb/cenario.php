<?php
include_once "../includes/connection.php";
include_once "../vendor/envio.php";

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
$perg1 = $_REQUEST['perg1'];
$perg2 = $_REQUEST['perg2'];
$perg3 = $_REQUEST['perg3'];

$data = $conn->query('SELECT * FROM resposta_cenario WHERE usuario_id = $usuario_id');
$linha = mysqli_fetch_assoc($data);
if (!empty($linha)) {
    $sql = "UPDATE resposta_cenario set email='$email', perg1='$perg1', perg2='$perg2' WHERE usuario_id = $usuario_id";
} else {
    $sql = "INSERT INTO resposta_cenario set email='$email', perg1='$perg1', perg2='$perg2', usuario_id = $usuario_id";
}
if (mysqli_query($conn, $sql)) {
    header("location: ../testes");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (!empty($email)) {
    $mail->addAddress($email);
    $mail->Body = "Suas repostas sobre o cenário: <br><b>Quais informações (auditorias) você colocaria na apresentação que poderiam ser uteis no atingimento dos objetivos definidos do JBP?</b><br>" . utf8_encode($perg1) . "<br><b>Quais informações de cenário (mercado, concorrência, lançamentos, inovações, tendencias, etc)  você colocaria no cenário do JBP?</b><br>" . utf8_encode($perg2) . "<br><b>Quais informações do negócio da Torrent você colocaria no seu JBP?</b><br>" . utf8_encode($perg3);
}
$mail->addCC("fabricio.favero@focustrade.com.br");
$mail->send();
mysqli_close($conn);
