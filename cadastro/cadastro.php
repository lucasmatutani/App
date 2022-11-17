<?php

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$empresa = $_REQUEST['empresa'];
$senha = $_REQUEST['senha'];
$grupo = $_REQUEST['grupo'];

$sql = "INSERT INTO usuarios (nome, email, empresa, senha, grupo) VALUES ('$nome', '$email', '$empresa', '$senha',  '$grupo')";
if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    echo "RESPOSTA GRAVADA COM SUCESSO!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
