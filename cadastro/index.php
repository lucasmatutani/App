<?php
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    echo "SEM ACESSO PARA ESSA PÁGINA, FAÇA O LOGIN!";
    exit;
}
if ($_SESSION['usuarioEmail'] != "admin") {
    echo "SEM ACESSO PARA ESSA PÁGINA, FAÇA O LOGIN COMO ADMIN!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <script src="https://kit.fontawesome.com/532ecf1f07.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <title>Cadastro</title>
</head>

<body style="font-family: 'Ubuntu', sans-serif;">
    <a class="btn-voltar" href="../index.php"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>

    <section class="container-cadastro">
        <form method="POST" action="./cadastro.php">

            <div class="cadastro-infos">
                <div class="card-infos">
                    <input type="text" name="nome" placeholder="Nome Completo" required autofocus>
                    <input type="text" name="email" placeholder="E-mail" required>
                    <input type="text" name="empresa" placeholder="Empresa" required>
                    <input type="text" name="senha" id="" placeholder="Senha" required>
                    <input type="text" name="grupo" placeholder="Grupo (opcional)">
                </div>
                     
                    <div class="card-testes">
                    <div class="container-row">
                        <p style="margin-right: 15px;">Role Play Hospital</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="teste_hospital" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="teste_hospital" value="0">
                        </div>
                    </div>
                    <div class="container-row">
                        <p style="margin-right: 15px;">Teste Representacional</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="representacional" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="representacional" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">Teste Comportamental</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="comportamental" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="comportamental" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">Teste Conquiste Clientes</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="conquiste_clientes" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="conquiste_clientes" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">Teste Aida</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="aida" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="aida" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">Teste Spin</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="spin" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="spin" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">Método Cesar</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="metodo-cesar" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="metodo-cesar" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">Petscan do Cliente</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="petscan" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="petscan" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">Tríade do Tempo</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="triade" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="triade" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">Plano de Ação</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="plano_de_acao_5w2h" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="plano_de_acao_5w2h" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">Diario de Bordo</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="diario_de_bordo" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="diario_de_bordo" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">Fatores críticos</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="fatores_criticos" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="fatores_criticos" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">Análise Swot</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="analise_swot" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="analise_swot" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">Matriz de predomínio</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="matriz_predominio" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="matriz_predominio" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">Testes JPB</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="testes_jpb" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="testes_jpb" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">Matriz de Risco</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="matriz_risco" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="matriz_risco" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">7ps Marketing</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="marketing" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="marketing" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">Puv</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="puv" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="puv" value="0">
                        </div>
                    </div>

                    <div class="container-row">
                        <p style="margin-right: 15px;">Cavaben</p>
                        <div class="input">
                            <label for="">SIM</label>
                            <input type="radio" name="cavaben" value="1">
                            <label for="">NÃO</label>
                            <input type="radio" name="cavaben" value="0">
                        </div>
                    </div>

                </div>
            </div>
            <input type="submit" value="cadastrar" id="cadastrar" name="cadastrar">
        </form>
    </section>
</body>



</html>
