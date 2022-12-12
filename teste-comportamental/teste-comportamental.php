<?php
require_once "../includes/connection.php";

$nome = $_REQUEST['nome'];
$empresa = $_REQUEST['empresa'];
$email = $_REQUEST['email'];
$aguia = $_REQUEST['aguia'];
$gato = $_REQUEST['gato'];
$tubarao = $_REQUEST['tubarao'];
$lobo = $_REQUEST['lobo'];

$sql = "INSERT INTO teste_comportamental1 (nome, empresa, email, aguia, gato, tubarao, lobo) VALUES ('$nome', '$empresa', '$email', $aguia, $gato, $tubarao, $lobo)";
if (mysqli_query($conn, $sql)) {
    echo "RESPOSTA GRAVADA COM SUCESSO!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
