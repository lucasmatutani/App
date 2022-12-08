<?php
include_once "../includes/connection.php";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$empresa = $_REQUEST['empresa'];
$senha = $_REQUEST['senha'];
$grupo = $_REQUEST['grupo'];
$representacional = $_REQUEST['representacional'];
$comportamental = $_REQUEST['comportamental'];
$conquiste_clientes = $_REQUEST['conquiste_clientes'];
$aida = $_REQUEST['aida'];
$spin = $_REQUEST['spin'];
$metodo_cesar = $_REQUEST['metodo-cesar'];
$petscan = $_REQUEST['petscan'];
$triade = $_REQUEST['triade'];

$sql = "INSERT INTO usuarios (nome, email, empresa, senha, grupo, representacional, comportamental, conquiste_clientes, aida, spin, metodo_cesar, petscan, triade) VALUES ('$nome', '$email', '$empresa', '$senha',  '$grupo', '$representacional', '$comportamental', '$conquiste_clientes', '$aida', '$spin', '$metodo_cesar', '$petscan', '$triade')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    echo "RESPOSTA GRAVADA COM SUCESSO!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
