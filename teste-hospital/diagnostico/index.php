<?php
include_once "../../includes/connection.php";
session_start();
$usuario_id = $_SESSION['usuarioId'];
$nome = $_SESSION['usuario_nome'];
$grupo = $_SESSION['grupo'];

if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../../login');
}

$data = $conn->query("SELECT * FROM diagnostico WHERE usuario_id = $usuario_id");
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
    <title>Diagnostico</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <form action="../sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <input type="hidden" name="nome" value="<?php echo $nome ?>">
        <input type="hidden" name="grupo" value="<?php echo $grupo ?>">

        <div class="container-header">
            <img src="../assets/img/logo-focustrade.jpeg" alt="">
            <h1 class="diagnostico">Diagnóstico</h1>
        </div>
        <div class="container-subtitulo">
            <div class="container-inicio">
                <h3>Vendedor</h3>
                <input placeholder="Insira seu Nome" type="text" name="representante" id="" value="<?php if (!empty($linha)) echo $linha['representante'] ?>">
            </div>
            <div class="txt-inicio">
                <h3>Grupo <?php echo $grupo ?></h3>
            </div>
        </div>
        <div class="container-principal">
            <div class="problemas">
                <h3>Problemas</h3>
                <textarea name="problemas" id="" cols="90" rows="15" required><?php if (!empty($linha)) echo $linha['problemas'] ?></textarea>
            </div>
            <div class="oportunidade">
                <h3>Oportunidades</h3>
                <textarea name="oportunidade" id="" cols="90" rows="15" required><?php if (!empty($linha)) echo $linha['oportunidade'] ?></textarea>
            </div>
            <div class="objetivo">
                <h3>Objetivos</h3>
                <textarea name="objetivo" id="" cols="90" rows="15" required><?php if (!empty($linha)) echo $linha['objetivo'] ?></textarea>
            </div>
        </div>
        <div class="buttom-enviar">
            <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS" style="height: 30px; margin-left: 15px;">
        </div>
    </form>
</body>

</html>