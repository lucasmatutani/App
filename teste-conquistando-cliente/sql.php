<?php
include_once "../includes/connection.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "./vendor/envio.php";
echo $_SERVER['DOCUMENT_ROOT'];

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];
$d = $_REQUEST['d'];
$e = $_REQUEST['e'];
$f = $_REQUEST['f'];
$g = $_REQUEST['g'];
$h = $_REQUEST['h'];
$i = $_REQUEST['i'];
$j = $_REQUEST['j'];


$data = $conn->query('SELECT * FROM teste_conquiste_clientes');
$linha = mysqli_fetch_assoc($data);
if (!empty($linha) && $linha['usuario_id'] == $usuario_id) {
    $sql = "UPDATE teste_conquiste_clientes set email='$email', a='$a', b='$b', c='$c', d='$d', e='$e', f='$f', g='$g', h='$h', i='$i', j='$j' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO teste_conquiste_clientes (email, a, b, c, d, e, f, g, h, i, j, usuario_id) VALUES ('$email', '$a', '$b', '$c', '$d', '$e','$f', '$g', '$h', '$i', '$j', '$usuario_id')";
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
