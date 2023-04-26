<?php
include_once "./includes/connection.php";

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
$baixa1 = $_REQUEST['baixa1'];
$baixa2 = $_REQUEST['baixa2'];
$baixa3 = $_REQUEST['baixa3'];
$media1 = $_REQUEST['media1'];
$media2 = $_REQUEST['media2'];
$media3 = $_REQUEST['media3'];
$alta1 = $_REQUEST['alta1'];
$alta2 = $_REQUEST['alta2'];
$alta3 = $_REQUEST['alta3'];


$data = $conn->query('SELECT * FROM teste_flowchart');
$linha = mysqli_fetch_assoc($data);
if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
    $sql = "UPDATE teste_flowchart set usuario_id='$usuario_id', email='$email', baixa1='$baixa1', baixa2='$baixa2', baixa3='$baixa3', media1='$media1', media2='$media2', media3='$media3', alta1='$alta1', alta2='$alta2', alta3='$alta3' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO teste_flowchart set usuario_id= '$usuario_id', representante='$representante', nome='$nome', grupo='$grupo', problemas='$problemas', oportunidade='$oportunidade', objetivo='$objetivo'";
}

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
