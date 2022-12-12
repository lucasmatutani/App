<?php
require_once "../includes/connection.php";

$usuario_id = $_REQUEST['usuario_id'];
$aguia = $_REQUEST['aguia'];
$gato = $_REQUEST['gato'];
$tubarao = $_REQUEST['tubarao'];
$lobo = $_REQUEST['lobo'];

$sql = "INSERT INTO teste_comportamental1 (aguia, gato, tubarao, lobo, usuario_id) VALUES ($aguia, $gato, $tubarao, $lobo, $usuario_id)";
if (mysqli_query($conn, $sql)) {
    echo "RESPOSTA GRAVADA COM SUCESSO!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
