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
    <script src="https://kit.fontawesome.com/532ecf1f07.js" crossorigin="anonymous"></script>
    <title>Matriz de Risco</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>

    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>Matriz de Risco</h1>
    </div>
    <form action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">
        <input type="hidden" name="nome" value="<?php echo $nome ?>">

        <div class="container-flex">
            <h2 class="probabilidade">Probabilidade</h2>

            <div class=" container-principal">
                <div class="titulo">
                    <h3>Alto</h3>
                    <h3>Médio</h3>
                    <h3>Baixo</h3>
                </div>
                <div class="incio">
                    <h3>Risco Médio</h3>
                    <input style="border: 3px solid yellow" type=" text" name="input1" id="" value="<?php if (!empty($linha)) echo $linha['input1']; ?>">
                    <h3>Risco Baixo</h3>
                    <input type="text" name="input5" id="" value="<?php if (!empty($linha)) echo $linha['input5']; ?>">
                    <h3>Risco Mínimo</h3>
                    <input type="text" name="input7" id="" value="<?php if (!empty($linha)) echo $linha['input7']; ?>">
                    <h3>Baixa</h3>
                </div>
                <div class="inicio">
                    <h3>Risco Alto</h3>
                    <input style="border: 3px solid pink" type="text" name="input2" id="" value="<?php if (!empty($linha)) echo $linha['input2']; ?>">
                    <h3>Risco Médio</h3>
                    <input style="border: 3px solid yellow" type="text" name="input6" id="" value="<?php if (!empty($linha)) echo $linha['input6']; ?>">
                    <h3>Risco Baixo</h3>
                    <input type="text" name="input8" id="" value="<?php if (!empty($linha)) echo $linha['input8']; ?>">
                    <h3>Médio</h3>
                    <h2 class="impactos">Impacto</h2>

                </div>
                <div class="inicio">
                    <h3>Risco Máximo</h3>
                    <input style="border: 3px solid red" type="text" name="input3" id="" value="<?php if (!empty($linha)) echo $linha['input3']; ?>">
                    <h3>Risco Alto</h3>
                    <input style="border: 3px solid pink" type="text" name="input4" id="" value="<?php if (!empty($linha)) echo $linha['input4']; ?>">
                    <h3>Risco Médio</h3>
                    <input style="border: 3px solid yellow" type="text" name="input9" id="" value="<?php if (!empty($linha)) echo $linha['input9']; ?>">
                    <h3>Alto</h3>
                </div>
            </div>
            <div class="container-riscos">
                <h2>Riscos</h2>
                <label>1</label><textarea name="txt1" id="" cols="30" rows="4"><?php if (!empty($linha)) echo $linha['txt1']; ?></textarea>
                <label>2</label><textarea name="txt2" id="" cols="30" rows="4"><?php if (!empty($linha)) echo $linha['txt2']; ?></textarea>
                <label>3</label><textarea name="txt3" id="" cols="30" rows="4"><?php if (!empty($linha)) echo $linha['txt3']; ?></textarea>
                <label>4</label><textarea name="txt4" id="" cols="30" rows="4"><?php if (!empty($linha)) echo $linha['txt4']; ?></textarea>
                <label>5</label><textarea name="txt5" id="" cols="30" rows="4"><?php if (!empty($linha)) echo $linha['txt5']; ?></textarea>
                <label>6</label><textarea name="txt6" id="" cols="30" rows="4"><?php if (!empty($linha)) echo $linha['txt6']; ?></textarea>
                <label>7</label><textarea name="txt7" id="" cols="30" rows="4"><?php if (!empty($linha)) echo $linha['txt7']; ?></textarea>
                <label>8</label><textarea name="txt8" id="" cols="30" rows="4"><?php if (!empty($linha)) echo $linha['txt8']; ?></textarea>
                <label>9</label><textarea name="txt9" id="" cols="30" rows="4"><?php if (!empty($linha)) echo $linha['txt9']; ?></textarea>
                <label>10</label><textarea name="txt10" id="" cols="30" rows="4"><?php if (!empty($linha)) echo $linha['txt10']; ?></textarea>
            </div>
        </div>






        <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS" style="height: 30px; margin-left: 15px;">
    </form>
</body>
<script>
    if (window.innerHeight > window.innerWidth) {
        alert("Por favor, utilize no modo paisagem");
    }
</script>
</html>