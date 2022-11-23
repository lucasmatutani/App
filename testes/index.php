<?php
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    echo "SEM ACESSO PARA ESSA PÁGINA, FAÇA O LOGIN!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/532ecf1f07.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <title>Testes</title>
</head>

<body style="margin: 0; font-family: 'Ubuntu', sans-serif;">

    <a class="btn-voltar" href="../index.php"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-logo">
        <img class="img-logo" src="../assets/img/logo-sem-fundo-azul.png" alt="">
    </div>
    <div class="container-testes">

        <div class="first-column">
            <div class="dropdown">
                <div class="btn-teste">
                    <img src="../assets/img/btn-icon.png" class="img-btn-teste" alt="">
                    <a href="" class="btn btn2">Categoria de teste</a>
                </div>
                <div class="dropdown-content">
                    <?php if ($_SESSION['comportamental'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                        <a href="#">Teste <br> Comportamental</a>
                    <?php endif; ?>
                    <?php if ($_SESSION['representacional'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                        <a href="#">Teste <br> Representacional</a>
                    <?php endif; ?>
                    <?php if ($_SESSION['aida'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                        <a href="#">Aida</a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="dropdown" style="margin-top: 180px;">
                <div class="btn-teste">
                    <img src="../assets/img/btn-icon.png" class="img-btn-teste" alt="">
                    <a href="" class="btn btn2">Categoria de teste</a>
                </div>
                <div class="dropdown-content">
                    <?php if ($_SESSION['conquiste_clientes'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                        <a href="#">Conquiste <br> Clientes</a>
                    <?php endif; ?>
                    <a href="#">Teste 2</a>
                    <a href="#">Teste 3</a>
                </div>
            </div>
        </div>

        <!-- <div class="second-column">
            <div class="dropdown">
                <div class="btn-teste">
                    <img src="../assets/img/btn-icon.png" class="img-btn-teste" alt="">
                    <a href="" class="btn btn2">Categoria de teste</a>
                </div>
                <div class="dropdown-content">
                    <a href="#">Teste 1</a>
                    <a href="#">Teste 2</a>
                    <a href="#">Teste 3</a>
                </div>
            </div>

            <div class="dropdown" style="margin-top: 180px;">
                <div class="btn-teste">
                    <img src="../assets/img/btn-icon.png" class="img-btn-teste" alt="">
                    <a href="" class="btn btn2">Categoria de teste</a>
                </div>
                <div class="dropdown-content">
                    <a href="#">Teste 1</a>
                    <a href="#">Teste 2</a>
                    <a href="#">Teste 3</a>
                </div>
            </div>
        </div>

        <div class="third-column">
            <div class="dropdown">
                <div class="btn-teste">
                    <img src="../assets/img/btn-icon.png" class="img-btn-teste" alt="">
                    <a href="" class="btn btn2">Categoria de teste</a>
                </div>
                <div class="dropdown-content">
                    <a href="#">Teste 1</a>
                    <a href="#">Teste 2</a>
                    <a href="#">Teste 3</a>
                </div>
            </div>

            <div class="dropdown" style="margin-top: 180px;">
                <div class="btn-teste">
                    <img src="../assets/img/btn-icon.png" class="img-btn-teste" alt="">
                    <a href="" class="btn btn2">Categoria de teste</a>
                </div>
                <div class="dropdown-content">
                    <a href="#">Teste 1</a>
                    <a href="#">Teste 2</a>
                    <a href="#">Teste 3</a>
                </div>
            </div> -->
    </div>

    </div>

</body>
<!-- 
<footer>
    © 2022 Focus Trade Consultoria e Desenvolvimento – Todos os direitos reservados. <br>
    Rua Bom Pastor 2224 sala 1002 – Ipiranga – São Paulo/SP
</footer> -->


</html>