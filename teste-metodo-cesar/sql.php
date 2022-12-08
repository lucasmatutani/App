<?php
include_once "../includes/connection.php";

$usuario_id = $_REQUEST['usuario_id'];
$case = $_REQUEST['case'];
$confianca = $_REQUEST['confianca'];
$empatia = $_REQUEST['empatia'];
$seguranca = $_REQUEST['seguranca'];
$aparencia = $_REQUEST['aparencia'];
$resposta = $_REQUEST['resposta'];
$observacoes = $_REQUEST['observacoes'];

$data = $conn->query('SELECT * FROM teste_metodo_cesar');
$linha = mysqli_fetch_assoc($data);
if ($linha['usuario_id'] == $usuario_id) {
    $sql = "UPDATE teste_metodo_cesar set caso='$case', confianca='$confianca', empatia='$empatia', seguranca='$seguranca', aparencia='$aparencia', resposta='$resposta', observacoes='$observacoes' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO teste_metodo_cesar (caso, confianca, empatia, seguranca, aparencia, resposta, observacoes, usuario_id) VALUES ('$case', '$confianca', '$empatia', '$seguranca', '$aparencia', '$resposta', '$observacoes' , '$usuario_id')";
}

if (mysqli_query($conn, $sql)) {
    echo "RESPOSTA GRAVADA COM SUCESSO!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
