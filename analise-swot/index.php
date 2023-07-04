<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}
$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];

$data = $conn->query("SELECT * FROM analise_swot WHERE usuario_id = $usuario_id");
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
    <title>Análise Swot</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>Análise Swot</h1>
    </div>

    <form action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">

        <h2 class="internos">Aspectos Internos</h2>
        <div class="container-perguntas">

            <div></div>
            <div class="titulo">
                <h2>Contribui para o crescimento <br> da empresa:</h2>
                <h3>S: Pontos fortes</h3>
                <textarea name="pontos_fortes" id="" cols="70" rows="20"><?php if (!empty($linha)) echo $linha['pontos_fortes']; ?></textarea>
            </div>

            <div class="titulo">
                <h2>Dificulta o crescimento da <br>empresa:</h2>
                <h3>W: Pontos fracos</h3>
                <textarea name="pontos_fracos" id="" cols="70" rows="20"><?php if (!empty($linha)) echo $linha['pontos_fracos']; ?></textarea>
            </div>

            <div></div>
            <div></div>
            <div class="titulo">
                <h3>O: Oportunidades</h3>
                <textarea name="oportunidades" id="" cols="70" rows="20"><?php if (!empty($linha)) echo $linha['oportunidades']; ?></textarea>
            </div>

            <div class="titulo">
                <h3>T: Ameaças</h3>
                <textarea name="ameacas" id="" cols="70" rows="20"><?php if (!empty($linha)) echo $linha['ameacas']; ?></textarea>
            </div>
            <div></div>
        </div>
        <h2 class="externos">Aspectos Externos</h2>

        <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS" style="height: 30px; margin-left: 15px;">
    </form>

</body>
<script>
    if (window.innerHeight > window.innerWidth) {
        alert("Por favor, utilize no modo paisagem");
    }
</script>

</html>