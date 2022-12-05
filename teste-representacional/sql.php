<?php
include_once "../includes/connection.php";

$nome = $_REQUEST['nome'];
$empresa = $_REQUEST['empresa'];
$email = $_REQUEST['email'];
$A = $_REQUEST['A'];
$C = $_REQUEST['C'];
$V = $_REQUEST['V'];
$AD = $_REQUEST['AD'];

$sql = "INSERT INTO teste_representacional (A, C, V, AD) VALUES ($A, $C, $V, $AD)";
if (mysqli_query($conn, $sql)) {
    echo nl2br("RESPOSTA GRAVADA COM SUCESSO! \n \n SEUS RESULTADOS : \n A :" . $A . "\n C :" . $C . "\n V :" . $V . "\n AD :" . $AD);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
