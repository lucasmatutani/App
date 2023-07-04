<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}

$data = $conn->query("SELECT * FROM 7ps_marketing_mix ORDER BY email ASC");

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

        <div class="container-principal container">
            <select class="form-select col-5 mt-5" name="usuarios" id="usuarios" style="font-size: 2em;">
                <option>Selecione um usuário</option>
                <?php if (!empty($data)) { ?>
                    <?php while ($linha = mysqli_fetch_assoc($data)) { ?>
                        <option value="<?php echo $linha['usuario_id'] ?>"><?php echo $linha['email'] ?></option>
                    <?php } ?>
                <?php } ?>
            </select>
            <h3 class="mt-5">Produto</h3>
            <textarea readonly name="txt1" class="form-control mt-3" id=""></textarea>
            <h3 class="mt-5">Preço</h3>
            <textarea readonly name="txt2" class="form-control mt-3" id=""></textarea>
            <h3 class="mt-5">Praça</h3>
            <textarea readonly name="txt3" class="form-control mt-3" id=""></textarea>
            <h3 class="mt-5">Promoção</h3>
            <textarea readonly name="txt4" class="form-control mt-3" id=""></textarea>
            <h3 class="mt-5">Pessoas</h3>
            <textarea readonly name="txt5" class="form-control mt-3" id=""></textarea>
            <h3 class="mt-5">Evidências Físicas</h3>
            <textarea readonly name="txt6" class="form-control mt-3" id=""></textarea>
            <h3 class="mt-5">Processo</h3>
            <textarea readonly name="txt7" class="form-control mt-3 mb-5" id=""></textarea>
        </div>
    </form>
</body>

<script>
    if (window.innerHeight > window.innerWidth) {
        alert("Por favor, utilize no modo paisagem");
    }
</script>
</html>
