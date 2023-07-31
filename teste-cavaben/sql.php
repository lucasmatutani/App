<?php
include_once "../includes/connection.php";
// include_once "../vendor/envio.php";

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
$nome = $_REQUEST['nome'];

$vendedor_perg_1 = $_REQUEST['vendedor_perg_1'];
$vendedor_perg_2 = $_REQUEST['vendedor_perg_2'];
$vendedor_perg_3 = $_REQUEST['vendedor_perg_3'];
$vendedor_perg_4 = $_REQUEST['vendedor_perg_4'];
$vendedor_perg_5 = $_REQUEST['vendedor_perg_5'];
$vendedor_perg_6 = $_REQUEST['vendedor_perg_6'];
$vendedor_perg_7 = $_REQUEST['vendedor_perg_7'];
$vendedor_perg_8 = $_REQUEST['vendedor_perg_8'];
$vendedor_perg_9 = $_REQUEST['vendedor_perg_9'];
$vendedor_perg_10 = $_REQUEST['vendedor_perg_10'];


$data = $conn->query('SELECT * FROM teste_cavaben ');
$linha = mysqli_fetch_assoc($data);
if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
    $sql = "UPDATE teste_cavaben set usuario_id='$usuario_id', email='$email', vendedor_perg_1='$vendedor_perg_1', vendedor_perg_2='$vendedor_perg_2', vendedor_perg_3='$vendedor_perg_3', vendedor_perg_4='$vendedor_perg_4', vendedor_perg_5='$vendedor_perg_5', vendedor_perg_6='$vendedor_perg_6', vendedor_perg_7='$vendedor_perg_7', vendedor_perg_8='$vendedor_perg_8', vendedor_perg_9='$vendedor_perg_9',  WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO teste_cavaben  set usuario_id='$usuario_id', email='$email', vendedor_perg_1='$vendedor_perg_1', vendedor_perg_2='$vendedor_perg_2', vendedor_perg_3='$vendedor_perg_3', vendedor_perg_4='$vendedor_perg_4', vendedor_perg_5='$vendedor_perg_5', vendedor_perg_6='$vendedor_perg_6', vendedor_perg_7='$vendedor_perg_7', vendedor_perg_8='$vendedor_perg_8', vendedor_perg_9='$vendedor_perg_9',  vendedor_perg_10='$vendedor_perg_10'";
}
if (mysqli_query($conn, $sql)) {
    header("location: ../testes");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (!empty($email)) {
    $mail->addAddress($email);
    $mail->Body = "Você pode ver suas repostas através do link: </br> http://focustradeapp.com.br/testes/index.php";
}
$mail->send();
mysqli_close($conn);
