<?php
include_once "../../includes/connection.php";
session_start();
$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];

if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../../login');
}

$data = $conn->query("SELECT * FROM ficha_planejamento WHERE usuario_id = $usuario_id");
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
    <title>Ficha Planejamento</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <form action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">

        <div class="container-header">
            <img src="../assets/img/logo-focustrade.jpeg" alt="">
            <h1 class="planejamento">Planejamento</h1>
        </div>
        <div class="container-subtitulo">
            <div class="container-inicio">
                <h3>Representante</h3>
                <input placeholder="Insira seu Nome" type="text" name="representante" id="">
            </div>
            <div class="txt-inicio">
                <h3>Grupo</h3>
                <input type="text" name="grupo" id="">
            </div>
        </div>
        <div class="container-principal">
            <div class="obj">
                <h3>Objetivo Revisado</h3>
                <textarea name="objetivo" id="" cols="90" rows="15" required><?php if (!empty($linha)) echo $linha['objetivo'] ?></textarea>
            </div>
            <div class="pauta">
                <h3>Pauta da Reunião</h3>
                <textarea name="pauta" id="" cols="90" rows="15" required><?php if (!empty($linha)) echo $linha['pauta'] ?></textarea>
            </div>
            <div class="proposta">
                <h3>Proposta/Ações para atingir o objetivo</h3>
                <textarea name="proposta" id="" cols="90" rows="15" required><?php if (!empty($linha)) echo $linha['proposta'] ?></textarea>
            </div>
        </div>
        <div class="buttom-enviar">
            <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS" style="height: 30px; margin-left: 15px;">
        </div>
    </form>
</body>

</html>