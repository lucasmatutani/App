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

        <a href="./download.php?table=analise_swot">]
            Analise SWOT
        </a>

        <a href="./download.php?table=crencas">
            Crenças
        </a>

        <a href="./download.php?table=diagnostico">
            Diagnostico
        </a>

        <a href="./download.php?table=matriz_predominio" id=buttonExport>
            Resultado Matriz de Predominio
        </a>

        <a href="./download.php?table=puv">
            PUV
        </a>

        <a href="./download.php?table=teste_cavaben">
            CA VA BEN
        </a>

        <a href="./download.php?table=teste_comportamental1">
            Comportamental
        </a>

        <a href="./download.php?table=teste_conquiste_cliente">
            Conquistando Cliente
        </a>

        <a href="./download.php?table=teste_flowchart">
            FlowChart
        </a>

        <a href="./download.php?table=teste_metodo_cesar">
            Metodo Cesar
        </a>

        <a href="./download.php?table=teste_representacional">
            Representacional
        </a>

        <a href="./download.php?table=teste_triade_tempo">
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