<?php
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}

$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];

?>

<!DOCTYPE html>
<html lang="pt-br" style="margin: 0;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <title>Teste Representacional</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-banner">
        <img class="img" src="../assets/img/logo-focustrade.jpg" alt="">
    </div>

    <div class="container-titulo">
        <h1>Teste dos Sistemas Representacionais</h1>
        <h4>Para as seguintes questões, coloque uma nota avaliando cada uma das quatro alternativas e elas não podem se repetir. Coloque os números na ordem que melhor te descreve de forma comportamental, use esse sistema de notas para indicar:</h4>
    </div>
    <div class="container-tabela">
        <div>
            <h1>4</h1>
            <p>= É a que melhor me descreve</p>
        </div>
        <div>
            <h1>3</h1>
            <p>= Me descreve bem</p>
        </div>
        <div>
            <h1>2</h1>
            <p>= Me descreve razoavelmente</p>
        </div>
        <div>
            <h1>1</h1>
            <p>= É a que menos me descreve</p>
        </div>
    </div>

    <div class="container-perguntas">
        <div class="perguntas-1a5">
            <h3>Questão 1</h3>
            <label for=""> Depois do trabalho, para descansar, gosto de ver TV.
                <input max="4" min="1" type="number" class="v" name="1"></label>

            <label for=""> Aprendi rapidamente o sistema de toques quando estudei digitalização.
                <input max="4" min="1" type="number" name="1" class="c">
            </label>

            <label for=""> Tenho facilidade em fazer conta nos dedos.
                <input max="4" min="1" type="number" name="1" class="a">
            </label>

            <label for=""> Gosto de decidir coisas importantes com base no estudo minucioso dos temas.
                <input max="4" min="1" type="number" name="1" class="ad">
            </label>

            <h3>Questão 2</h3>
            <label for=""> Eu fico me perguntando o quanto isso é importante.
                <input max="4" min="1" type="number" name="2" class="ad">
            </label>

            <label for=""> Acho muito importante a estética visual da comunicação escrita.
                <input max="4" min="1" type="number" name="2" class="a">
            </label>

            <label for=""> Sou muito cuidadoso com minha aparência.
                <input max="4" min="1" type="number" name="2" class="v">
            </label>

            <label for=""> Um trabalho bem realizado me traz um imenso bem estar.
                <input max="4" min="1" type="number" name="2" class="c">
            </label>

            <h3>Questão 3</h3>
            <label for=""> Gosto de orientações concretas sobre o trabalho a ser realizado.
                <input max="4" min="1" type="number" name="3" class="c">
            </label>

            <label for=""> Gosto de Observar as pessoas nas reuniões.
                <input max="4" min="1" type="number" name="3" class="v">
            </label>

            <label for=""> É facil para mim analisar as situações, do ponto de vista lógico.
                <input max="4" min="1" type="number" name="3" class="ad">
            </label>

            <label for=""> Quando ouço bons artistas cantando, cantarolo junto.
                <input max="4" min="1" type="number" name="3" class="a">
            </label>

            <h3>Questão 4</h3>
            <label for=""> Quando olho para a lua cheia meus olhos brilham de contentamento.
                <input max="4" min="1" type="number" name="4" class="v">
            </label>

            <label for=""> Percebo muito sobre a pessoa apenas com o aperto de mão.
                <input max="4" min="1" type="number" name="4" class="c">
            </label>

            <label for=""> Sempre me lembro das palavras que me falaram nos momentos importantes da minha vida.
                <input max="4" min="1" type="number" name="4" class="a">
            </label>

            <label for=""> Concordo com seus argumentos, mas preciso de mais detalhes, antes de dar minha opinião.
                <input max="4" min="1" type="number" name="4" class="ad">
            </label>

            <h3>Questão 5</h3>
            <label for=""> As pessoas comentam, às vezes, que falo pouco.
                <input max="4" min="1" type="number" name="5" class="a">
            </label>

            <label for=""> Preciso saber tudo sobre o momento da empresa, com detalhes.
                <input max="4" min="1" type="number" name="5" class="ad">
            </label>

            <label for=""> Costumo fazer exercícios físicos regularmente.
                <input max="4" min="1" type="number" name="5" class="c">
            </label>

            <label for=""> Eu gosto de olhar nos olhos das pessoas quando estamos frente a frente.
                <input max="4" min="1" type="number" name="5" class="v">
            </label>
        </div>

        <div class="perguntas-6a10">
            <h3>Questão 6</h3>
            <label for=""> Sou vulnerável a demonstraçoes de afeto.
                <input max="4" min="1" type="number" name="6" class="c">
            </label>

            <label for=""> Repito várias vezes os nomes para gravar melhor.
                <input max="4" min="1" type="number" name="6" class="a">
            </label>

            <label for=""> O meu escritório e eníeitado com flores e quadros.
                <input max="4" min="1" type="number" name="6" class="v">
            </label>

            <label for=""> Prefiro textos curtos e muito objetivos.
                <input max="4" min="1" type="number" name="6" class="ad">
            </label>

            <h3>Questão 7</h3>
            <label for=""> Gosto de estudar lendo minhas anotaçôes em voz alta.
                <input max="4" min="1" type="number" name="7" class="a">
            </label>

            <label for=""> Gosto mais de falar bem baixo.
                <input max="4" min="1" type="number" name="7" class="c">
            </label>

            <label for=""> Preciso saber qual e o fundamento dessa noticia.
                <input max="4" min="1" type="number" name="7" class="ad">
            </label>

            <label for=""> Tenho belas e agradáveis lembranças das brincadeiras da infância.
                <input max="4" min="1" type="number" name="7" class="v">
            </label>

            <h3>Questão 8</h3>
            <label for=""> Tenho prazer em ler livros, jornais e revista.
                <input max="4" min="1" type="number" name="8" class="v">
            </label>

            <label for=""> Não estou entendendo a lógica deste jogo.
                <input max="4" min="1" type="number" name="8" class="ad">
            </label>

            <label for=""> Presto muita atenção em tudo que é dito em reunião.
                <input max="4" min="1" type="number" name="8" class="a">
            </label>

            <label for=""> Gosto de trabalhos manuais e tenho habilidade manual.
                <input max="4" min="1" type="number" name="8" class="c">
            </label>

            <h3>Questão 9</h3>
            <label for=""> Eu fico imaginando as vantagens de ser mais racional.
                <input max="4" min="1" type="number" name="9" class="ad">
            </label>

            <label for=""> Gosto de seguir as receitas rigorosamente na cozinha.
                <input max="4" min="1" type="number" name="9" class="v">
            </label>

            <label for=""> Gosto de me espreguiçar quando acordo de manhã.
                <input max="4" min="1" type="number" name="9" class="c">
            </label>

            <label for=""> Eu me considero um bom ouvinte.
                <input max="4" min="1" type="number" name="9" class="a">
            </label>

            <h3>Questão 10</h3>
            <label for=""> O que mais me influência em uma negociação é a lógica dos argumentos da outra pessoa.
                <input max="4" min="1" type="number" name="10" class="ad">
            </label>

            <label for=""> Preciso de um mapa para me localizar em local desconhecido.
                <input max="4" min="1" type="number" name="10" class="v">
            </label>

            <label for=""> Gosto também de falar com animais e plantas.
                <input max="4" min="1" type="number" name="10" class="a">
            </label>

            <label for=""> Um bom banho quente é excelente no fim do dia.
                <input max="4" min="1" type="number" name="10" class="c">
            </label>
        </div>
        <div class="container-botao">
            <button type="button" class="botao" onclick="submitInput()">
                Gravar Respostas
            </button>
        </div>
    </div>
    <div class="resultados">
        <form action="./sql.php" method="POST" name="form">
            <input type="hidden" name="email" value="<?php echo $email ?>">
            <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
            <h3 style="color: red;">SEUS RESULTADOS :</h3>
            <label for="">A </label>
            <input type="number" name="A" id="result-a" readonly>
            <label for="">C </label>
            <input type="number" name="C" id="result-c" readonly>
            <label for="">V </label>
            <input type="number" name="V" id="result-v" readonly>
            <label for="">AD </label>
            <input type="number" name="AD" id="result-ad" readonly>
            <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS" style="height: 30px; margin-left: 15px;">
        </form>
    </div>
