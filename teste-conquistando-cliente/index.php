<?php
include_once "../includes/connection.php";
session_start();
$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];

if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}

$data = $conn->query("SELECT * FROM teste_conquiste_clientes WHERE usuario_id = $usuario_id");
if (!empty($data)) {
    $linha = mysqli_fetch_assoc($data);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style.css">
    <title>Conquistando Clientes</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-logo">
        <img src="../assets/img/logo-focustrade.jpg" alt="">
    </div>

    <div class="container-titulo">
        <h1>Conquistando Clientes</h1>

        <h3>Em dupla anotem as melhores práticas feitas para conquistar os clientes e quais outras ações podem ser
            realizadas</h3>
    </div>

    <form class="container-perguntas" action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $usuario_id ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">

        <h4>O que eu faço para conquistar meus clientes</h4>
        <div class="container-1a5">
            <div>
                <label for="">1-</label>
                <input type="text" name="a" id="" value="<?php if (!empty($linha)) echo $linha['a']; ?>">
            </div>

            <div>
                <label for="">2-</label>
                <input type="text" name="b" id="" value="<?php if (!empty($linha)) echo $linha['b']; ?>">
            </div>

            <div>
                <label for="">3-</label>
                <input type="text" name="c" id="" value="<?php if (!empty($linha)) echo $linha['c']; ?>">
            </div>

            <div>
                <label for="">4-</label>
                <input type="text" name="d" id="" value="<?php if (!empty($linha)) echo $linha['d']; ?>">
            </div>

            <div>
                <label for="">5-</label>
                <input type="text" name="e" id="" value="<?php if (!empty($linha)) echo $linha['e']; ?>">
            </div>

        </div>

        <h4>O que posso fazer para conquistar ainda mais meus clientes</h4>
        <div class="container-5a10">

            <div>
                <label for="">1-</label>
                <input type="text" name="f" id="" value="<?php if (!empty($linha)) echo $linha['f']; ?>">
            </div>

            <div>
                <label for="">2-</label>
                <input type="text" name="g" id="" value="<?php if (!empty($linha)) echo $linha['g']; ?>">
            </div>

            <div>
                <label for="">3-</label>
                <input type="text" name="h" id="" value="<?php if (!empty($linha)) echo $linha['h']; ?>">
            </div>

            <div>
                <label for="">4-</label>
                <input type="text" name="i" id="" value="<?php if (!empty($linha)) echo $linha['i']; ?>">
            </div>

            <div>
                <label for="">5-</label>
                <input type="text" name="j" id="" value="<?php if (!empty($linha)) echo $linha['j']; ?>">
            </div>

        </div>
        <div class="container-cadastro">
            <!-- <div class="nome">
                <label for="">Nome e Sobrenome</label>
                <input type="text" name="nome" id="" require>

                <label for="">Empresa</label>
                <input type="text" name="empresa" id="" require>

                <label for="">Email</label>
                <input type="text" name="email" id="" require>

            </div> -->
            <input type="submit" class="botao" value="Enviar Respostas">
        </div>

        <div class="container-botao">
        </div>

    </form>



</body>

</html>