<?php
include_once "../includes/connection.php";

$grupo = $_REQUEST['grupo'];
$participante = $_REQUEST['participante'];
$rodada = $_REQUEST['rodada'];
$representante = $_REQUEST['representante'];

$ap = $_REQUEST['ap'];
$rap = $_REQUEST['rap'];
$ad = $_REQUEST['ad'];
$fd = $_REQUEST['fd'];
$bo = $_REQUEST['bo'];
$tf = $_REQUEST['tf'];
$ct = $_REQUEST['ct'];

$sql = "INSERT INTO role_play ( grupo, participante ,rodada, representante, ap, rap, ad, fd, bo, tf, ct ) VALUES ('$grupo', '$participante',  '$rodada', '$representante', '$ap', '$rap', '$ad', '$fd', '$bo', '$tf', '$ct' )";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
