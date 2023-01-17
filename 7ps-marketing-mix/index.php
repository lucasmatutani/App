<?php
include_once "../includes/connection.php";
session_start();
$usuario_id = $_SESSION['usuarioId'];
$nome = $_SESSION['usuarioNome'];

$data = $conn->query("SELECT * FROM 7ps_marketing_mix WHERE usuario_id = $usuario_id");
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
    <title>7 P's Marketing Mix</title>
</head>

<body>

    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>7 P's Marketing Mix</h1>
    </div>
    <form action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <input type="hidden" name="nome" value="<?php echo $nome ?>">

        <div class="container-principal">
            <h3>Produto</h3>
            <textarea name="txt1" id="" cols="70" rows="10"><?php if (!empty($linha)) echo $linha['txt1']; ?></textarea>
            <h3>Preço</h3>
            <textarea name="txt2" id="" cols="70" rows="10"><?php if (!empty($linha)) echo $linha['txt2']; ?></textarea>
            <h3>Praça</h3>
            <textarea name="txt3" id="" cols="70" rows="10"><?php if (!empty($linha)) echo $linha['txt3']; ?></textarea>
            <h3>Promoção</h3>
            <textarea name="txt4" id="" cols="70" rows="10"><?php if (!empty($linha)) echo $linha['txt4']; ?></textarea>
            <h3>Pessoas</h3>
            <textarea name="txt5" id="" cols="70" rows="10"><?php if (!empty($linha)) echo $linha['txt5']; ?></textarea>
            <h3>Evidencias Físicas</h3>
            <textarea name="txt6" id="" cols="70" rows="10"><?php if (!empty($linha)) echo $linha['txt6']; ?></textarea>
            <h3>Processo</h3>
            <textarea name="txt7" id="" cols="70" rows="10"><?php if (!empty($linha)) echo $linha['txt7']; ?></textarea>
        </div>
        <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS" style="height: 30px; margin-left: 15px;">
    </form>
</body>

</html>