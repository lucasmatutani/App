<?php
include_once "../includes/connection.php";
session_start();
$usuario_id = $_SESSION['usuarioId'];
$nome = $_SESSION['usuarioNome'];

$data = $conn->query("SELECT * FROM puv WHERE usuario_id = $usuario_id");
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>PUV</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>PUV</h1>
    </div>
    <form action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <input type="hidden" name="nome" value="<?php echo $nome ?>">

        <div class="container-principal">
            <h3 class="mt-5">Serviços com Diferenciais</h3>
            <textarea name="servicos" id="" class="col-10 mt-3" rows="5"><?php if (!empty($linha)) echo $linha['servicos']; ?></textarea>
            <h3 class="mt-5">Segmento do Cliente</h3>
            <textarea name="segmento" id="" class="col-10 mt-3" rows="5"><?php if (!empty($linha)) echo $linha['segmento']; ?></textarea>
            <h3 class="mt-5">Necessidade do Cliente</h3>
            <textarea name="necessidade" id="" class="col-10 mt-3" rows="5"><?php if (!empty($linha)) echo $linha['necessidade']; ?></textarea>
            <h3 class="mt-5">Verbos de Aumento - <br> Aumentar, Possibilitar - Ganhos</h3>
            <textarea name="verbos" id="" class="col-10 mt-3" rows="5"><?php if (!empty($linha)) echo $linha['verbos']; ?></textarea>
            <h3 class="mt-5">Elementos de Diferenciação e Autoridade</h3>
            <textarea name="elementos" id="" class="col-10 mt-3" rows="5"><?php if (!empty($linha)) echo $linha['elementos']; ?></textarea>
        </div>
        <div class="buttom-enviar mb-3">
            <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS">
        </div>
    </form>
</body>

</html>