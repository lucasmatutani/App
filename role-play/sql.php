<?php
include_once "../includes/connection.php";

$grupo = $_REQUEST['grupo'];
$participante = $_REQUEST['participante'];
$rodada = $_REQUEST['rodada'];
$representante = $_REQUEST['representante'];
$cp = $_REQUEST['cp'];
$rap = $_REQUEST['rap'];
$abe = $_REQUEST['abe'];
$ad = $_REQUEST['ad'];
$neg = $_REQUEST['neg'];
$fc = $_REQUEST['fc'];
$rv = $_REQUEST['rv'];
$opv = $_REQUEST['opv'];
$ct = $_REQUEST['ct'];

$sql = "INSERT INTO role_play ( grupo, participante ,rodada, representante, cp, ap, rap, abe, ad, neg, fc, rv, opv, ct ) VALUES ('$grupo', '$participante',  '$rodada', '$representante', '$cp', '$ap', '$rap', '$abe', '$ad', '$neg', '$fc', '$rv', '$opv', '$ct' )";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