</body>

<script>
    function submitInput() {

        alert("CONFIRA OS DADOS NA TABELA ANTES DE ENVIAR")

        a = document.getElementsByClassName('a');
        c = document.getElementsByClassName('c');
        v = document.getElementsByClassName('v');
        ad = document.getElementsByClassName('ad');

        somaA = 0;
        for (i = 0; i < a.length; i++) {
            if (a[i].value < 1 || a[i].value > 4) {
                alert("Questão " + (i + 1) + " com valores acima ou abaixo do esperado");
            }
            if (a[i].value == c[i].value || a[i].value == v[i].value || a[i].value == ad[i.value]) {
                alert("Questão " + (i + 1) + " com valores iguais");
                break;
            }
            somaA += Number(a[i].value);
        }

        somaC = 0;
        for (i = 0; i < c.length; i++) {
            if (c[i].value < 1 || c[i].value > 4) {
                alert("Questão " + (i + 1) + " com valores incorretos");
            }
            if (c[i].value == a[i].value || c[i].value == v[i].value || c[i].value == ad[i.value]) {
                alert("Questão " + (i + 1) + " com valores iguais");
                break;
            }
            somaC += Number(c[i].value);
        }

        somaV = 0;
        for (i = 0; i < v.length; i++) {
            if (v[i].value < 1 || v[i].value > 4) {
                alert("Questão " + (i + 1) + " com valores incorretos");
            }
            if (v[i].value == c[i].value || v[i].value == a[i].value || v[i].value == ad[i.value]) {
                alert("Questão " + (i + 1) + " com valores iguais");
                break;
            }
            somaV += Number(v[i].value);
        }

        somaAD = 0;
        for (i = 0; i < ad.length; i++) {
            if (ad[i].value < 1 || ad[i].value > 4) {
                alert("Questão " + (i + 1) + " com valores incorretos");
            }
            if (ad[i].value == c[i].value || ad[i].value == v[i].value || ad[i].value == a[i.value]) {
                alert("Questão " + (i + 1) + " com valores iguais");
                break;
            }
            somaAD += Number(ad[i].value);
        }

        document.getElementById("result-a").value = somaA;
        document.getElementById("result-c").value = somaC;
        document.getElementById("result-v").value = somaV;
        document.getElementById("result-ad").value = somaAD;
    }
</script>

</html>