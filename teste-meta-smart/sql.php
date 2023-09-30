<?php
include_once "../includes/connection.php";


$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];


$inicio1 = $_REQUEST['inicio1'];
$limite1 = $_REQUEST['limite1'];
$meses1 = $_REQUEST['meses1'];
$inicio2 = $_REQUEST['inicio2'];
$limite2 = $_REQUEST['limite2'];
$meses2 = $_REQUEST['meses2'];
$inicio3 = $_REQUEST['inicio3'];
$limite3 = $_REQUEST['limite3'];
$meses3 = $_REQUEST['meses3'];
$inicio4 = $_REQUEST['inicio4'];
$limite4 = $_REQUEST['limite4'];
$meses4 = $_REQUEST['meses4'];
$inicio5 = $_REQUEST['inicio5'];
$limite5 = $_REQUEST['limite5'];
$meses5 = $_REQUEST['meses5'];

$especifica1 = $_REQUEST['especifica1'];
$mensuravel1 = $_REQUEST['mensuravel1'];
$exito1 = $_REQUEST['exito1'];
$alcancavel1 = $_REQUEST['alcancavel1'];
$negocio1 = $_REQUEST['negocio1'];
$relevante1 = $_REQUEST['relevante1'];
$temporal1 = $_REQUEST['temporal1'];
$smart1 = $_REQUEST['smart1'];
$status1 = $_REQUEST['status1'];
$especifica2 = $_REQUEST['especifica2'];
$mensuravel2 = $_REQUEST['mensuravel2'];
$exito2 = $_REQUEST['exito2'];
$alcancavel2 = $_REQUEST['alcancavel2'];
$negocio2 = $_REQUEST['negocio2'];
$relevante2 = $_REQUEST['relevante2'];
$temporal2 = $_REQUEST['temporal2'];
$smart2 = $_REQUEST['smart2'];
$status2 = $_REQUEST['status2'];
$especifica3 = $_REQUEST['especifica3'];
$mensuravel3 = $_REQUEST['mensuravel3'];
$exito3 = $_REQUEST['exito3'];
$alcancavel3 = $_REQUEST['alcancavel3'];
$negocio3 = $_REQUEST['negocio3'];
$relevante3 = $_REQUEST['relevante3'];
$temporal3 = $_REQUEST['temporal3'];
$smart3 = $_REQUEST['smart3'];
$status3 = $_REQUEST['status3'];
$especifica4 = $_REQUEST['especifica4'];
$mensuravel4 = $_REQUEST['mensuravel4'];
$exito4 = $_REQUEST['exito4'];
$alcancavel4 = $_REQUEST['alcancavel4'];
$negocio4 = $_REQUEST['negocio4'];
$relevante4 = $_REQUEST['relevante4'];
$temporal4 = $_REQUEST['temporal4'];
$smart4 = $_REQUEST['smart4'];
$status4 = $_REQUEST['status4'];
$especifica5 = $_REQUEST['especifica5'];
$mensuravel5 = $_REQUEST['mensuravel5'];
$exito5 = $_REQUEST['exito5'];
$alcancavel5 = $_REQUEST['alcancavel5'];
$negocio5 = $_REQUEST['negocio5'];
$relevante5 = $_REQUEST['relevante5'];
$temporal5 = $_REQUEST['temporal5'];
$smart5 = $_REQUEST['smart5'];
$status5 = $_REQUEST['status5'];

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
$txt20 = $_REQUEST['tx0t20'];
$txt21 = $_REQUEST['txt21'];
$txt22 = $_REQUEST['txt22'];
$txt23 = $_REQUEST['txt23'];
$txt24 = $_REQUEST['txt24'];
$txt25 = $_REQUEST['txt25'];
$txt26 = $_REQUEST['txt26'];
$txt27 = $_REQUEST['txt27'];
$txt28 = $_REQUEST['txt28'];
$txt29 = $_REQUEST['txt29'];





$sql = "INSERT INTO meta_smart set  usuario_id=$usuario_id, email='$email', inicio1=$inicio1, limite1=$limite1, meses1=$meses1, inicio2=$inicio2, limite2=$limite2, meses2=$meses2, inicio3=$inicio3, limite3=$limite3, meses3=$meses3, inicio4=$inicio4, limite4=$limite4, meses4=$meses4, inicio5=$inicio5, limite5=$limite5, meses5=$meses5, especifica1='$especifica1', mensuravel1='$mensuravel1', exito1='$exito1', alcancavel1='$alcancavel1', negocio1='$negocio1', relevante1='$relevante1', temporal1='$temporal1', smart1='$smart1', status1='$status1', especifica2='$especifica2', mensuravel2='$mensuravel2', exito2='$exito2', alcancavel2='$alcancavel2', negocio2='$negocio2', relevante2='$relevante2', temporal2='$temporal2', smart2='$smart2', status2='$status2', especifica3='$especifica3', mensuravel3='$mensuravel3', exito3='$exito3', alcancavel3='$alcancavel3', negocio3='$negocio3', relevante3='$relevante3', temporal3='$temporal3', smart3='$smart3', status3='$status3', especifica4='$especifica4', mensuravel4='$mensuravel4', exito4='$exito4', alcancavel4='$alcancavel4', negocio4='$negocio4', relevante4='$relevante4', temporal4='$temporal4', smart4='$smart4', status4='$status4', especifica5='$especifica5', mensuravel5='$mensuravel5', exito5='$exito5', alcancavel5='$alcancavel5', negocio5='$negocio5', relevante5='$relevante5', temporal5='$temporal5', smart5='$smart5', status5='$status5', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', txt13='$txt13', txt14='$txt14', txt15='$txt15', txt16='$txt16', txt17='$txt17', txt18='$txt18', txt19='$txt19', txt20='$txt20', txt21='$txt21', txt22='$txt22', txt23='$txt23', txt24='$txt24', txt25='$txt25', txt26='$txt26', txt27='$txt27', txt28='$txt28', txt29='$txt29'";
echo $sql;
exit();
if (mysqli_query($conn, $sql)) {
    header("location: ../testes");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
