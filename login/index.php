<?php
//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais. 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/532ecf1f07.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <title>Login Focus Trade</title>
</head>

<body style="margin: 0; font-family: 'Ubuntu', sans-serif;">
    <a class="btn-voltar" href="../index.php"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-login">
        <img class="img-logo" src="../assets/img/logo-branco.png" alt="">
        <form method="POST" name="login" action="valida.php" class="container-form">
            <div class="card">
                <div class="container-email">
                    <input type="text" name="email" placeholder="Email" style="font-size: 0.8em;">
                </div>
                <div class="container-senha">
                    <input type="password" name="senha" placeholder="Senha" style="font-size: 0.8em;">
                </div>
                <div class="container-entrar">
                    <a href="javascript:login.submit()" class="btn btn2">Entrar</a>
                </div>
                <p style="display: hidden; text-align: center; color: red; font-size: 0.6em;">
                    <?php
                    //Recuperando o valor da variável global, os erro de login.
                    if (isset($_SESSION['loginErro'])) {
                        echo $_SESSION['loginErro'];
                        unset($_SESSION['loginErro']);
                    }
                    ?>
                    <?php
                    //Recuperando o valor da variável global, deslogado com sucesso.
                    if (isset($_SESSION['logindeslogado'])) {
                        echo $_SESSION['logindeslogado'];
                        unset($_SESSION['logindeslogado']);
                    }
                    ?>
                </p>
            </div>
        </form>
    </div>
</body>


</html>