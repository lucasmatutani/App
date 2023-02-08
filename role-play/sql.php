<?php
include_once "../includes/connection.php";

$grupo = $_REQUEST['grupo'];
$participante = $_REQUEST['participante'];
$rodada = $_REQUEST['rodada'];
$representante = $_REQUEST['representante'];
$cp1 = $_REQUEST['cp'];
$rap1 = $_REQUEST['rap'];
$abe1 = $_REQUEST['abe'];
$ad1 = $_REQUEST['ad'];
$neg1 = $_REQUEST['neg'];
$fc1 = $_REQUEST['fc'];
$rv1 = $_REQUEST['rv'];
$opv1 = $_REQUEST['opv'];
$ct1 = $_REQUEST['ct'];

$sql = "INSERT INTO role_play ( grupo, participante ,rodada, representante, cp, ap, rap, abe, ad, neg, fc, rv, opv, ct ) VALUES ('$grupo', '$participante',  '$rodada', '$representante', '$cp', '$ap', '$rap', '$abe', '$ad', '$neg', '$fc', '$rv', '$opv', '$ct' )";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
