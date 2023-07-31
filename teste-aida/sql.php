<?php
include_once  "../includes/connection.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "./vendor/envio.php";
echo $_SERVER['DOCUMENT_ROOT'];

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
$grupo = $_REQUEST['grupo'];
$nm1 = $_REQUEST['nm1'];
$txt1 = $_REQUEST['txt1'];
$txt2 = $_REQUEST['txt2'];
$txt3 = $_REQUEST['txt3'];
$txt4 = $_REQUEST['txt4'];
$nm2 = $_REQUEST['nm2'];
$txt5 = $_REQUEST['txt5'];
$txt6 = $_REQUEST['txt6'];
$txt7 = $_REQUEST['txt7'];
$txt8 = $_REQUEST['txt8'];
$nm3 = $_REQUEST['nm3'];
$txt9 = $_REQUEST['txt9'];
$txt10 = $_REQUEST['txt10'];
$txt11 = $_REQUEST['txt11'];
$txt12 = $_REQUEST['txt12'];
$nm4 = $_REQUEST['nm4'];
$txt13 = $_REQUEST['txt13'];
$txt14 = $_REQUEST['txt14'];
$txt15 = $_REQUEST['txt15'];
$txt16 = $_REQUEST['txt16'];


$data = $conn->query("SELECT * FROM teste_aida WHERE usuario_id = $usuario_id");
$linha = mysqli_fetch_assoc($data);
if (!empty($linha)) {
    $sql = "UPDATE teste_aida set usuario_id='$usuario_id', grupo='$grupo', nm1='$nm1', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', nm2='$nm2', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', nm3='$nm3', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', nm4='$nm4', txt13='$txt13', txt14='$txt14', txt15='$txt15', txt16='$txt16' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO teste_aida set usuario_id='$usuario_id', grupo='$grupo', nm1='$nm1', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', nm2='$nm2', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', nm3='$nm3', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', nm4='$nm4', txt13='$txt13', txt14='$txt14', txt15='$txt15', txt16='$txt16'";
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
