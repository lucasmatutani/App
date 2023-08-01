<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas</title>
</head>

<body>
    <div class="container-search">
        <h2>RESPOSTAS</h2>
        <input type="text" id="search-input" onkeyup="filterButtons()" placeholder="Pesquisar...">

        <a href="../respostas/download.php?table=7ps_marketing_mix" class="styled-btn">
            7Ps Marketing Mix
        </a>

        <a href="../teste-aida/role-play/" class="styled-btn" title="Cadastro de usuário" target="_blank">
            AIDA
        </a>

        <a href="../role-play/respostas" class="styled-btn" title="Cadastro de usuário" target="_blank">
            Role Play
        </a>

        <a href="../teste-hospital/respostas/index.php" class="styled-btn" title="Cadastro de usuário" target="_blank">
            Role Play Hospital
        </a>

        <a href="../teste-spin/respostas.php" class="styled-btn" title="Cadastro de usuário" target="_blank">
            Spin
        </a>

        <a href="../fatores-criticos-de-sucesso/respostas.php" class="styled-btn" title="Cadastro de usuário" target="_blank">
            Fatores críticos de sucesso
        </a>

        <a href="../plano-de-acao-5w2h/respostas.php" class="styled-btn" title="Cadastro de usuário" target="_blank">
            Plano de ação 5w2h
        </a>

        <a href="../teste-matriz-de-risco/respostas.php" class="styled-btn" title="Cadastro de usuário" target="_blank">
            Matriz de risco
        </a>

        <a href="../teste-petscan-do-cliente/respostas.php" class="styled-btn" title="Cadastro de usuário" target="_blank">
            Petscan do cliente
        </a>

        <a href="../respostas/download.php?table=analise_swot" class="styled-btn">
            Analise SWOT
        </a>

        <a href="../respostas/download.php?table=crencas" class="styled-btn">
            Crenças
        </a>

        <a href="../respostas/download.php?table=diagnostico" class="styled-btn">
            Diagnostico
        </a>

        <a href="../respostas/download.php?table=matriz_predominio" id=buttonExport class="styled-btn">
            Resultado Matriz de Predominio
        </a>

        <a href="../respostas/download.php?table=puv" class="styled-btn">
            PUV
        </a>

        <a href="../respostas/download.php?table=teste_cavaben" class="styled-btn">
            CA VA BEN
        </a>

        <a href="../respostas/download.php?table=teste_comportamental1" class="styled-btn">
            Comportamental
        </a>

        <a href="../respostas/download.php?table=teste_conquiste_cliente" class="styled-btn" >
            Conquistando Cliente
        </a>

        <a href="../respostas/download.php?table=teste_flowchart" class="styled-btn">
            FlowChart
        </a>

        <a href="../respostas/download.php?table=teste_metodo_cesar" class="styled-btn">
            Metodo Cesar
        </a>

        <a href="../respostas/download.php?table=teste_representacional" class="styled-btn">
            Representacional
        </a>

        <a href="../respostas/download.php?table=teste_triade_tempo" class="styled-btn">
            Triade do Tempo
        </a>
    </div>
</body>

<script>
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