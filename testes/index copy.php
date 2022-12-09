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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                        <a href="http://focustradeapp.com.br/teste-comportamental/">Comportamental</a>
                    <?php endif; ?>
                    <?php if ($_SESSION['representacional'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                        <a href="#">Representacional</a>
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
                    <?php if ($_SESSION['spin'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                        <a href="#">Spin</a>
                    <?php endif; ?>
                    <?php if ($_SESSION['metodo_cesar'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                        <a href="#">Método Cesar</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="second-column">
            <div class="dropdown">
                <div class="btn-teste">
                    <img src="../assets/img/btn-icon.png" class="img-btn-teste" alt="">
                    <a href="" class="btn btn2">Categoria de teste</a>
                </div>
                <div class="dropdown-content">
                    <?php if ($_SESSION['petscan'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                        <a href="#">Petscan do Cliente</a>
                    <?php endif; ?>
                    <?php if ($_SESSION['triade'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                        <a href="#">Tríade do Tempo</a>
                    <?php endif; ?>
                    <!-- <a href="#">Teste 3</a> -->
                </div>
            </div>

            <!-- <div class="dropdown" style="margin-top: 180px;">
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

        <!-- <div class="third-column">
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
        </div> -->

    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>