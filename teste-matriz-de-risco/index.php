<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}
$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];

$data = $conn->query("SELECT * FROM teste_matriz_de_risco WHERE usuario_id = $usuario_id");
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
    <title>Matriz de Risco</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>

    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>Matriz de Risco</h1>
    </div>
    <form action="./sql.php" method="POST">
        <div class=" container-principal">
            <div class="h3">
                <h3>Risco Médio</h3>
                <h3>Risco Alto</h3>
                <h3>Risco Máximo</h3>
            </div>
            <div class="container-input">
                <input type="number" name="input1" id="" <?php if (!empty($linha)) echo $linha['input1']; ?>>
                <input type="number" name="input2" id=""><?php if (!empty($linha)) echo $linha['input2']; ?>>
                <input type="number" name="input3" id=""><?php if (!empty($linha)) echo $linha['input3']; ?>>
            </div>

            <div class="h3">
                <h3>Risco Baixo</h3>
                <h3>Risco Médio</h3>
                <h3>Risco Alto</h3>
            </div>

            <div class="container-input">
                <input type="number" name="input4" id="" <?php if (!empty($linha)) echo $linha['input4']; ?>>
                <input type="number" name="input5" id="" <?php if (!empty($linha)) echo $linha['input5']; ?>>
                <input type="number" name="input6" id="" <?php if (!empty($linha)) echo $linha['input6']; ?>>
            </div>

            <div class="h3">
                <h3>Risco Mínimo</h3>
                <h3>Risco Baixo</h3>
                <h3>Risco Médio</h3>
            </div>

            <div class="container-input">
                <input type="number" name="input7" id="" <?php if (!empty($linha)) echo $linha['input7']; ?>>
                <input type="number" name="input8" id="" <?php if (!empty($linha)) echo $linha['input8']; ?>>
                <input type="number" name="input9" id="" <?php if (!empty($linha)) echo $linha['input9']; ?>>
            </div>
        </div>

        <!-- <div class="probabilidade">
        <h3>Probabilidade</h3>
        <h3>Baixa</h3>
        <h3>Médio</h3>
        <h3>Alto</h3>
    </div> -->

        <div class="impacto">
            <h3>Baixa</h3>
            <h3>Médio</h3>
            <h3>Alto</h3>
        </div>
        <h2 class="impacto">Impacto</h2>
        <div class="container-riscos">
            <h2>Riscos</h2>
            <h4>1</h4><textarea name="txt1" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt1']; ?></textarea>
            <h4>2</h4><textarea name="txt2" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt2']; ?></textarea>
            <h4>3</h4><textarea name="txt3" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt3']; ?></textarea>
            <h4>4</h4><textarea name="txt4" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt4']; ?></textarea>
            <h4>5</h4><textarea name="txt5" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt5']; ?></textarea>
            <h4>6</h4><textarea name="txt6" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt6']; ?></textarea>
            <h4>7</h4><textarea name="txt7" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt7']; ?></textarea>
            <h4>8</h4><textarea name="txt8" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt8']; ?></textarea>
            <h4>9</h4><textarea name="txt9" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt9']; ?></textarea>
            <h4>10</h4><textarea name="txt10" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt10']; ?></textarea>
        </div>

        <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS" style="height: 30px; margin-left: 15px;">
    </form>
</body>

</html>