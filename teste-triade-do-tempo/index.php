<?php
include_once "../includes/connection.php";
session_start();
$usuario_id = $_SESSION['usuarioId'];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Tríade do Tempo</title>
</head>

<body>
    <div class="container-header">
        <img class="img-logo" src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>Teste - Tríade do Tempo</h1>
    </div>
    <div class="container-subtitulo">
        <p>1 Nunca</p>
        <p>2 Raramente</p>
        <p>3 Às vezes</p>
        <p>4 Quase sempre</p>
        <p>5 Sempre</p>
    </div>
    <form action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <div class="container-pergunta">
            <div>
                <p>1 - Costumo ir a eventos, mesmo sem ter muita vontade, para <br> agradar meu chefe, meus amigos ou minha familia.</p>
                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio1" value="1" id="">
                        <input type="radio" name="radio1" value="2" id="">
                        <input type="radio" name="radio1" value="3" id="">
                        <input type="radio" name="radio1" value="4" id="">
                        <input type="radio" name="radio1" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>
                <p>2 - Não consigo realizar tudo que me propus a fazer no dia; preciso <br>fazer hora extra e levar trabalho para casa.</p>

                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio2" value="1" id="">
                        <input type="radio" name="radio2" value="2" id="">
                        <input type="radio" name="radio2" value="3" id="">
                        <input type="radio" name="radio2" value="4" id="">
                        <input type="radio" name="radio2" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>

                <p>3 - Quando recebo um novo e-mail, costumo dar uma olhada para<br> checar o conteúdo.</p>

                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio3" value="1" id="">
                        <input type="radio" name="radio3" value="2" id="">
                        <input type="radio" name="radio3" value="3" id="">
                        <input type="radio" name="radio3" value="4" id="">
                        <input type="radio" name="radio3" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>

                <p>4 - Costumo visitar, com regularidade, pessoas relevantes em<br> minha vida, como amigos, parentes e filhos.
                <p>
                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio4" value="1" id="">
                        <input type="radio" name="radio4" value="2" id="">
                        <input type="radio" name="radio4" value="3" id="">
                        <input type="radio" name="radio4" value="4" id="">
                        <input type="radio" name="radio4" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>

                <p>5 - É comum aparecerem problemas inesperados no meu dia a dia. </p>

                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio5" value="1" id="">
                        <input type="radio" name="radio5" value="2" id="">
                        <input type="radio" name="radio5" value="3" id="">
                        <input type="radio" name="radio5" value="4" id="">
                        <input type="radio" name="radio5" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>

                <p>6 - Assumo compromissos com outras pessoas ou aceito novas posições<br> na empresa, mesmo que não goste muito da nova atividade, se for<br> para aumentar meus rendimentos ou obter uma proporção.</p>

                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio6" value="1" id="">
                        <input type="radio" name="radio6" value="2" id="">
                        <input type="radio" name="radio6" value="3" id="">
                        <input type="radio" name="radio6" value="4" id="">
                        <input type="radio" name="radio6" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>

                <p>7 Tenho um tempo para dedicar a mim mesmo, e nele posso fazer o <br>que quiser.</p>

                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio7" value="1" id="">
                        <input type="radio" name="radio7" value="2" id="">
                        <input type="radio" name="radio7" value="3" id="">
                        <input type="radio" name="radio7" value="4" id="">
                        <input type="radio" name="radio7" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>

                <p>8 Costumo deixar para fazer relatórios, imposto de renda, compras<br> de Natal, estudar para provas e outras tarefas perto do prazo de entrega.</p>

                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio8" value="1" id="">
                        <input type="radio" name="radio8" value="2" id="">
                        <input type="radio" name="radio8" value="3" id="">
                        <input type="radio" name="radio8" value="4" id="">
                        <input type="radio" name="radio8" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>

                <p>9 - Nos dias de descanso, costumo passar boa parte do dia assistindo à <br> televisão, jogando ou acessando a internet. </p>

                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio9" value="1" id="">
                        <input type="radio" name="radio9" value="2" id="">
                        <input type="radio" name="radio9" value="3" id="">
                        <input type="radio" name="radio9" value="4" id="">
                        <input type="radio" name="radio9" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>
            </div>


            <div>
                <p>10 Faço um planejamento por escrito de tudo que preciso fazer durante<br> minha semana.</p>

                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio10" value="1" id="">
                        <input type="radio" name="radio10" value="2" id="">
                        <input type="radio" name="radio10" value="3" id="">
                        <input type="radio" name="radio10" value="4" id="">
                        <input type="radio" name="radio10" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>

                <p>11 Posso afirmar que estou conseguindo realizar tudo que gostaria em<br> minha vida e que o tempo está passando na realidade correta.</p>

                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio11" value="1" id="">
                        <input type="radio" name="radio11" value="2" id="">
                        <input type="radio" name="radio11" value="3" id="">
                        <input type="radio" name="radio11" value="4" id="">
                        <input type="radio" name="radio11" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>

                <p>12 Costumo participar de reuniões sem saber direito o conteúdo, por que<br> devo participar ou a que resultado aquele encontro pode levar.</p>

                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio12" value="1" id="">
                        <input type="radio" name="radio12" value="2" id="">
                        <input type="radio" name="radio12" value="3" id="">
                        <input type="radio" name="radio12" value="4" id="">
                        <input type="radio" name="radio12" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>

                <p>13 Consigo melhores resultados e me sinto mais produtivo quando estou sob<br> pressão ou com o prazo curto.</p>

                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio13" value="1" id="">
                        <input type="radio" name="radio13" value="2" id="">
                        <input type="radio" name="radio13" value="3" id="">
                        <input type="radio" name="radio13" value="4" id="">
                        <input type="radio" name="radio13" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>

                <p>14 Quando quero alguma coisa, defino esse objetivo por escrito, estabeleço<br> prazo em minha agenda, monitoro os resultados obtidos e os comparo com<br> os esperados.</p>

                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio14" value="1" id="">
                        <input type="radio" name="radio14" value="2" id="">
                        <input type="radio" name="radio14" value="3" id="">
                        <input type="radio" name="radio14" value="4" id="">
                        <input type="radio" name="radio14" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>

                <p>15 Leio muitos e-mails desnecessários, com piadas, correntes, propagandas,<br> apresentações, produtos e etc.</p>

                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio15" value="1" id="">
                        <input type="radio" name="radio15" value="2" id="">
                        <input type="radio" name="radio15" value="3" id="">
                        <input type="radio" name="radio15" value="4" id="">
                        <input type="radio" name="radio15" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>

                <p>16 Estive atrasado com minhas tarefas ou reuniões nas últimas semanas.</p>

                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio16" value="1" id="">
                        <input type="radio" name="radio16" value="2" id="">
                        <input type="radio" name="radio16" value="3" id="">
                        <input type="radio" name="radio16" value="4" id="">
                        <input type="radio" name="radio16" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>

                <p>17 Faço esporte com regularidade, me alimentode forma adequada e tenho o<br> lazer que gostaria.</p>

                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio17" value="1" id="">
                        <input type="radio" name="radio17" value="2" id="">
                        <input type="radio" name="radio17" value="3" id="">
                        <input type="radio" name="radio17" value="4" id="">
                        <input type="radio" name="radio17" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>

                <p>18 É comum reduzir meu hórario de almoço ou até mesmo comer enquanto <br>trabalho para concluir um projeto um projeto ou tarefa.</p>

                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="radio18" value="1" id="">
                        <input type="radio" name="radio18" value="2" id="">
                        <input type="radio" name="radio18" value="3" id="">
                        <input type="radio" name="radio18" value="4" id="">
                        <input type="radio" name="radio18" value="5" id="">
                    </div>
                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-btn">
            <button class="botao" type="button" onclick="gravarResp()">
                Gravar Respostas
            </button>
        </div>
        <div class="container-respostas">
            <label for="">Importância %</label>
            <input name="importancia" id="importancia" type="text">
            <label for="">Urgência %</label>
            <input name="urgencia" id="urgencia" type="text">
            <label for="">Circunstância %</label>
            <input name="circunstancia" id="circunstancia" type="text">
        </div>
        <input class="btn-submit" type="submit">
        <div id="grupoA" style="display: none;"></div>
        <div id="grupoB" style="display: none;"></div>
        <div id="grupoC" style="display: none;"></div>
        <div id="total" style="display: none;"></div>
    </form>
