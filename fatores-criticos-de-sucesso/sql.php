<?php
include_once "../includes/connection.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "./vendor/envio.php";
echo $_SERVER['DOCUMENT_ROOT'];


$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
$nome = $_REQUEST['nome'];
$input1 = $_REQUEST['input1'];
$input2 = $_REQUEST['input2'];
$input3 = $_REQUEST['input3'];
$input4 = $_REQUEST['input4'];
$input5 = $_REQUEST['input5'];
$txt1 = utf8_decode($_REQUEST['txt1']);
$txt2 = utf8_decode($_REQUEST['txt2']);
$txt3 = utf8_decode($_REQUEST['txt3']);
$txt4 = utf8_decode($_REQUEST['txt4']);
$txt5 = utf8_decode($_REQUEST['txt5']);
$txt6 = utf8_decode($_REQUEST['txt6']);
$txt7 = utf8_decode($_REQUEST['txt7']);
$txt8 = utf8_decode($_REQUEST['txt8']);
$txt9 = utf8_decode($_REQUEST['txt9']);
$txt10 = utf8_decode($_REQUEST['txt10']);
$txt11 = utf8_decode($_REQUEST['txt11']);
$txt12 = utf8_decode($_REQUEST['txt12']);
$txt13 = utf8_decode($_REQUEST['txt13']);
$txt14 = utf8_decode($_REQUEST['txt14']);
$txt15 = utf8_decode($_REQUEST['txt15']);
$txt16 = utf8_decode($_REQUEST['txt16']);
$txt17 = utf8_decode($_REQUEST['txt17']);
$txt18 = utf8_decode($_REQUEST['txt18']);
$txt19 = utf8_decode($_REQUEST['txt19']);
$txt20 = utf8_decode($_REQUEST['txt20']);

$data = $conn->query("SELECT * FROM fatores_criticos_de_sucesso WHERE usuario_id = $usuario_id");
$linha = mysqli_fetch_assoc($data);
if (!empty($linha)) {
    $sql = "UPDATE fatores_criticos_de_sucesso set nome='$nome', input1='$input1', input2='$input2', input3='$input3', input4='$input4', input5='$input5', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', txt13='$txt13', txt14='$txt14', txt15='$txt15', txt16='$txt16', txt17='$txt17', txt18='$txt18', txt19='$txt19', txt20='$txt20' WHERE usuario_id = $usuario_id";
} else {
    $sql = "INSERT INTO fatores_criticos_de_sucesso set nome='$nome', usuario_id='$usuario_id', input1='$input1', input2='$input2', input3='$input3', input4='$input4', input5='$input5', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', txt13='$txt13', txt14='$txt14', txt15='$txt15',  txt16='$txt16', txt17='$txt17', txt18='$txt18', txt19='$txt19', txt20='$txt20'";
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
