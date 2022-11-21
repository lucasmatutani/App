<?php
include_once  "../includes/connection.php";

$nm1 = $_REQUEST['nm1'];
$txt1 = $_REQUEST['txt1'];
$txt2 = $_REQUEST['txt2'];
$txt3 = $_REQUEST['txt3'];
$txt4 = $_REQUEST['txt4'];
$nm2 = $_REQUEST['nm2'];
$txt5 = $_REQUEST['txt5'];
$txt6 = $_REQUEST['txt6'];
$txt7 = $_REQUEST['txt7'];
$txt8 = $_REQUEST['txt8'];
$nm3 = $_REQUEST['nm3'];
$txt9 = $_REQUEST['txt9'];
$txt10 = $_REQUEST['txt10'];
$txt11 = $_REQUEST['txt11'];
$txt12 = $_REQUEST['txt12'];
$nm4 = $_REQUEST['nm4'];
$txt13 = $_REQUEST['txt13'];
$txt14 = $_REQUEST['txt14'];
$txt15 = $_REQUEST['txt15'];
$txt16 = $_REQUEST['txt16'];

echo ($nm1 . $txt1 . $txt2 . $txt3 . $txt4 . $nm2 . $txt5 . $txt6 . $txt7 . $txt8 . $nm3 . $txt9 . $txt10 . $txt11 . $txt12 . $nm4 . $txt13 . $txt14 . $txt15 . $txt16);
exit;

$sql = "INSERT INTO teste_aida (nm1, txt1, txt2, txt3, txt4, nm2, txt5, txt6, txt7, txt8, nm3, txt9, txt10, txt11, txt12, nm4, txt13, txt14, txt15, txt16) VALUES ('$nm1', '$txt1', '$txt2', '$txt3', '$txt4', '$nm2', '$txt5', '$txt6', '$txt7', '$txt8', '$nm3', '$txt9', '$txt10', '$txt11', '$txt12', '$nm4' '$txt13', '$txt14', '$txt15', '$txt16')";

if (mysqli_query($conn, $sql)) {
    echo "respostas gravadas com sucesso";
} else {
    echo "Error" . $sql . mysqli_error($conn);
}
mysqli_close($conn);
