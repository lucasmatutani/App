<?php
include_once "../includes/connection.php";


$usuario_id = $_REQUEST['usuario_id'];
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
    $sql = "UPDATE teste_conquiste_clientes set a='$a', b='$b', c='$c', d='$d', e='$e', f='$f', g='$g', h='$h', i='$i', j='$j' WHERE usuario_id= $usuario_id";
} else {
    $sql = "INSERT INTO teste_conquiste_clientes (a, b, c, d, e, f, g, h, i, j, usuario_id) VALUES ('$a', '$b', '$c', '$d', '$e','$f', '$g', '$h', '$i', '$j', '$usuario_id')";
}
if (mysqli_query($conn, $sql)) {
    echo "RESPOSTA GRAVADA COM SUCESSO!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
