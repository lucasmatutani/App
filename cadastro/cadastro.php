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

$sql = "INSERT INTO usuarios (nome, email, empresa, senha, grupo, comportamental, representacional, aida, conquiste_clientes) VALUES ('$nome', '$email', '$empresa', '$senha',  '$grupo', '$representacional', '$comportamental', '$conquiste_clientes', '$aida')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    echo "RESPOSTA GRAVADA COM SUCESSO!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
