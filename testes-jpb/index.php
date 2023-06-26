<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Case</title>
</head>

<body>
    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
    </div>
    <div class="container-principal">
        <a class="button" href="http://focustradeapp.com.br/testes-jpb/switch.php?pag=cenario" class="teste">Cenário</a>
        <a class="button" href="http://focustradeapp.com.br/testes-jpb/switch.php?pag=fechamento" class="teste">Fechamento e Compromisso</a>
        <a class="button" href="http://focustradeapp.com.br/testes-jpb/switch.php?pag=implicacao" class="teste">Implicação</a>
        <a class="button" href="http://focustradeapp.com.br/testes-jpb/switch.php?pag=objetivo" class="teste">Objetivo</a>
        <a class="button" href="http://focustradeapp.com.br/testes-jpb/switch.php?pag=plano-tatico" class="teste">Plano Tático</a>
        <a class="button" href="http://focustradeapp.com.br/testes-jpb/switch.php?pag=problematizacao" class="teste">Problematização e Oportunidades</a>
    </div>
</body>

</html>
<style>
    .container-header {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .container-principal {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
    }

    .container-principal a {
        text-decoration: none;
        font-size: 1.5em;
        color: black;
        font-weight: bold;
    }

    .button {
        background-color: #ff8c00;
        padding: 20px 40px;
        border-radius: 500px;
        margin-bottom: 50px;
    }
</style>