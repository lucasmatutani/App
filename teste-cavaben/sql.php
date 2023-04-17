<?php
include_once "../includes/connection.php";
include_once "../vendor/envio.php";

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];

$input1 = $_REQUEST['input1'];
$input2 = $_REQUEST['input2'];
$input3 = $_REQUEST['input3'];
$input4 = $_REQUEST['input4'];
$input5 = $_REQUEST['input5'];
$input6 = $_REQUEST['input6'];
$input7 = $_REQUEST['input7'];
$input8 = $_REQUEST['input8'];
$input9 = $_REQUEST['input9'];
$input10 = $_REQUEST['input10'];


$data = $conn->query('SELECT * FROM teste_cavaben ');
$linha = mysqli_fetch_assoc($data);
if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
    $sql = "UPDATE teste_cavaben set usuario_id='$usuario_id', input1='$input1', input2='$input2', input3='$input3', input4='$input4', input5='$input5', input6='$input6', input7='$input7', input8='$input8', input9='$input9',  WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO teste_cavaben  set usuario_id='$usuario_id', input1='$input1', input2='$input2', input3='$input3', input4='$input4', input5='$input5', input6='$input6', input7='$input7', input8='$input8', input9='$input9',  input10='$input10'";
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
