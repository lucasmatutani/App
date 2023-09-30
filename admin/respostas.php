<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}
?>
<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas</title>
</head>

<body>
    <!-- O formulário -->
    <form action="../respostas/delete.php" method="post" onsubmit="return confirmDeletion(this);">
        <div class="containerSelect" style="display: flex; flex-direction: row; margin-top: 20px;">
            <select name="nome_banco" id="nome_banco" style="width: 25vw; margin-right: 10px; font-size: 1em;">
                <option>Selecione um banco para apagar</option>
                <option value="teste_aida">AIDA</option>
                <option value="analise_swot">Analise SWOT</option>
                <option value="teste_cavaben">CA VA BEN</option>
                <option value="crencas">Crenças</option>
                <option value="teste_conquiste_cliente">Conquistando Cliente</option>
                <option value="teste_comportamental1">Comportamental</option>
                <option value="diagnostico">Diagnostico</option>
                <option value="fatores_criticos_de_sucesso">Fatores Críticos de Sucesso</option>
                <option value="teste_flowchart">Flow Chart</option>
                <option value="meta_smart">Meta Smart</option>
                <option value="teste_metodo_cesar">Método Cesar</option>
                <option value="matriz_predominio">Matriz de Predomínio</option>
                <option value="teste_petscan_do_cliente">Petscan do Cliente</option>
                <option value="plano-de-acao-5w2h">Plano de ação 5W2H</option>
                <option value="puv">PUV</option>
                <option value="teste_representacional">Sistema Representacional</option>
                <option value="7ps_marketing_mix">7Ps Marketing Mix</option>
                <option value="teste_spin">SPIN</option>
                <option value="teste_triade_tempo">Tríade do tempo</option>
            </select>
            <input type="submit" name="delete" value="APAGAR DADOS">
        </div>
    </form>
    <div class="container-search">
        <h2>RESPOSTAS</h2>
        <input type="text" id="search-input" onkeyup="filterButtons()" placeholder="Pesquisar...">

        <a href="../teste-aida/role-play/" class="styled-btn" title="Cadastro de usuário" target="_blank">
            AIDA
        </a>

        <a href="../respostas/download.php?table=analise_swot" class="styled-btn">
            Analise SWOT
        </a>

        <a href="../respostas/download.php?table=teste_cavaben" class="styled-btn">
            CA VA BEN
        </a>

        <a href="../respostas/download.php?table=crencas" class="styled-btn">
            Crenças
        </a>

        <a href="../respostas/download.php?table=teste_conquiste_cliente" class="styled-btn">
            Conquistando Cliente
        </a>

        <a href="../respostas/download.php?table=teste_comportamental1" class="styled-btn">
            Comportamental
        </a>

        <a href="../respostas/download.php?table=diagnostico" class="styled-btn">
            Diagnostico
        </a>

        <a href="../fatores-criticos-de-sucesso/respostas.php" class="styled-btn" title="Cadastro de usuário" target="_blank">
            Fatores críticos de sucesso
        </a>

        <a href="../respostas/download.php?table=teste_flowchart" class="styled-btn">
            FlowChart
        </a>

        <a href="../teste-meta-smart/respostas.php" class="styled-btn">
            Meta Smart
        </a>

        <a href="../respostas/download.php?table=teste_metodo_cesar" class="styled-btn">
            Metodo Cesar
        </a>

        <a href="../teste-matriz-de-risco/respostas.php" class="styled-btn" title="Cadastro de usuário" target="_blank">
            Matriz de risco
        </a>

        <a href="../respostas/download.php?table=matriz_predominio" id=buttonExport class="styled-btn">
            Resultado Matriz de Predominio
        </a>

        <a href="../teste-petscan-do-cliente/respostas.php" class="styled-btn" title="Cadastro de usuário" target="_blank">
            Petscan do cliente
        </a>

        <a href="../respostas/download.php?table=plano-de-acao-5w2h" class="styled-btn" title="Cadastro de usuário" target="_blank">
            Plano de ação 5w2h
        </a>

        <a href="../respostas/download.php?table=puv" class="styled-btn">
            PUV
        </a>

        <a href="../role-play/respostas" class="styled-btn" title="Cadastro de usuário" target="_blank">
            Role Play
        </a>

        <a href="../teste-hospital/respostas/index.php" class="styled-btn" title="Cadastro de usuário" target="_blank">
            Role Play Hospital
        </a>

        <a href="../respostas/download.php?table=teste_representacional" class="styled-btn">
            Sistema Representacional
        </a>

        <a href="../respostas/download.php?table=7ps_marketing_mix" class="styled-btn">
            7Ps Marketing Mix
        </a>

        <a href="../teste-spin/respostas.php" class="styled-btn" title="Cadastro de usuário" target="_blank">
            Spin
        </a>

        <a href="../respostas/download.php?table=teste_triade_tempo" class="styled-btn">
            Triade do Tempo
        </a>
    </div>

</body>

<script>
    function confirmDeletion(form) {
        var select = form.elements['nome_banco'];
        var option = select.options[select.selectedIndex].text;
        return confirm('VOCÊ TEM CERTEZA QUE DESEJA APAGAR O DADOS DE: ' + option + '?');
    }

    function filterButtons() {
        var input, filter, buttons, i;
        input = document.getElementById('search-input');
        filter = input.value.toUpperCase();
        buttons = document.getElementsByClassName('styled-btn');

        for (i = 0; i < buttons.length; i++) {
            btn = buttons[i];
            if (btn.innerHTML.toUpperCase().indexOf(filter) > -1) {
                buttons[i].style.display = "";
            } else {
                buttons[i].style.display = "none";
            }
        }
    }
</script>

<style>
    .styled-btn {
        background-color: #314b7c;
        border-radius: 50px;
        color: white;
        border: none;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 1em;
        margin: 10px 0px;
        cursor: pointer;
        transition: background 0.3s ease;
        width: 20vw;
    }

    .styled-btn:hover {
        background-color: #45619d;
    }

    #search-input {
        margin-bottom: 20px;
        padding: 10px;
        font-size: 0.8em;
    }

    .container-search {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        font-size: 2em;
    }
</style>


</html>