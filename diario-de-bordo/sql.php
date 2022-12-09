<?php
include_once "../includes/connection.php";

$usuario_id = $_REQUEST['usuario_id'];

$perg1 = $_REQUEST['perg1'];
$perg2 = $_REQUEST['perg2'];
$perg3 = $_REQUEST['perg3'];
$perg4 = $_REQUEST['perg4'];
$perg5 = $_REQUEST['perg5'];
$perg6 = $_REQUEST['perg6'];
$perg7 = $_REQUEST['perg7'];
$perg8 = $_REQUEST['perg8'];
$perg9 = $_REQUEST['perg9'];
$perg10 = $_REQUEST['perg10'];
$perg11 = $_REQUEST['perg11'];
$perg12 = $_REQUEST['perg12'];
$perg13 = $_REQUEST['perg13'];
$perg14 = $_REQUEST['perg14'];
$perg15 = $_REQUEST['perg15'];




$data = $conn->query('SELECT * FROM diario_de_bordo');
$linha = mysqli_fetch_assoc($data);
if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
    $sql = "UPDATE diario_de_bordo set perg1='$perg1', perg2='$perg2', perg3='$perg3', perg4='$perg4', perg5='$perg5', perg6='$perg6', perg7='$perg7', perg8='$perg8', perg9='$perg9', perg10='$perg10', perg11='$perg11', perg12='$perg12', perg13='$perg13', perg14='$perg14', perg15='$perg15' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO diario_de_bordo set usuario_id='$usuario_id', perg1='$perg1', perg2='$perg2', perg3='$perg3', perg4='$perg4', perg5='$perg5', perg6='$perg6', perg7='$perg7', perg8='$perg8', perg9='$perg9', perg10='$perg10', perg11='$perg11', perg12='$perg12', perg13='$perg13', perg14='$perg14', perg15='$perg15'";
}
if (mysqli_query($conn, $sql)) {
    echo "RESPOSTA GRAVADA COM SUCESSO!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
