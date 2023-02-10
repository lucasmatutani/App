<?php
include_once "../includes/connection.php";

$representante = $_REQUEST['representante'];
$grupo = $_REQUEST['grupo'];
$objetivo = $_REQUEST['objetivo'];
$pauta = $_REQUEST['pauta'];
$proposta = $_REQUEST['proposta'];


$sql = "INSERT INTO usuarios (representante, grupo, objetivo, pauta, proposta) VALUES ('$representante', '$grupo', '$objetivo', '$pauta', '$proposta',)";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    echo "RESPOSTA GRAVADA COM SUCESSO!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
