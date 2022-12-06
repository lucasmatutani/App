<?php
include_once "../includes/connection.php";

$case = $_REQUEST['case'];
$confianca = $_REQUEST['confianca'];
$empatia = $_REQUEST['empatia'];
$seguranca = $_REQUEST['seguranca'];
$aparencia = $_REQUEST['aparencia'];
$resposta = $_REQUEST['resposta'];

$sql = "INSERT INTO teste_metodo_cesar (caso, confianca, empatia, seguranca, aparencia, resposta) VALUES ('$case', '$confianca', '$empatia', '$seguranca', '$aparencia', '$resposta')";

if (mysqli_query($conn, $sql)) {
    echo "RESPOSTA GRAVADA COM SUCESSO!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
