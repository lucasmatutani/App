<?php
include_once "../../includes/connection.php";


$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
$representante = $_REQUEST['representante'];
$grupo = $_REQUEST['grupo'];
$objetivo = $_REQUEST['objetivo'];
$pauta = $_REQUEST['pauta'];
$proposta = $_REQUEST['proposta'];




$data = $conn->query('SELECT * FROM ficha_planejamento');
$linha = mysqli_fetch_assoc($data);
if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
    $sql = "UPDATE ficha_planejamento set representante='$representante',  grupo='$grupo', objetivo='$objetivo', pauta='$pauta', proposta='$proposta' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO  ficha_planejamento set usuario_id='$usuario_id', representante='$representante',  grupo='$grupo', objetivo='$objetivo', pauta='$pauta', proposta='$proposta'";
}
if (mysqli_query($conn, $sql)) {
    header("location: ../../testes");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
