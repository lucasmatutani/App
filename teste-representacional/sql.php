<?php
include_once "../includes/connection.php";

$usuario_id = $_REQUEST['usuario_id'];
echo $usuario_id;
$A = $_REQUEST['A'];
$C = $_REQUEST['C'];
$V = $_REQUEST['V'];
$AD = $_REQUEST['AD'];

$sql = "INSERT INTO teste_representacional (A, C, V, AD, usuario_id) VALUES ($A, $C, $V, $AD, $usuario_id)";
if (mysqli_query($conn, $sql)) {
    echo nl2br("RESPOSTA GRAVADA COM SUCESSO! \n \n SEUS RESULTADOS : \n A :" . $A . "\n C :" . $C . "\n V :" . $V . "\n AD :" . $AD);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
