<?php
include_once "../includes/connection.php";

$grupo = $_REQUEST['grupo'];
$rodada = $_REQUEST['rodada'];
$representante = $_REQUEST['representante'];
$cp1 = $_REQUEST['cp1'];
$cp2 = $_REQUEST['cp2'];
$cp3 = $_REQUEST['cp3'];
$ap1 = $_REQUEST['ap1'];
$ap2 = $_REQUEST['ap2'];
$ap3 = $_REQUEST['ap3'];
$rap1 = $_REQUEST['rap1'];
$rap2 = $_REQUEST['rap2'];
$rap3 = $_REQUEST['rap3'];
$abe1 = $_REQUEST['abe1'];
$abe2 = $_REQUEST['abe2'];
$abe3 = $_REQUEST['abe3'];
$ad1 = $_REQUEST['ad1'];
$ad2 = $_REQUEST['ad2'];
$ad3 = $_REQUEST['ad3'];
$neg1 = $_REQUEST['neg1'];
$neg2 = $_REQUEST['neg2'];
$neg3 = $_REQUEST['neg3'];
$fc1 = $_REQUEST['fc1'];
$fc2 = $_REQUEST['fc2'];
$fc3 = $_REQUEST['fc3'];
$rv1 = $_REQUEST['rv1'];
$rv2 = $_REQUEST['rv2'];
$rv3 = $_REQUEST['rv3'];
$opv1 = $_REQUEST['opv1'];
$opv2 = $_REQUEST['opv2'];
$opv3 = $_REQUEST['opv3'];
$ct1 = $_REQUEST['ct1'];
$ct2 = $_REQUEST['ct2'];
$ct3 = $_REQUEST['ct3'];


$sql = "INSERT INTO role_play ( grupo, rodada, representante, cp1, cp2, cp3, ap1, ap2, ap3, rap1, rap2, rap3, abe1, abe2, abe3, ad1, ad2, ad3, neg1, neg2, neg3, fc1, fc2, fc3, rv1, rv2, rv3, opv1, opv2, opv3, ct1, ct2, ct3) VALUES ('$grupo', '$rodada', '$representante', '$cp1', '$cp2', '$cp3', '$ap1', '$ap2', '$ap3', '$rap1', '$rap2', '$rap3', '$abe1', '$abe2', '$abe3', '$ad1', '$ad2', '$ad3', '$neg1', '$neg2', '$neg3', '$fc1', '$fc2', '$fc3', '$rv1', '$rv2', '$rv3', '$opv1', '$opv2', '$opv3', '$ct1', '$ct2', '$ct3')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
