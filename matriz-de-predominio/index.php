<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}
$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];
$nome = $_SESSION['usuarioNome'];

$data = $conn->query("SELECT * FROM matriz_predominio WHERE usuario_id = $usuario_id");
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
    <title>Matriz de Predomínio</title>

    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>Matriz de Predomínio</h1>
        <h3>Predomínio Estratégico</h3>
    </div>

    <!-- inicio table -->
    <form action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">
        <input type="hidden" name="nome" value="<?php echo $nome ?>">

        <div class="container-principal mt-5">
            <div class="container-table">
                <table class="table table-striped table-sm" border="1" style="width: 35vw;">
                    <tr>
                        <th>Tipo</th>
                        <th>Total</th>
                    </tr>

                    <tr>
                        <td>Ponto Fraco</td>
                        <td><textarea name="fraco" cols="40" rows="1"><?php if (!empty($linha)) echo $linha['fraco']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Ponto Forte</td>
                        <td><textarea name="forte" cols="40" rows="1"><?php if (!empty($linha)) echo $linha['forte']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Ameaça</td>
                        <td><textarea name="ameaca" cols="40" rows="1"><?php if (!empty($linha)) echo $linha['ameaca']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Oportunidade</td>
                        <td><textarea name="oportunidade" cols="40" rows="1"><?php if (!empty($linha)) echo $linha['oportunidade']; ?></textarea></td>
                    </tr>
                </table>
                <div class="predominio">
                    <textarea placeholder="Predomínio" name="pred" cols="40" rows="7"><?php if (!empty($linha)) echo $linha['pred']; ?></textarea>
                    <textarea placeholder="Direção" name="direcao" cols="40" rows="7"><?php if (!empty($linha)) echo $linha['direcao']; ?></textarea>
                </div>
            </div>
            <div class="container-predominio">
                <img src="../assets/img/img-matriz-predominio.jpg" alt="Responsive image">
            </div>
        </div>
        <div class="buttom-enviar">
            <input id="botao-enviar" type="submit" onclick="teste()" value="ENVIAR RESULTADOS">
        </div>
    </form>
    <!-- fim table -->



    <!-- links javascript bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- fim links js -->

</body>
<script>
    if (window.innerHeight > window.innerWidth) {
        alert("Por favor, utilize no modo paisagem");
    }
</script>

</html>