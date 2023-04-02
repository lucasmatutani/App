<?php
include_once "../includes/connection.php";
include_once "../vendor/envio.php";

$resultado1 = $_POST['resultado1'];
$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
$objetivo = $_REQUEST['objetivo'];
$consultor = $_REQUEST['consultor'];
$setor = $_REQUEST['setor'];
$elaboracao = $_REQUEST['elaboracao'];
$atualizacao = $_REQUEST['atualizacao'];
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
$txt22 = $_REQUEST['txt22'];
$txt23 = $_REQUEST['txt23'];
$txt24 = $_REQUEST['txt24'];
$txt25 = $_REQUEST['txt25'];
$txt26 = $_REQUEST['txt26'];
$txt27 = $_REQUEST['txt27'];
$txt28 = $_REQUEST['txt28'];
$txt29 = $_REQUEST['txt29'];
$txt30 = $_REQUEST['txt30'];
$txt31 = $_REQUEST['txt31'];
$txt32 = $_REQUEST['txt32'];
$txt33 = $_REQUEST['txt33'];
$txt34 = $_REQUEST['txt34'];
$txt35 = $_REQUEST['txt35'];
$txt36 = $_REQUEST['txt36'];
$txt37 = $_REQUEST['txt37'];
$txt38 = $_REQUEST['txt38'];
$txt39 = $_REQUEST['txt39'];
$txt40 = $_REQUEST['txt40'];
$txt41 = $_REQUEST['txt41'];
$txt42 = $_REQUEST['txt42'];
$txt43 = $_REQUEST['txt43'];
$txt44 = $_REQUEST['txt44'];
$txt45 = $_REQUEST['txt45'];
$txt46 = $_REQUEST['txt46'];
$txt47 = $_REQUEST['txt47'];
$txt48 = $_REQUEST['txt48'];
$txt49 = $_REQUEST['txt49'];
$txt50 = $_REQUEST['txt50'];
$txt51 = $_REQUEST['txt51'];
$txt52 = $_REQUEST['txt52'];
$txt53 = $_REQUEST['txt53'];
$txt54 = $_REQUEST['txt54'];
$txt55 = $_REQUEST['txt55'];
$txt56 = $_REQUEST['txt56'];
$txt57 = $_REQUEST['txt57'];
$txt58 = $_REQUEST['txt58'];
$txt59 = $_REQUEST['txt59'];
$txt60 = $_REQUEST['txt60'];
$txt61 = $_REQUEST['txt61'];
$txt62 = $_REQUEST['txt62'];
$txt63 = $_REQUEST['txt63'];
$txt64 = $_REQUEST['txt64'];

echo $resultado;
echo $txt1;
exit;

$data = $conn->query('SELECT * FROM plano_de_acao_5w2h');
$linha = mysqli_fetch_assoc($data);
if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
    $sql = "UPDATE plano_de_acao_5w2h set usuario_id='$usuario_id', objetivo='$objetivo', consultor='$consultor', setor='$setor', elaboracao='$elaboracao', atualizacao='$atualizacao', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', txt13='$txt13', txt14='$txt14', txt15='$txt15', txt16='$txt16', txt17='$txt17', txt18='$txt18', txt19='$txt19', txt20='$txt20', txt21='$txt21', txt22='$txt22', txt23='$txt23', txt24='$txt24', txt25='$txt25', txt26='$txt26', txt27='$txt27', txt28='$txt28', txt29='$txt29', txt30='$txt30', txt31='$txt31', txt32='$txt32', txt33='$txt33', txt34='$txt34', txt35='$txt35', txt36='$txt36', txt37='$txt37', txt38='$txt38', txt39='$txt39', txt40='$txt40', txt41='$txt41', txt42='$txt42', txt43='$txt43', txt44='$txt44', txt45='$txt45', txt46='$txt46', txt47='$txt47', txt48='$txt48', txt49='$txt49', txt50='$txt50', txt51='$txt51', txt52='$txt52', txt53='$txt53', txt54='$txt54', txt55='$txt55', txt56='$txt56', txt57='$txt57', txt58='$txt58', txt59='$txt59', txt60='$txt60', txt61='$txt61', txt62='$txt62', txt63='$txt63', txt64='$txt64' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO plano_de_acao_5w2h set usuario_id='$usuario_id', objetivo='$objetivo', consultor='$consultor', setor='$setor', elaboracao='$elaboracao', atualizacao='$atualizacao', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', txt13='$txt13', txt14='$txt14', txt15='$txt15', txt16='$txt16', txt17='$txt17', txt18='$txt18', txt19='$txt19', txt20='$txt20', txt21='$txt21', txt22='$txt22', txt23='$txt23', txt24='$txt24', txt25='$txt25', txt26='$txt26', txt27='$txt27', txt28='$txt28', txt29='$txt29', txt30='$txt30', txt31='$txt31', txt32='$txt32', txt33='$txt33', txt34='$txt34', txt35='$txt35', txt36='$txt36', txt37='$txt37', txt38='$txt38', txt39='$txt39', txt40='$txt40', txt41='$txt41', txt42='$txt42', txt43='$txt43', txt44='$txt44', txt45='$txt45', txt46='$txt46', txt47='$txt47', txt48='$txt48', txt49='$txt49', txt50='$txt50', txt51='$txt51', txt52='$txt52', txt53='$txt53', txt54='$txt54', txt55='$txt55', txt56='$txt56', txt57='$txt57', txt58='$txt58', txt59='$txt59', txt60='$txt60', txt61='$txt61', txt62='$txt62', txt63='$txt63', txt64='$txt64'";
}
if (mysqli_query($conn, $sql)) {
    header("location: ../testes");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (!empty($email)) {
    $mail->addAddress($email);
    $mail->Body = "Você pode ver suas repostas através do link: </br> http://focustradeapp.com.br/testes/index.php";
}
$mail->send();

mysqli_close($conn);
