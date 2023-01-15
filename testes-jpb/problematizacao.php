<?php
include_once "../includes/connection.php";
include_once "../vendor/envio.php";

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
$perg1 = $_REQUEST['perg1'];
$perg2 = $_REQUEST['perg2'];
$perg3 = $_REQUEST['perg3'];

$data = $conn->query('SELECT * FROM resposta_problematizacao');
$linha = mysqli_fetch_assoc($data);
if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
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
    $mail->Body = "Suas repostas sobre o cenário: <br><b>Quais situações de problema você traria a luz durante a sua apresentação?</b><br>" . $perg1 . "<br><b>Quais são as oportunidades potenciais conectadas a estes problemas?</b><br>" . $perg2 . "<br><b>Quais outras oportunidades você enxerga hoje para este cliente?</b><br>" . $perg3;
}
$mail->send();
mysqli_close($conn);
