<?php
include_once "../includes/connection.php";

$representante = $_REQUEST['representante'];
$grupo = $_REQUEST['grupo'];
$problemas = $_REQUEST['problemas'];
$oportunidade = $_REQUEST['oportunidade'];
$objetivo = $_REQUEST['objetivo'];


$sql = "INSERT INTO diagnostico (representante, grupo, problemas, oportunidade, objetivo) VALUES ('$representante', '$grupo', '$problemas', '$oportunidade', '$objetivo')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
