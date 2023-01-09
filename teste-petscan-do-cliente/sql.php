<?php
include_once "../includes/connection.php";
include_once "../vendor/envio.php";

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
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
$txt65 = $_REQUEST['txt65'];
$txt66 = $_REQUEST['txt66'];
$txt67 = $_REQUEST['txt67'];
$txt68 = $_REQUEST['txt68'];
$txt69 = $_REQUEST['txt69'];
$txt70 = $_REQUEST['txt70'];
$txt71 = $_REQUEST['txt71'];
$txt72 = $_REQUEST['txt72'];
$txt73 = $_REQUEST['txt73'];
$txt74 = $_REQUEST['txt74'];
$txt75 = $_REQUEST['txt75'];
$txt76 = $_REQUEST['txt76'];
$txt77 = $_REQUEST['txt77'];
$txt78 = $_REQUEST['txt78'];
$txt79 = $_REQUEST['txt79'];
$txt80 = $_REQUEST['txt80'];
$txt81 = $_REQUEST['txt81'];
$txt82 = $_REQUEST['txt82'];
$txt83 = $_REQUEST['txt83'];
$txt84 = $_REQUEST['txt84'];
$txt85 = $_REQUEST['txt85'];
$txt86 = $_REQUEST['txt86'];
$txt87 = $_REQUEST['txt87'];
$txt88 = $_REQUEST['txt88'];
$txt89 = $_REQUEST['txt89'];
$txt90 = $_REQUEST['txt90'];
$txt91 = $_REQUEST['txt91'];
$txt92 = $_REQUEST['txt92'];
$txt93 = $_REQUEST['txt93'];
$txt94 = $_REQUEST['txt94'];
$txt95 = $_REQUEST['txt95'];
$txt96 = $_REQUEST['txt96'];
$txt97 = $_REQUEST['txt97'];
$txt98 = $_REQUEST['txt98'];
$txt99 = $_REQUEST['txt99'];
$txt100 = $_REQUEST['txt100'];
$txt101 = $_REQUEST['txt101'];
$txt102 = $_REQUEST['txt102'];
$txt103 = $_REQUEST['txt103'];
$txt104 = $_REQUEST['txt104'];
$txt105 = $_REQUEST['txt105'];
$txt106 = $_REQUEST['txt106'];
$txt107 = $_REQUEST['txt107'];
$txt108 = $_REQUEST['txt108'];
$txt109 = $_REQUEST['txt109'];
$txt110 = $_REQUEST['txt110'];
$txt111 = $_REQUEST['txt111'];
$txt112 = $_REQUEST['txt112'];
$txt113 = $_REQUEST['txt113'];
$txt114 = $_REQUEST['txt114'];
$txt115 = $_REQUEST['txt115'];
$txt116 = $_REQUEST['txt116'];
$txt117 = $_REQUEST['txt117'];
$txt118 = $_REQUEST['txt118'];
$txt119 = $_REQUEST['txt119'];
$txt120 = $_REQUEST['txt120'];
$txt121 = $_REQUEST['txt121'];
$txt122 = $_REQUEST['txt122'];
$txt123 = $_REQUEST['txt123'];
$txt124 = $_REQUEST['txt124'];
$txt125 = $_REQUEST['txt125'];
$txt126 = $_REQUEST['txt126'];
$txt127 = $_REQUEST['txt127'];
$txt128 = $_REQUEST['txt128'];





