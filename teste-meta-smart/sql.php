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
$input6 = $_REQUEST['input6'];
$input7 = $_REQUEST['input7'];
$input8 = $_REQUEST['input8'];
$input9 = $_REQUEST['input9'];
$input10 = $_REQUEST['input10'];
$input11 = $_REQUEST['input11'];
$input12 = $_REQUEST['input12'];
$input13 = $_REQUEST['input13'];
$input14 = $_REQUEST['input14'];
$input15 = $_REQUEST['input15'];

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
$txt11 = $_REQUEST['txt11'];
$txt12 = $_REQUEST['txt12'];
$txt13 = $_REQUEST['txt13'];
$txt14 = $_REQUEST['txt14'];
$txt15 = $_REQUEST['txt15'];
$txt16 = $_REQUEST['txt16'];
$txt17 = $_REQUEST['txt17'];
$txt18 = $_REQUEST['txt18'];
$txt19 = $_REQUEST['txt19'];
$txt20 = $_REQUEST['txt20'];
$txt21 = $_REQUEST['txt21'];
$txt22 = $_REQUEST['txt22'];
$txt23 = $_REQUEST['txt23'];
$txt24 = $_REQUEST['txt24'];
$txt25 = $_REQUEST['txt25'];
$txt26 = $_REQUEST['txt26'];
$txt27 = $_REQUEST['txt27'];
$txt28 = $_REQUEST['txt28'];
$txt29 = $_REQUEST['txt29'];
$txt30 = $_REQUEST['txt30'];




$sql = "INSERT INTO teste_meta_smart set nome='$nome', usuario_id='$usuario_id', input1='$input1', input2='$input2', input3='$input3', input4='$input4', input5='$input5', input6='$input6', input7='$input7', input8='$input8', input9='$input9', input10='$input10', input11='$input11', input12='$input12', input13='$input13',input14='$input14', input15='$input15', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', txt13='$txt13', txt14='$txt14', txt15='$txt15', txt16='$txt16', txt17='$txt17', txt18='$txt18', txt19='$txt19', txt20='$txt20', txt21='$txt21', txt22='$txt22', txt23='$txt23', txt24='$txt24', txt25='$txt25', txt26='$txt26', txt27='$txt27', txt28='$txt28', txt29='$txt29', txt30='$txt30'";

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