<?php
include_once "../includes/connection.php";
session_start();
$usuario_id = $_SESSION['usuarioId'];
$nome = $_SESSION['usuarioNome'];

$data = $conn->query("SELECT * FROM puv WHERE usuario_id = $usuario_id");
if (!empty($data)) {
    $linha = mysqli_fetch_assoc($data);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PUV</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>PUV</h1>
    </div>
    <form action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <input type="hidden" name="nome" value="<?php echo $nome ?>">

        <div class="container-principal">
            <h3>Serviços com Diferenciais</h3>
            <textarea name="txt1" id="" cols="90" rows="10"><?php if (!empty($linha)) echo $linha['txt1']; ?></textarea>
            <h3>Segmento do Cliente</h3>
            <textarea name="txt2" id="" cols="90" rows="10"><?php if (!empty($linha)) echo $linha['txt2']; ?></textarea>
            <h3>Necessidade do Cliente</h3>
            <textarea name="txt3" id="" cols="90" rows="10"><?php if (!empty($linha)) echo $linha['txt3']; ?></textarea>
            <h3>Verbos de Aumento - <br> Aumentar, Possibilitar - Ganhos</h3>
            <textarea name="txt4" id="" cols="90" rows="10"><?php if (!empty($linha)) echo $linha['txt4']; ?></textarea>
            <h3>Elementos de Diferenciação e Autoridade</h3>
            <textarea name="txt5" id="" cols="90" rows="10"><?php if (!empty($linha)) echo $linha['txt5']; ?></textarea>
        </div>
        <div class="buttom-enviar">
            <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS" style="height: 30px; margin-left: 15px;">
        </div>
    </form>
</body>

</html>