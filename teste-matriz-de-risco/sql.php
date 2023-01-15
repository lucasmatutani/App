<?php
include_once "../includes/connection.php";


$input1 = $_REQUEST['input1'];
$input2 = $_REQUEST['input2'];
$input3 = $_REQUEST['input3'];
$input4 = $_REQUEST['input4'];
$input5 = $_REQUEST['input5'];
$input6 = $_REQUEST['input6'];
$input7 = $_REQUEST['input7'];
$input8 = $_REQUEST['input8'];
$input9 = $_REQUEST['input9'];

$txt1 = $_REQUEST['txt1'];
$txt2 = $_REQUEST['txt2'];
$txt3 = $_REQUEST['txt3'];
$txt4 = $_REQUEST['txt4'];
$txt5 = $_REQUEST['txt5'];
$txt6 = $_REQUEST['txt6'];
$txt7 = $_REQUEST['txt7'];
$txt8 = $_REQUEST['txt8'];
$txt9 = $_REQUEST['txt9'];
$txt10 = $_REQUEST['txt10'];

$data = $conn->query('SELECT * FROM teste_matriz_de_risco');
$linha = mysqli_fetch_assoc($data);
if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
    $sql = "UPDATE teste_matriz_de_risco set usuario_id='$usuario_id', input1='$input1', input2='$input2', input3='$input3', input4='$input4', input5='$input5', input6='$input6', input7='$input7', input8='$input8', input9='$input9',  txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10',  WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO teste_matriz_de_risco set usuario_id='$usuario_id', input1='$input1', input2='$input2', input3='$input3', input4='$input4', input5='$input5', input6='$input6', input7='$input7', input8='$input8', input9='$input9',  txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10'";
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
