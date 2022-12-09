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
        <div class="btns-testes">
            <button onclick="mostrarTestes()" class="btn-testes">TESTES</button>
            <button onclick="mostrarRespostas()" class="btn-respostas">RESPOSTAS</button>
        </div>
        <div id="card-testes" class="card-testes">
            <div class="card-titulo-testes">
                <h1>TESTES</h1>
            </div>
            <?php if ($_SESSION['comportamental'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-comportamental/">Comportamental</a>
            <?php endif; ?>

            <?php if ($_SESSION['representacional'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-representacional/">Representacional</a>
            <?php endif; ?>

            <?php if ($_SESSION['aida'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-aida/">Aida</a>
            <?php endif; ?>

            <?php if ($_SESSION['conquiste_clientes'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-conquistando-cliente/">Conquiste Clientes</a>
            <?php endif; ?>

            <?php if ($_SESSION['spin'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-spin/">Spin</a>
            <?php endif; ?>

            <?php if ($_SESSION['metodo_cesar'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-metodo-cesar/">Método Cesar</a>
            <?php endif; ?>

            <?php if ($_SESSION['petscan'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-petscan-do-cliente/">Petscan do Cliente</a>
            <?php endif; ?>

            <?php if ($_SESSION['triade'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-triade-do-tempo/">Tríade do Tempo</a>
            <?php endif; ?>

            <?php if ($_SESSION['diario_de_bordo'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/diario_de_bordo/">Diário de bordo</a>
            <?php endif; ?>

            <?php if ($_SESSION['plano_de_acao'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/plano_de_acao_5w2h/">Plano de ação 5W2H</a>
            <?php endif; ?>
        </div>

        <div id="card-respostas" class="card-respostas" style="display: none;">
            <div class="card-titulo-respostas">
                <h1>RESPOSTAS</h1>
            </div>
            <?php $sql = ""; ?>
        </div>
    </div>

</body>

</html>

<script>
    function mostrarTestes() {
        var cardTestes = document.getElementById("card-testes");
        var cardRespostas = document.getElementById("card-respostas");

        cardTestes.style.display = 'flex';
        cardRespostas.style.display = 'none';
    }

    function mostrarRespostas() {
        var cardTestes = document.getElementById("card-testes");
        var cardRespostas = document.getElementById("card-respostas");

        cardRespostas.style.display = 'flex';
        cardTestes.style.display = 'none';
    }
</script>