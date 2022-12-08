<?php
include_once "../includes/connection.php";


$importancia = $_REQUEST['importancia'];
$urgencia = $_REQUEST['urgencia'];
$circunstancia = $_REQUEST['circunstancia'];

$sql = "INSERT INTO teste_triade_tempo (importancia, urgencia, circunstancia) VALUES ($importancia, $urgencia, $circunstancia)";

if (mysqli_query($conn, $sql)) {
    echo "RESPOSTA GRAVADA COM SUCESSO!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
