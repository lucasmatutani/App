<?php
include_once "../includes/connection.php";

$usuario_id = $_REQUEST['usuario_id'];
$representante = $_REQUEST['representante'];
$nome = $_REQUEST['nome'];
$problemas = $_REQUEST['problemas'];
$oportunidade = $_REQUEST['oportunidade'];
$objetivo = $_REQUEST['objetivo'];


$data = $conn->query("SELECT * FROM diagnostico WHERE usuario_id = $usuario_id");
$linha = mysqli_fetch_assoc($data);
if (!empty($linha)) {
    $sql = "UPDATE diagnostico set usuario_id='$usuario_id', representante='$representante', nome='$nome', problema='$problemas', oportunidade='$oportunidade', objetivo='$objetivo' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO diagnostico set usuario_id= '$usuario_id', representante='$representante', nome='$nome', problema='$problemas', oportunidade='$oportunidade', objetivo='$objetivo'";
}

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
