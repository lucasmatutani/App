<?php
include_once "../includes/connection.php";

$usuario_id = $_REQUEST['usuario_id'];
$txt1 = $_REQUEST['txt1'];
$txt2 = $_REQUEST['txt2'];
$txt3 = $_REQUEST['txt3'];
$txt4 = $_REQUEST['txt4'];

$data = $conn->query("SELECT * FROM crencas WHERE usuario_id = $usuario_id");
$linha = mysqli_fetch_assoc($data);

if (!empty($linha)) {
    $sql = "UPDATE crencas set usuario_id='$usuario_id',  txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO crencas set usuario_id='$usuario_id', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4'";
}
if (mysqli_query($conn, $sql)) {
    header("location: ../testes");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
