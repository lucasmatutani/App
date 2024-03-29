<?php
include_once "../../includes/connection.php";
session_start();
$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];
$participante = $_SESSION['grupo'];

if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Ficha Avaliação</title>
</head>

<body>
    <a class="btn-voltar" href="../index.php"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <form action="../sql.php" method="POST">
        <?php if (!empty($_GET['grupo'])) : ?>
            <input type="hidden" name="grupo" value="<?php echo $_GET['grupo'] ?>">
        <?php endif; ?>
        <input type="hidden" name="participante" value="<?php if (!empty($participante)) echo $participante ?>">
        <div class="container-header">
            <img src="../assets/img/logo-focustrade.jpeg" alt="">
        </div>

        <div class="container-subtitulo">

            <h1 class="grupo">Grupo <?php if (!empty($_GET['grupo'])) echo $_GET['grupo'];
                                    if (!empty($_GET['avaliador'])) echo $_GET['avaliador'] ?></h1>
            <div class="container-select">
                <?php if (@$_GET['avaliador']) : ?>
                    <h3>Avaliador</h3>
                    <input type="text" name="avaliador" style="margin: 18px 20px 0 10px; height: 20px;" required>

                    <h3>Grupo</h3>
                    <select name="grupo" id="select-rodada" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                <?php endif; ?>

                <h3>Rodada</h3>
                <select name="rodada" id="select-rodada" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

                <h3>Vendedor</h3>
                <select name="representante" id="select-rep" required>
                    <option value="1.1">1.1</option>
                    <option value="1.2">1.2</option>
                    <option value="1.3">1.3</option>
                    <option value="1.4">1.4</option>
                    <option value="1.5">1.5</option>

                    <option value="2.1">2.1</option>
                    <option value="2.2">2.2</option>
                    <option value="2.3">2.3</option>
                    <option value="2.4">2.4</option>
                    <option value="2.5">2.5</option>

                    <option value="3.1">3.1</option>
                    <option value="3.2">3.2</option>
                    <option value="3.3">3.3</option>
                    <option value="3.4">3.4</option>
                    <option value="3.5">3.5</option>

                    <option value="4.1">4.1</option>
                    <option value="4.2">4.2</option>
                    <option value="4.3">4.3</option>
                    <option value="4.4">4.4</option>
                    <option value="4.5">4.5</option>

                    <option value="5.1">5.1</option>
                    <option value="5.2">5.2</option>
                    <option value="5.3">5.3</option>
                    <option value="5.4">5.4</option>
                    <option value="5.5">5.5</option>

                    <option value="6.1">6.1</option>
                    <option value="6.2">6.2</option>
                    <option value="6.3">6.3</option>
                    <option value="6.4">6.4</option>
                    <option value="6.5">6.5</option>
                </select>
            </div>
        </div>
        <div class="container-principal">

            <table cellspacing="50px">
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <h3>Implementou</h3>
                    </td>
                    <td>
                        <h3>Implementou Parcialente</h3>
                    </td>
                    <td>
                        <h3>Não Implementou</h3>
                    </td>
                </tr>

                <tr>
                    <th>Planejamento</th>
                    <td>
                        <p>Apresentação do Planejamento para os Avaliadores</p>
                    </td>
                    <td>
                        <input type="radio" name="ap" id="" value="3" required>
                    </td>
                    <td>
                        <input type="radio" name="ap" id="" value="2" required>
                    </td>
                    <td>
                        <input type="radio" name="ap" id="" value="1" required>
                    </td>
                </tr>

                <tr>
                    <th>
                        Prospecção
                    </th>
                    <td>
                        <p>Rapport/conexão com o cliente</p>
                    </td>
                    <td>
                        <input type="radio" name="rap" id="" value="3" required>
                    </td>
                    <td>
                        <input type="radio" name="rap" id="" value="2" required>
                    </td>
                    <td>
                        <input type="radio" name="rap" id="" value="1" required>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <p>Apresentação e Desenvolvimento</p>
                    </td>
                    <td>
                        <input type="radio" name="ad" id="" value="3" required>
                    </td>
                    <td>
                        <input type="radio" name="ad" id="" value="2" required>
                    </td>
                    <td>
                        <input type="radio" name="ad" id="" value="1" required>
                    </td>
                </tr>

                <tr>
                    <th>
                        Pedido
                    </th>
                    <td>
                        <p>Falteiro/Demanda</p>
                    </td>
                    <td>
                        <input type="radio" name="fd" id="" value="3" required>
                    </td>
                    <td>
                        <input type="radio" name="fd" id="" value="2" required>
                    </td>
                    <td>
                        <input type="radio" name="fd" id="" value="1" required>
                    </td>
                <tr>
                    <th>
                        <p>Negociação</p>
                    </th>
                    <td>
                        Busca do Objetivo
                    </td>

                    <td>
                        <input type="radio" name="bo" id="" value="3" required>
                    </td>
                    <td>
                        <input type="radio" name="bo" id="" value="2" required>
                    </td>
                    <td>
                        <input type="radio" name="bo" id="" value="1" required>
                    </td>
                </tr>
                </tr>

                <tr>
                    <th>Outros</th>
                    <td>Técnica de Fechamennto Aplicada</td>
                    <td>
                        <input type="radio" name="tf" id="" value="3" required>
                    </td>
                    <td>
                        <input type="radio" name="tf" id="" value="2" required>
                    </td>
                    <td>
                        <input type="radio" name="tf" id="" value="1" required>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <p>Cumpriu com o Tempo</p>
                    </td>
                    <td>
                        <input type="radio" name="ct" id="" value="3" required>
                    </td>
                    <td>
                        <input type="radio" name="ct" id="" value="2" required>
                    </td>
                    <td>
                        <input type="radio" name="ct" id="" value="1" required>
                    </td>
                </tr>
            </table>
        </div>
        <input type="hidden" name="total" id="resultado">
    </form>
</body>
<div class="buttom-enviar">
    <input id="botao-enviar" type="submit" onclick="teste()" value="ENVIAR RESULTADOS" style="height: 30px; margin-left: 15px;">
</div>
<script>
    function teste() {
        const form = document.querySelector("form");
        var radios = form.querySelectorAll("input[type='radio']");
        var btn = document.getElementById("botao-enviar");
        var sum = 0;

        radios.forEach(radio => {
            if (radio.checked) {
                sum += parseInt(radio.value);
            }
        });
        document.getElementById("resultado").value = sum;
        form.submit();
    }
</script>

</html>