$data = $conn->query('SELECT * FROM teste_petscan_do_cliente');
$linha = mysqli_fetch_assoc($data);
if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
    $sql = "UPDATE teste_petscan_do_cliente set usuario_id='$usuario_id', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', txt13='$txt13', txt14='$txt14', txt15='$txt15', txt16='$txt16', txt17='$txt17', txt18='$txt18', txt19='$txt19', txt20='$txt20', txt21='$txt21', txt22='$txt22', txt23='$txt23', txt24='$txt24', txt25='$txt25', txt26='$txt26', txt27='$txt27', txt28='$txt28', txt29='$txt29', txt30='$txt30', txt31='$txt31', txt32='$txt32', txt33='$txt33', txt34='$txt34', txt35='$txt35', txt36='$txt36', txt37='$txt37', txt38='$txt38', txt39='$txt39', txt40='$txt40', txt41='$txt41', txt42='$txt42', txt43='$txt43', txt44='$txt44', txt45='$txt45', txt46='$txt46', txt47='$txt47', txt48='$txt48', txt49='$txt49', txt50='$txt50', txt51='$txt51', txt52='$txt52', txt53='$txt53', txt54='$txt54', txt55='$txt55', txt56='$txt56', txt57='$txt57', txt58='$txt58', txt59='$txt59', txt60='$txt60', txt61='$txt61', txt62='$txt62', txt63='$txt63', txt64='$txt64', txt65='$txt65', txt66='$txt66', txt67='$txt67', txt68='$txt68', txt69='$txt69', txt70='$txt70', txt71='$txt71', txt72='$txt72', txt73='$txt73', txt74='$txt74', txt75='$txt75', txt76='$txt76', txt77='$txt77', txt78='$txt78', txt79='$txt79', txt80='$txt80', txt81='$txt81', txt82='$txt82', txt83='$txt83', txt84='$txt84', txt85='$txt85', txt86='$txt86', txt87='$txt87', txt88='$txt88', txt89='$txt89', txt90='$txt90', txt91='$txt91', txt92='$txt92', txt93='$txt93', txt94='$txt94', txt95='$txt95', txt96='$txt96', txt97='$txt97', txt98='$txt98', txt99='$txt99', txt100='$txt100', txt101='$txt101', txt102='$txt102', txt103='$txt103', txt104='$txt104', txt105='$txt105', txt106='$txt106', txt107='$txt107', txt108='$txt108', txt109='$txt109', txt110='$txt110', txt111='$txt111', txt112='$txt112', txt113='$txt113', txt114='$txt114', txt115='$txt115', txt116='$txt116', txt117='$txt117', txt118='$txt118', txt119='$txt119', txt120='$txt120', txt121='$txt121', txt122='$txt122',  txt123='$txt123', txt124='$txt124', txt125='$txt125', txt126='$txt126', txt127='$txt127', txt128='$txt128' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO teste_petscan_do_cliente set usuario_id='$usuario_id', txt1='$txt1', txt2='$txt2', txt3='$txt3', txt4='$txt4', txt5='$txt5', txt6='$txt6', txt7='$txt7', txt8='$txt8', txt9='$txt9', txt10='$txt10', txt11='$txt11', txt12='$txt12', txt13='$txt13', txt14='$txt14', txt15='$txt15', txt16='$txt16', txt17='$txt17', txt18='$txt18', txt19='$txt19', txt20='$txt20', txt21='$txt21', txt22='$txt22', txt23='$txt23', txt24='$txt24', txt25='$txt25', txt26='$txt26', txt27='$txt27', txt28='$txt28', txt29='$txt29', txt30='$txt30', txt31='$txt31', txt32='$txt32', txt33='$txt33', txt34='$txt34', txt35='$txt35', txt36='$txt36', txt37='$txt37', txt38='$txt38', txt39='$txt39', txt40='$txt40', txt41='$txt41', txt42='$txt42', txt43='$txt43', txt44='$txt44', txt45='$txt45', txt46='$txt46', txt47='$txt47', txt48='$txt48', txt49='$txt49', txt50='$txt50', txt51='$txt51', txt52='$txt52', txt53='$txt53', txt54='$txt54', txt55='$txt55', txt56='$txt56', txt57='$txt57', txt58='$txt58', txt59='$txt59', txt60='$txt60', txt61='$txt61', txt62='$txt62', txt63='$txt63', txt64='$txt64', txt65='$txt65', txt66='$txt66', txt67='$txt67', txt68='$txt68', txt69='$txt69', txt70='$txt70', txt71='$txt71', txt72='$txt72', txt73='$txt73', txt74='$txt74', txt75='$txt75', txt76='$txt76', txt77='$txt77', txt78='$txt78', txt79='$txt79', txt80='$txt80', txt81='$txt81', txt82='$txt82', txt83='$txt83', txt84='$txt84', txt85='$txt85', txt86='$txt86', txt87='$txt87', txt88='$txt88', txt89='$txt89', txt90='$txt90', txt91='$txt91', txt92='$txt92', txt93='$txt93', txt94='$txt94', txt95='$txt95', txt96='$txt96', txt97='$txt97', txt98='$txt98', txt99='$txt99', txt100='$txt100', txt101='$txt101', txt102='$txt102', txt103='$txt103', txt104='$txt104', txt105='$txt105', txt106='$txt106', txt107='$txt107', txt108='$txt108', txt109='$txt109', txt110='$txt110', txt111='$txt111', txt112='$txt112', txt113='$txt113', txt114='$txt114', txt115='$txt115', txt116='$txt116', txt117='$txt117', txt118='$txt118', txt119='$txt119', txt120='$txt120', txt121='$txt121', txt122='$txt122',  txt123='$txt123', txt124='$txt124', txt125='$txt125', txt126='$txt126', txt127='$txt127', txt128='$txt128'";
}
if (mysqli_query($conn, $sql)) {
    echo "RESPOSTA GRAVADA COM SUCESSO!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (!empty($email)) {
    $mail->addAddress($email);
    $mail->Body = "Você pode ver suas repostas através do link: </br> http://focustradeapp.com.br/testes/index.php";
}
$mail->send();
mysqli_close($conn);
