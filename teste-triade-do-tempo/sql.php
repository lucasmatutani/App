<?php
include_once "../includes/connection.php";

$usuario_id = $_REQUEST['usuario_id'];
$importancia = $_REQUEST['importancia'];
$urgencia = $_REQUEST['urgencia'];
$circunstancia = $_REQUEST['circunstancia'];

$sql = "INSERT INTO teste_triade_tempo (importancia, urgencia, circunstancia, usuario_id) VALUES ($importancia, $urgencia, $circunstancia, $usuario_id)";

if (mysqli_query($conn, $sql)) {
    echo "RESPOSTA GRAVADA COM SUCESSO!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
