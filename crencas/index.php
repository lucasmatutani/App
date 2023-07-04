<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}

$usuario_id = $_SESSION['usuarioId'];
$data = $conn->query("SELECT * FROM crencas WHERE usuario_id = $usuario_id");
if (!empty($data)) {
    $linha = mysqli_fetch_assoc($data);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Crenças</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" style="width: 25%;" alt="">
        <h1>Crenças</h1>
    </div>
    <form action="./sql.php">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <input type="hidden" name="email" value="<?php echo $_SESSION['usuarioEmail'] ?>">

        <div class="container-table mt-5">
            <table>
                <tr>
                    <th style="width:100px;"></th>
                    <th>PRESENTE NEGATIVO</th>
                    <th>PRESENTE POSITIVO</th>
                </tr>
                <tr>
                    <td style="width:100px;"><b>FUTURO POSITIVO</b></td>
                    <td><textarea name="futuro_positivo_presente_negativo" class="form-control" rows="8"><?php if (!empty($linha)) echo $linha['futuro_positivo_presente_negativo']; ?></textarea></td>
                    <td><textarea name="futuro_positivo_presente_positivo" class="form-control" rows="8"><?php if (!empty($linha)) echo $linha['futuro_positivo_presente_positivo']; ?></textarea></td>
                </tr>
                <tr>
                    <td style="width:100px;"><b>FUTURO NEGATIVO</b></td>
                    <td><textarea name="futuro_negativo_presente_negativo" rows="8" class="form-control"><?php if (!empty($linha)) echo $linha['futuro_negativo_presente_negativo']; ?></textarea></td>
                    <td><textarea name="futuro_negativo_presente_positivo" rows="8" class="form-control"><?php if (!empty($linha)) echo $linha['futuro_negativo_presente_positivo']; ?></textarea></td>
                </tr>
            </table>
        </div>
        <div class="buttom-enviar mt-5">
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