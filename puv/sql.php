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


$data = $conn->query("SELECT * FROM puv WHERE usuario_id = $usuario_id");
$linha = mysqli_fetch_assoc($data);
if (!empty($linha)) {
    $sql = "UPDATE puv set usuario_id='$usuario_id',  txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4',
    txt5='$txt5' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO puv set usuario_id='$usuario_id', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4',txt5='$txt5'";
}
if (mysqli_query($conn, $sql)) {
    header("location: ../testes");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
