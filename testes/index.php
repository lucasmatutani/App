<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    echo "SEM ACESSO PARA ESSA PÁGINA, FAÇA O LOGIN!";
    exit;
}
$usuario_id = $_SESSION['usuarioId'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/532ecf1f07.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <title>Testes Focus Trade</title>
</head>

<body style="margin: 0; font-family: 'Ubuntu', sans-serif;">

    <a class="btn-voltar" href="../index.php"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-logo">
        <img class="img-logo" src="../assets/img/logo-sem-fundo-azul.png" alt="">
    </div>
    <div class="container-testes">
        <div class="btns-testes">
            <button onclick="mostrarTestes()" class="btn-testes">TESTES</button>
            <button onclick="mostrarRespostas()" class="btn-respostas">RESPOSTAS</button>
        </div>
        <div id="card-testes" class="card-testes">
            <div class="card-titulo-testes">
                <h1>TESTES</h1>
                <div class="container-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input id="searchbar-testes" onkeyup="searchTestes()" type="text" name="search" placeholder="Pesquisar">
                </div>
                <span style="z-index: 999;"></span>
            </div>
            <?php if ($_SESSION['comportamental'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-comportamental/" class="teste" target="_blank">Comportamental</a>
            <?php endif; ?>

            <?php if ($_SESSION['representacional'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-representacional/" class="teste" target="_blank">Representacional</a>
            <?php endif; ?>

            <?php if ($_SESSION['aida'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-aida/" class="teste" target="_blank">Aida</a>
            <?php endif; ?>

            <?php if ($_SESSION['conquiste_clientes'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-conquistando-cliente/" class="teste" target="_blank">Conquiste Clientes</a>
            <?php endif; ?>

            <?php if ($_SESSION['spin'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-spin/" class="teste" target="_blank">Spin</a>
            <?php endif; ?>

            <?php if ($_SESSION['metodo_cesar'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-metodo-cesar/" class="teste" target="_blank">Método Cesar</a>
            <?php endif; ?>

            <?php if ($_SESSION['petscan'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-petscan-do-cliente/" class="teste" target="_blank">Petscan do Cliente</a>
            <?php endif; ?>

            <?php if ($_SESSION['triade'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-triade-do-tempo/" class="teste" target="_blank">Tríade do Tempo</a>
            <?php endif; ?>

            <?php if ($_SESSION['diario_de_bordo'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/diario-de-bordo/" class="teste" target="_blank">Diário de bordo</a>
            <?php endif; ?>

            <?php if ($_SESSION['plano_de_acao'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/plano-de-acao-5w2h/" class="teste" target="_blank">Plano de ação 5W2H</a>
            <?php endif; ?>
        </div>

        <div id="card-respostas" class="card-respostas" style="display: none;">
            <div class="card-titulo-respostas">
                <h1>RESPOSTAS</h1>
                <div class="container-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input id="searchbar-respostas" onkeyup="searchRespostas()" type="text" name="search" placeholder="Pesquisar">
                </div>
                <span style="z-index: 999;"></span>
            </div>
            <?php
            $sql_comportamental = $conn->query("SELECT * FROM teste_comportamental1 WHERE  teste_comportamental1.usuario_id = $usuario_id");
            $teste_comportamental = mysqli_fetch_assoc($sql_comportamental);

            $sql_representacional = $conn->query("SELECT * FROM teste_representacional WHERE  teste_representacional.usuario_id = $usuario_id");
            $teste_representacional = mysqli_fetch_assoc($sql_representacional);

            $sql_triade_tempo = $conn->query("SELECT * FROM teste_triade_tempo WHERE  teste_triade_tempo.usuario_id = $usuario_id");
            $teste_triade_tempo = mysqli_fetch_assoc($sql_triade_tempo);

            $sql_diario_de_bordo = $conn->query("SELECT * FROM diario_de_bordo WHERE  diario_de_bordo.usuario_id = $usuario_id");
            $diario_de_bordo = mysqli_fetch_assoc($sql_diario_de_bordo);

            $sql_plano_de_acao = $conn->query("SELECT * FROM plano_de_acao_5w2h WHERE  plano_de_acao_5w2h.usuario_id = $usuario_id");
            $plano_de_acao = mysqli_fetch_assoc($sql_plano_de_acao);

            $sql_teste_aida = $conn->query("SELECT * FROM teste_aida WHERE  teste_aida.usuario_id = $usuario_id");
            $teste_aida = mysqli_fetch_assoc($sql_teste_aida);

            $sql_conquiste_clientes = $conn->query("SELECT * FROM teste_conquiste_clientes WHERE  teste_conquiste_clientes.usuario_id = $usuario_id");
            $teste_conquiste_clientes = mysqli_fetch_assoc($sql_conquiste_clientes);

            $sql_teste_metodo_cesar = $conn->query("SELECT * FROM teste_metodo_cesar WHERE  teste_metodo_cesar.usuario_id = $usuario_id");
            $teste_metodo_cesar = mysqli_fetch_assoc($sql_teste_metodo_cesar);

            $sql_teste_petscan_do_cliente = $conn->query("SELECT * FROM teste_petscan_do_cliente WHERE  teste_petscan_do_cliente.usuario_id = $usuario_id");
            $teste_petscan_do_cliente = mysqli_fetch_assoc($sql_teste_petscan_do_cliente);

            $sql_teste_spin = $conn->query("SELECT * FROM teste_spin WHERE  teste_spin.usuario_id = $usuario_id");
            $teste_spin = mysqli_fetch_assoc($sql_teste_spin);
            ?>

            <?php if (!empty($teste_comportamental)) : ?>
                <a href="javascript:void(0)" onclick="modalComportamental()" class="resposta">Comportamental</a>
                <div id="modal-comportamental" class="modal-respostas" style="display: none;">
                    <h3>Comportamental</h3>
                    <table>
                        <tr>
                            <td>Águia</td>
                            <td>Gato</td>
                            <td>Tubarão</td>
                            <td>Lobo</td>
                        </tr>
                        <tr>
                            <td><?php echo $teste_comportamental['aguia'] ?></td>
                            <td><?php echo $teste_comportamental['gato'] ?></td>
                            <td><?php echo $teste_comportamental['tubarao'] ?></td>
                            <td><?php echo $teste_comportamental['lobo'] ?></td>
                        </tr>
                    </table>
                </div>
            <?php endif; ?>

            <?php if (!empty($teste_representacional)) : ?>
                <a href="javascript:void(0)" onclick="modalRepresentacional()" class="resposta">Representacional</a>
                <div id="modal-representacional" class="modal-respostas" style="display: none;">
                    <h3>Representacional</h3>
                    <table>
                        <tr>
                            <td>A</td>
                            <td>C</td>
                            <td>V</td>
                            <td>AD</td>
                        </tr>
                        <tr>
                            <td><?php echo $teste_representacional['A'] ?></td>
                            <td><?php echo $teste_representacional['C'] ?></td>
                            <td><?php echo $teste_representacional['V'] ?></td>
                            <td><?php echo $teste_representacional['AD'] ?></td>
                        </tr>
                    </table>
                </div>
            <?php endif; ?>

            <?php if (!empty($teste_triade_tempo)) : ?>
                <a href="javascript:void(0)" onclick="modalTriade()" class="resposta">Tríade do Tempo</a>
                <div id="modal-triade" class="modal-respostas" style="display: none;">
                    <h3>Tríade do Tempo</h3>
                    <table>
                        <tr>
                            <td>Importância</td>
                            <td>Urgência</td>
                            <td>Circunstância</td>
                        </tr>
                        <tr>
                            <td><?php echo $teste_triade_tempo['importancia'] ?></td>
                            <td><?php echo $teste_triade_tempo['urgencia'] ?></td>
                            <td><?php echo $teste_triade_tempo['circunstancia'] ?></td>
                        </tr>
                    </table>
                </div>
            <?php endif; ?>

            <?php if (!empty($diario_de_bordo)) : ?>
                <a href="http://focustradeapp.com.br/diario-de-bordo/" class="resposta" target="_blank">Diário de Bordo</a>
            <?php endif; ?>

            <?php if (!empty($plano_de_acao)) : ?>
                <a href="http://focustradeapp.com.br/plano-de-acao-5w2h/" class="resposta" target="_blank">Plano de Ação 5w2h</a>
            <?php endif; ?>

            <?php if (!empty($teste_aida)) : ?>
                <a href="http://focustradeapp.com.br/teste-aida/" class="resposta" target="_blank">Aida</a>
            <?php endif; ?>

            <?php if (!empty($teste_conquiste_clientes)) : ?>
                <a href="http://focustradeapp.com.br/teste-conquistando-cliente/" class="resposta" target="_blank">Conquiste Clientes</a>
            <?php endif; ?>

            <?php if (!empty($teste_metodo_cesar)) : ?>
                <a href="http://focustradeapp.com.br/teste-metodo-cesar/" class="resposta" target="_blank">Método Cesar</a>
            <?php endif; ?>

            <?php if (!empty($teste_petscan_do_cliente)) : ?>
                <a href="http://focustradeapp.com.br/teste-petscan-do-cliente/" class="resposta" target="_blank">Petscan do cliente</a>
            <?php endif; ?>

            <?php if (!empty($teste_spin)) : ?>
                <a href="http://focustradeapp.com.br/teste-spin/" class="resposta" target="_blank">Spin</a>
            <?php endif; ?>
        </div>
    </div>

</body>

</html>

<script>
    function mostrarTestes() {
        var cardTestes = document.getElementById("card-testes");
        var cardRespostas = document.getElementById("card-respostas");

        cardTestes.style.display = 'flex';
        cardRespostas.style.display = 'none';
    }

    function mostrarRespostas() {
        var cardTestes = document.getElementById("card-testes");
        var cardRespostas = document.getElementById("card-respostas");

        cardRespostas.style.display = 'flex';
        cardTestes.style.display = 'none';
    }

    function searchTestes() {
        let input = document.getElementById('searchbar-testes').value
        input = input.toLowerCase();
        let x = document.getElementsByClassName('teste');

        for (i = 0; i < x.length; i++) {
            if (!x[i].innerHTML.toLowerCase().includes(input)) {
                x[i].style.display = "none";
            } else {
                x[i].style.display = "list-item";
            }
        }
    }

    function searchRespostas() {
        let input = document.getElementById('searchbar-respostas').value
        input = input.toLowerCase();
        let x = document.getElementsByClassName('resposta');

        for (i = 0; i < x.length; i++) {
            if (!x[i].innerHTML.toLowerCase().includes(input)) {
                x[i].style.display = "none";
            } else {
                x[i].style.display = "list-item";
            }
        }
    }

    function modalComportamental() {
        var modal = document.getElementById("modal-comportamental");
        var styleModal = modal.style.display;

        if (styleModal == "flex") {
            modal.style.display = 'none';
        } else {
            modal.style.display = 'flex';
        }
    }

    function modalRepresentacional() {
        var modal = document.getElementById("modal-representacional");
        var styleModal = modal.style.display;

        if (styleModal == "flex") {
            modal.style.display = 'none';
        } else {
            modal.style.display = 'flex';
        }
    }

    function modalTriade() {
        var modal = document.getElementById("modal-triade");
        var styleModal = modal.style.display;

        if (styleModal == "flex") {
            modal.style.display = 'none';
        } else {
            modal.style.display = 'flex';
        }
    }
</script>