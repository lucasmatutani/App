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
                <input id="searchbar" onkeyup="search()" type="text" name="search" placeholder="Pesquisar Teste">
            </div>
            <?php if ($_SESSION['comportamental'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-comportamental/" class="teste">Comportamental</a>
            <?php endif; ?>

            <?php if ($_SESSION['representacional'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-representacional/" class="teste">Representacional</a>
            <?php endif; ?>

            <?php if ($_SESSION['aida'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-aida/" class="teste">Aida</a>
            <?php endif; ?>

            <?php if ($_SESSION['conquiste_clientes'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-conquistando-cliente/" class="teste">Conquiste Clientes</a>
            <?php endif; ?>

            <?php if ($_SESSION['spin'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-spin/" class="teste">Spin</a>
            <?php endif; ?>

            <?php if ($_SESSION['metodo_cesar'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-metodo-cesar/" class="teste">Método Cesar</a>
            <?php endif; ?>

            <?php if ($_SESSION['petscan'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-petscan-do-cliente/" class="teste">Petscan do Cliente</a>
            <?php endif; ?>

            <?php if ($_SESSION['triade'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/teste-triade-do-tempo/" class="teste">Tríade do Tempo</a>
            <?php endif; ?>

            <?php if ($_SESSION['diario_de_bordo'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/diario-de-bordo/" class="teste">Diário de bordo</a>
            <?php endif; ?>

            <?php if ($_SESSION['plano_de_acao'] == 1 || $_SESSION['usuarioEmail'] == "admin") : ?>
                <a href="http://focustradeapp.com.br/plano-de-acao-5w2h/" class="teste">Plano de ação 5W2H</a>
            <?php endif; ?>
        </div>

        <div id="card-respostas" class="card-respostas" style="display: none;">
            <div class="card-titulo-respostas">
                <h1>RESPOSTAS</h1>
            </div>
            <?php
            $query = "SELECT d.usuario_id, c.usuario_id, r.usuario_id, t.usuario_id
                    FROM diario_de_bordo d, teste_comportamental1 c, teste_representacional r, teste_triade_tempo t
                    WHERE 
                    d.usuario_id = $usuario_id and
                    c.usuario_id = $usuario_id and
                    r.usuario_id = $usuario_id and
                    t.usuario_id = $usuario_id";

            if ($res = mysqli_query($conn, $query)) {
                while ($col = $res->fetch_field())
                    $colName[] = $col->name;
                while ($row = mysqli_fetch_array($res)) {
                    var_dump($row);
                }
            }
            // $linha = mysqli_fetch_assoc($sql);
            // echo $linha;
            // $sql_comportamental = $conn->query("SELECT * FROM teste_comportamental1 WHERE  teste_comportamental1.usuario_id = $usuario_id");
            // $teste_comportamental = mysqli_fetch_assoc($sql_comportamental);

            // $sql_representacional = $conn->query("SELECT * FROM teste_representacional WHERE  teste_representacional.usuario_id = $usuario_id");
            // $teste_representacional = mysqli_fetch_assoc($sql_representacional);

            // $sql_triade_tempo = $conn->query("SELECT * FROM teste_triade_tempo WHERE  teste_triade_tempo.usuario_id = $usuario_id");
            // $teste_triade_tempo = mysqli_fetch_assoc($sql_triade_tempo);
            ?>

            <?php if (!empty($teste_comportamental)) : ?>
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
            <?php endif; ?>

            <?php if (!empty($teste_representacional)) : ?>
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
            <?php endif; ?>

            <?php if (!empty($teste_triade_tempo)) : ?>
                <h3>Triade do Tempo</h3>
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

    function search() {
        let input = document.getElementById('searchbar').value
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
</script>