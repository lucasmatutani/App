<?php
include_once "../includes/connection.php";

$usuario_id = $_REQUEST['usuario_id'];
// $nome = $_REQUEST['nome'];

$txt1 = $_REQUEST['txt1'];
$txt2 = $_REQUEST['txt2'];
$txt3 = $_REQUEST['txt3'];
$txt4 = $_REQUEST['txt4'];
$txt5 = $_REQUEST['txt5'];
$txt6 = $_REQUEST['txt6'];
$txt7 = $_REQUEST['txt7'];
$email = $_REQUEST['email'];

$data = $conn->query("SELECT * FROM 7ps_marketing_mix WHERE usuario_id = $usuario_id");
$linha = mysqli_fetch_assoc($data);
if (!empty($linha)) {
    $sql = "UPDATE 7ps_marketing_mix set usuario_id='$usuario_id',  txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4',
    txt5='$txt5', txt6='$txt6', txt7='$txt7', email='$email' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO 7ps_marketing_mix set usuario_id='$usuario_id', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4',txt5='$txt5', txt6='$txt6', txt7='$txt7', email='$email'";
}
if (mysqli_query($conn, $sql)) {
    header("location: ../testes");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
