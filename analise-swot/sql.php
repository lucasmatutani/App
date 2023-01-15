<?php
include_once "../includes/connection.php";

$txt1 = $_REQUEST['txt1'];
$txt2 = $_REQUEST['txt2'];
$txt3 = $_REQUEST['txt3'];
$txt4 = $_REQUEST['txt4'];


$data = $conn->query('SELECT * FROM analise_swot');
$linha = mysqli_fetch_assoc($data);
if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
    $sql = "UPDATE analise_swot set usuario_id='$usuario_id', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO analise_swot set usuario_id='$usuario_id', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4'";
}
if (mysqli_query($conn, $sql)) {
    echo "RESPOSTA GRAVADA COM SUCESSO!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
