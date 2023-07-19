<?php
include_once "../includes/connection.php";

$usuario_id = $_REQUEST['usuario_id'];
// $nome = $_REQUEST['nome'];

$servicos = $_REQUEST['servicos'];
$segmento = $_REQUEST['segmento'];
$necessidade = $_REQUEST['necessidade'];
$verbos = $_REQUEST['verbos'];
$elementos = $_REQUEST['elementos'];



$data = $conn->query("SELECT * FROM puv WHERE usuario_id = $usuario_id");
$linha = mysqli_fetch_assoc($data);
if (!empty($linha)) {
    $sql = "UPDATE puv set usuario_id='$usuario_id',  servicos='$servicos', segmento='$segmento', necessidade='$necessidade', verbos='$verbos', elementos='$elementos' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO puv set usuario_id='$usuario_id', servicos='$servicos', segmento='$segmento', necessidade='$necessidade', verbos='$verbos', elementos='$elementos'";
}
if (mysqli_query($conn, $sql)) {
    header("location: ../testes");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