</body>

</html>

<script>
    function gravarResp() {
        document.getElementById("grupoA").innerHTML = "";
        document.getElementById("grupoB").innerHTML = "";
        document.getElementById("grupoC").innerHTML = "";
        document.getElementById("total").innerHTML = "";
        var input = document.getElementsByTagName('input');

        for (i = 0; i < 90; i++) {
            if (input[i].checked) {
                total = document.getElementById("total").innerHTML += input[i].value;

                if (input[i].name == "radio1" || input[i].name == "radio3" || input[i].name == "radio6" || input[i].name == "radio9" || input[i].name == "radio12" || input[i].name == "radio15") {
                    grupoA = document.getElementById("grupoA").innerHTML += input[i].value;
                }

                if (input[i].name == "radio4" || input[i].name == "radio7" || input[i].name == "radio10" || input[i].name == "radio11" || input[i].name == "radio14" || input[i].name == "radio17") {
                    grupoB = document.getElementById("grupoB").innerHTML += input[i].value;
                }

                if (input[i].name == "radio2" || input[i].name == "radio5" || input[i].name == "radio8" || input[i].name == "radio13" || input[i].name == "radio16" || input[i].name == "radio18") {
                    grupoC = document.getElementById("grupoC").innerHTML += input[i].value;
                }
            }
        }

        toNumberTotal = parseInt(total);
        arrTotal = Array.from(String(toNumberTotal), Number);
        var somaTotal = 0;
        for (var i = 0; i < arrTotal.length; i++) {
            somaTotal += arrTotal[i];
        }

        toNumberGrupoA = parseInt(grupoA);
        arrGrupoA = Array.from(String(toNumberGrupoA), Number);
        var somaGrupoA = 0;
        for (var i = 0; i < arrGrupoA.length; i++) {
            somaGrupoA += arrGrupoA[i];
        }

        toNumberGrupoB = parseInt(grupoB);
        arrGrupoB = Array.from(String(toNumberGrupoB), Number);
        var somaGrupoB = 0;
        for (var i = 0; i < arrGrupoB.length; i++) {
            somaGrupoB += arrGrupoB[i];
        }

        toNumberGrupoC = parseInt(grupoC);
        arrGrupoC = Array.from(String(toNumberGrupoC), Number);
        var somaGrupoC = 0;
        for (var i = 0; i < arrGrupoC.length; i++) {
            somaGrupoC += arrGrupoC[i];
        }

        importancia = ((somaGrupoB / somaTotal) * 100).toFixed();
        urgencia = ((somaGrupoC / somaTotal) * 100).toFixed();
        circunstancia = ((somaGrupoA / somaTotal) * 100).toFixed();

        document.getElementById("importancia").value = importancia;
        document.getElementById("urgencia").value = urgencia;
        document.getElementById("circunstancia").value = circunstancia;
    }
</script>