<?php
include_once "../includes/connection.php";

$usuario_id = $_REQUEST['usuario_id'];
$grupo = $_REQUEST['grupo'];
$avaliador = $_REQUEST['avaliador'];
$caso = $_REQUEST['caso'];
$txt1 = $_REQUEST['txt1'];
$txt2 = $_REQUEST['txt2'];
$txt3 = $_REQUEST['txt3'];
$txt4 = $_REQUEST['txt4'];
$txt5 = $_REQUEST['txt5'];
$txt6 = $_REQUEST['txt6'];
$txt7 = $_REQUEST['txt7'];
$txt8 = $_REQUEST['txt8'];
$txt9 = $_REQUEST['txt9'];
$txt10 = $_REQUEST['txt10'];
$txt11 = $_REQUEST['txt11'];
$txt12 = $_REQUEST['txt12'];
$txt13 = $_REQUEST['txt13'];
$txt14 = $_REQUEST['txt14'];
$txt15 = $_REQUEST['txt15'];
$txt16 = $_REQUEST['txt16'];
$txt17 = $_REQUEST['txt17'];
$txt18 = $_REQUEST['txt18'];
$txt19 = $_REQUEST['txt19'];
$txt20 = $_REQUEST['txt20'];
$txt21 = $_REQUEST['txt21'];

$data = $conn->query('SELECT * FROM teste_spin');
$linha = mysqli_fetch_assoc($data);
if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
    $sql = "UPDATE teste_spin set grupo='$grupo', avaliador='$avaliador', caso='$caso', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', txt13='$txt13', txt14='$txt14', txt15='$txt15', txt16='$txt16', txt17='$txt17', txt18='$txt18', txt19='$txt19', txt20='$txt20', txt21='$txt21' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO teste_spin set usuario_id='$usuario_id', grupo='$grupo', avaliador='$avaliador', caso='$caso', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', txt13='$txt13', txt14='$txt14', txt15='$txt15', txt16='$txt16', txt17='$txt17', txt18='$txt18', txt19='$txt19', txt20='$txt20', txt21='$txt21'";
}
if (mysqli_query($conn, $sql)) {
    echo "RESPOSTA GRAVADA COM SUCESSO!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
