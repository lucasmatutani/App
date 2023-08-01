<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}

$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];

$data = $conn->query("SELECT * FROM 7ps_marketing_mix WHERE usuario_id = $usuario_id");
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
    <title>7 P's Marketing Mix</title>
</head>

<body>

    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>7 P's Marketing Mix</h1>
    </div>
    <form action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">

        <div class="container-principal container">
            <h3 class="mt-5">Produto</h3>
            <textarea name="produto" class="form-control mt-3" id=""><?php if (!empty($linha)) echo $linha['produto']; ?></textarea>
            <h3 class="mt-5">Preço</h3>
            <textarea name="preco" class="form-control mt-3" id=""><?php if (!empty($linha)) echo $linha['preco']; ?></textarea>
            <h3 class="mt-5">Praça</h3>
            <textarea name="praca" class="form-control mt-3" id=""><?php if (!empty($linha)) echo $linha['praca']; ?></textarea>
            <h3 class="mt-5">Promoção</h3>
            <textarea name="promocao" class="form-control mt-3" id=""><?php if (!empty($linha)) echo $linha['promocao']; ?></textarea>
            <h3 class="mt-5">Pessoas</h3>
            <textarea name="pessoas" class="form-control mt-3" id=""><?php if (!empty($linha)) echo $linha['pessoas']; ?></textarea>
            <h3 class="mt-5">Evidências Físicas</h3>
            <textarea name="evidencias" class="form-control mt-3" id=""><?php if (!empty($linha)) echo $linha['evidencias']; ?></textarea>
            <h3 class="mt-5">Processo</h3>
            <textarea name="processo" class="form-control mt-3" id=""><?php if (!empty($linha)) echo $linha['processo']; ?></textarea>
        </div>
        <div class="buttom-enviar mb-3">
            <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS">
        </div>
    </form>
</body>

<script>
    if (window.innerHeight > window.innerWidth) {
        alert("Por favor, utilize no modo paisagem");
    }
</script>
</html>
