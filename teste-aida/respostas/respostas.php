<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "includes/connection.php";

$usuario_id = $_REQUEST['usuario_id'];
$valor_total = $_POST['valor_total'];
$radio_total = $_POST['radio_total'];
$feedback1 = $_REQUEST['feedback1'];
$feedback2 = $_REQUEST['feedback2'];
$feedback3 = $_REQUEST['feedback3'];
$feedback4 = $_REQUEST['feedback4'];

$data = $conn->query("SELECT * FROM teste_aida WHERE usuario_id = $usuario_id");
echo $data;
exit();
if (!empty($data)) {
    $sql = "UPDATE teste_aida SET feedback1 = '$feedback1', feedback2 = '$feedback2', feedback3 = '$feedback3', feedback4 = '$feedback4', valor_total = $valor_total, radio_total = '$radio_total' WHERE usuario_id = $usuario_id";
}
else{
    $sql = "INSERT INTO teste_aida SET feedback1 = '$feedback1', feedback2 = '$feedback2', feedback3 = '$feedback3', feedback4 = '$feedback4', valor_total = $valor_total, radio_total = '$radio_total'";
}

if (mysqli_query($conn, $sql)) {
    header("location: ../role-play");
} else {
    echo "Error" . $sql . mysqli_error($conn);
}

mysqli_close($conn);
