<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "includes/connection.php";

$usuario_id = $_REQUEST['usuario_id_id'];
$valor_total = $_POST['valor_total'];
$radio_total = $_POST['radio_total'];
$feedback1 = $_REQUEST['feedback1'];
$feedback2 = $_REQUEST['feedback2'];
$feedback3 = $_REQUEST['feedback3'];
$feedback4 = $_REQUEST['feedback4'];

if ($conn) {
    if (!empty($feedback1) || !empty($feedback2) || !empty($feedback3) || !empty($feedback4)) {
        $sql = "UPDATE teste_aida SET feedback1 = '$feedback1', feedback2 = '$feedback2', feedback3 = '$feedback3', feedback4 = '$feedback4', valor_total = $valor_total, radio_total = '$radio_total' WHERE usuario_id = $usuario_id";
    }
    if (mysqli_query($conn, $sql)) {
        echo "respostas gravadas com sucesso";
    } else {
        echo "Error" . $sql . mysqli_error($conn);
    }
};
mysqli_close($conn);
