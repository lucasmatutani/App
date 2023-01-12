<?php
include_once "../includes/connection.php";
session_start();
$usuario_id = $_SESSION['usuarioId'];

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

    <form action="">
        <div class="container-perguntas">


            <!-- <p class="lateral-1">Aspectos Internos</p>
            <p class="lateral-2">Aspectos Externos</p> -->

            <table border="1">
                <tr>
                    <th>Contribui para o crescimento da empresa:
                        <p>S: Pontos fortes?</p>
                        <textarea name="txt1" id="" cols="50" rows="20"><?php if (!empty($linha)) echo $linha['txt1']; ?></textarea>

                    </th>
                    <th>Dificulta o crescimento da empresa:
                        <p>W: Pontos fracos?</p>
                        <textarea name="txt2" id="" cols="50" rows="20"><?php if (!empty($linha)) echo $linha['txt2']; ?></textarea>
                    </th>

                </tr>
                <tr>
                    <td>
                        <p>O: Oportunidades</p>
                        <textarea name="txt3" id="" cols="50" rows="20"><?php if (!empty($linha)) echo $linha['txt3']; ?></textarea>
                    </td>
                    <td>
                        <p>T: Ameaças</p>
                        <textarea name="txt4" id="" cols="50" rows="20"><?php if (!empty($linha)) echo $linha['txt4']; ?></textarea>
                    </td>
                </tr>
            </table>
        </div>
        <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS" style="height: 30px; margin-left: 15px;">
    </form>

</body>

</html>