<?php
include_once "./includes/connection.php";

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
$fraco = $_REQUEST['fraco'];
$forte = $_REQUEST['forte'];
$ameaca = $_REQUEST['ameaca'];
$oportunidade = $_REQUEST['oportunidade'];
$pred = $_REQUEST['pred'];
$direcao = $_REQUEST['direcao'];


$data = $conn->query("SELECT * FROM matriz_predominio WHERE usuario_id = $usuario_id");
$linha = mysqli_fetch_assoc($data);
if (!empty($linha)) {
    $sql = "UPDATE matriz_predominio set usuario_id='$usuario_id', email='$email', fraco='$fraco', forte='$forte', ameca='$ameca', oportunidade='$oportunidade', pred='$pred', direcao='$direcao' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO matriz_predominio set usuario_id= '$usuario_id', representante='$representante', nome='$nome', grupo='$grupo', problemas='$problemas', oportunidade='$oportunidade', objetivo='$objetivo'";
}

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
