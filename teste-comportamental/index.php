<?php
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}
$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/532ecf1f07.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <title>AVALIAÇÃO DE PERFIL COMPORTAMENTAL</title>
</head>

<body>
    <a class="btn-voltar" href=" http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-header">
        <div class="containerTitulo">
            <img src="../assets/img/logo-focustrade.jpeg" alt="logo" style="min-width: 300px;">
            <h1> AVALIAÇÃO DE PERFIL COMPORTAMENTAL</h1>
            <h2> Em cada uma das 25 questões a seguir, escolha uma alternativa e marque-a no espaço
                correspondente.</h2>
        </div>
    </div>

    <div class="containerPerguntas">
        <div>

            <P>1. Eu sou. ............. </P>
            <input value="i" name=1 type="radio">
            <label for=""> Idealista, criativo e visionário</label><br>

            <input value="c" name=1 type="radio">
            <label for=""> Divertido, espiritual e benéfico</label><br>

            <input value="o" name=1 type="radio">
            <label for=""> Confiável, meticuloso e previsível</label><br>

            <input value="a" name=1 type="radio">
            <label for=""> Focado, determinado e persistente</label><br>

            <p>2. Eu gosto de. ....</p>
            <input value="a" name=2 type="radio">
            <label for=""> Ser piloto <br></label>

            <input value="c" name=2 type="radio">
            <label for=""> Conversar com os passageiros<br></label>

            <input value="o" name=2 type="radio">
            <label for=""> Planejar a viagem <br></label>

            <input value="i" name=2 type="radio">
            <label for=""> Explorar novas rotas<br></label>

            <p>3. Se você quiser se dar bem comigo...</p>
            <input value="i" name=3 type="radio">
            <label for=""> Me dê liberdade<br></label>

            <input value="o" name=3 type="radio">
            <label for=""> Me deixe saber sua expectativa<br></label>

            <input value="a" name=3 type="radio">
            <label for=""> Lidere, siga ou saia do caminho<br></label>

            <input value="c" name=3 type="radio">
            <label for=""> Seja amigável, carinhoso e compreensivo<br></label>

            <p>4. Para conseguir obter bons resultados é preciso...</p>
            <input value="i" name=4 type="radio">
            <label for=""> Ter incertezas<br></label>

            <input value="o" name=4 type="radio">
            <label for=""> Controlar o essencial<br></label>

            <input value="c" name=4 type="radio">
            <label for=""> Diversão e celebração<br></label>

            <input value="a" name=4 type="radio">
            <label for=""> Planejar e obter recursos<br></label>

            <p>5. Eu me divirto quando...</p>
            <input value="a" name=5 type="radio">
            <label for=""> Estou me exercitando <br></label>

            <input value="i" name=5 type="radio">
            <label for=""> Tenho novidades<br></label>

            <input value="c" name=5 type="radio">
            <label for=""> Estou com os outros<br></label>

            <input value="o" name=5 type="radio">
            <label for=""> Determino as regras <br></label>

            <p>6. Eu penso que...</p>
            <input value="c" name=6 type="radio">
            <label for="">Unidos venceremos, divididos perderemos <br></label>

            <input value="a" name=6 type="radio">
            <label for="">O ataque é melhor que a defesa<br></label>

            <input value="i" name=6 type="radio">
            <label for=""> É bom ser manso, mas andar com um porrete<br></label>

            <input value="o" name=6 type="radio">
            <label for=""> Um homem prevenido vale por dois<br></label>

            <p>7. Minha preocupação é...</p>
            <input value="i" name=7 type="radio">
            <label for=""> Gerar a ideia global<br></label>

            <input value="c" name=7 type="radio">
            <label for=""> Fazer com que as pessoas gostem<br></label>

            <input value="o" name=7 type="radio">
            <label for=""> Fazer com que funcione<br></label>

            <input value="a" name=7 type="radio">
            <label for=""> Fazer com que aconteça<br></label>

            <P>8. Eu prefiro</P>
            <input value="i" name=8 type="radio">
            <label for=""> Perguntas a respostas<br></label>

            <input value="o" name=8 type="radio">
            <label for=""> Ter todos os detalhes <br></label>

            <input value="a" name=8 type="radio">
            <label for=""> Vantagens a meu favor<br></label>

            <input value="c" name=8 type="radio">
            <label for=""> Que todos tenham a chance de serem ouvidos<br></label>

            <p>9. Eu gosto de...</p>
            <input value="a" name=9 type="radio">
            <label for=""> Fazer progesso<br></label>

            <input value="i" name=9 type="radio">
            <label for=""> Construir memórias<br></label>

            <input value="o" name=9 type="radio">
            <label for=""> Fazer sentido<br></label>

            <input value="c" name=9 type="radio">
            <label for=""> Tornar as pessoas confortáveis<br></label>

            <p>10. Eu gosto de chegar...</p>
            <input value="a" name=10 type="radio">
            <label for=""> Na frente <br></label>

            <input value="c" name=10 type="radio">
            <label for=""> Junto <br></label>

            <input value="o" name=10 type="radio">
            <label for=""> Na hora<br></label>

            <input value="i" name=10 type="radio">
            <label for=""> Em outro lugar<br></label>

            <p>11. Um ótimo dia para mim é quando...</p>
            <input value="a" name=11 type="radio">
            <label for=""> Consigo fazer muitas coisas<br></label>

            <input value="c" name=11 type="radio">
            <label for=""> Me divirto com meus amigos<br></label>

            <input value="o" name=11 type="radio">
            <label for=""> Tudo segue conforme planejado<br></label>

            <input value="i" name=11 type="radio">
            <label for=""> Desfruto de coisas novas e estimulantes<br></label>

            <p>12. Eu vejo a morte como...</p>
            <input value="i" name=12 type="radio">
            <label for=""> Uma grande aventura misteriosa<br></label>

            <input value="c" name=12 type="radio">
            <label for=""> Oportunidade para rever os falecidos<br></label>

            <input value="o" name=12 type="radio">
            <label for=""> Um modo de receber recompensas<br></label>

            <input value="a" name=12 type="radio">
            <label for=""> Algo que sempre chega muito cedo<br></label>

            <p>13. Minha filosofia de vida é...</p>
            <input value="a" name=13 type="radio">
            <label for=""> Há ganhadores e perdedores, e eu acredito ser um ganhador<br></label>

            <input value="c" name=13 type="radio">
            <label for=""> Para eu ganhar, ninguém precisa perder<br></label>

            <input value="o" name=13 type="radio">
            <label for=""> Para ganhar, é preciso seguir as regras<br></label>

            <input value="i" name=13 type="radio">
            <label for=""> Para ganhar, é necessário inventar novas regras<br></label>

        </div>

        <div>

            <P>14. Eu sempre gostei de...</P>
            <input value="i" name=14 type="radio">
            <label for=""> Explorar<br></label>

            <input value="o" name=14 type="radio">
            <label for=""> Evitar surpresas<br></label>

            <input value="a" name=14 type="radio">
            <label for=""> Focalizar a meta<br></label>

            <input value="c" name=14 type="radio">
            <label for=""> Realizar uma abordagem natural<br></label>

            <p>15. Eu gosto de mudanças se</p>
            <input value="a" name=15 type="radio">
            <label for=""> Me der uma vantagem competitiva<br></label>

            <input value="c" name=15 type="radio">
            <label for=""> For divertido e puder ser compartilhado<br></label>

            <input value="i" name=15 type="radio">
            <label for=""> Me der mais liberdade e variedade<br></label>

            <input value="o" name=15 type="radio">
            <label for=""> Melhorar ou me der mais controle<br></label>

            <P>16. Não existe nada de errado em... </P>
            <input value="a" name=16 type="radio">
            <label for=""> Se colocar na frente<br></label>

            <input value="c" name=16 type="radio">
            <label for=""> Colocar os outros na frente<br></label>

            <input value="i" name=16 type="radio">
            <label for=""> Mudar de ideia<br></label>

            <input value="o" name=16 type="radio">
            <label for=""> Ser consistente<br></label>

            <P>17. Eu gosto de buscar conselhos de... </P>
            <input value="a" name=17 type="radio">
            <label for=""> Pessoas bem sucedidas <br></label>

            <input value="c" name=17 type="radio">
            <label for=""> Anciões e conselheiros<br></label>

            <input value="o" name=17 type="radio">
            <label for=""> Autoridades no assunto<br></label>

            <input value="i" name=17 type="radio">
            <label for=""> Lugares, os mais estranhos<br></label>

            <p>18. Meu lema é... </p>
            <input value="i" name=18 type="radio">
            <label for=""> Fazer o que precisa ser feito <br></label>

            <input value="o" name=18 type="radio">
            <label for=""> Fazer bem feito<br></label>

            <input value="c" name=18 type="radio">
            <label for=""> Fazer junto com o grupo<br></label>

            <input value="a" name=18 type="radio">
            <label for=""> Simplesmente fazer<br></label>

            <p>19. Eu gosto de...</p>
            <input value="i" name=19 type="radio">
            <label for=""> Complexidade, mesmo se confuso<br></label>

            <input value="o" name=19 type="radio">
            <label for=""> Ordem e sistematização<br></label>


            <input value="c" name=19 type="radio">
            <label for=""> Calor humano e animação<br></label>

            <input value="a" name=19 type="radio">
            <label for=""> Coisas claras e simples<br></label>

            <p>20. Tempo para mim é...</p>
            <input value="a" name="20" type="radio">
            <label for=""> Algo que detesto desperdiçar <br></label>

            <input value="c" name=20 type="radio">
            <label for=""> Um grande ciclo<br></label>

            <input value="o" name=20 type="radio">
            <label for=""> Uma flecha que leva ao inevitável<br></label>

            <input value="i" name=20 type="radio">
            <label for=""> Irrelevante<br></label>

            <p>21. Se eu fosse bilionário...</p>
            <input value="c" name=21 type="radio">
            <label for=""> Faria doações para muitas entidades<br></label>

            <input value="o" name=21 type="radio">
            <label for=""> Criaria uma poupança avantajada<br></label>

            <input value="i" name=21 type="radio">
            <label for=""> Faria o que desse na cabeça <br></label>

            <input value="a" name=21 type="radio">
            <label for=""> Me exibiria bastante para algumas pessoas<br></label>

            <P>22. Eu acredito que...</P>
            <input value="a" name=22 type="radio">
            <label for="">O destino é mais importante que a jornada<br></label>

            <input value="c" name=22 type="radio">
            <label for=""> jornada é mais importante que o destino<br></label>

            <input value="o" name=22 type="radio">
            <label for=""> Um centavo economizado é um centavo ganho<br></label>

            <input value="i" name=22 type="radio">
            <label for=""> Bastam um navio e uma estrela para navegar<br></label>

            <P>23. Eu acredito também que... </P>
            <input value="a" name=23 type="radio">
            <label for=""> Aquele que hesita está perdido<br></label>

            <input value="o" name=23 type="radio">
            <label for=""> De grão em grão a galinha enche o papo<br></label>

            <input value="c" name=23 type="radio">
            <label for="">O que vai, volta<br></label>

            <input value="i" name=23 type="radio">
            <label for=""> Um sorriso ou uma careta é o mesmo para quem é cego<br></label>

            <P>24. Eu acredito ainda que...</P>
            <input value="o" name=24 type="radio">
            <label for=""> É melhor prudência do que arrependimento<br></label>

            <input value="i" name=24 type="radio">
            <label for="">A autoridade deve ser desafiada<br></label>

            <input value="a" name=24 type="radio">
            <label for=""> Ganhar é fundamental<br></label>

            <input value="c" name=24 type="radio">
            <label for="">O coletivo é mais importante do que o individual<br></label>

            <p>25. Eu penso que...</p>
            <input value="i" name=25 type="radio">
            <label for=""> Não é fácil ficar encurralado<br></label>

            <input value="o" name=25 type="radio">
            <label for=""> É preferível olhar, antes de pular<br></label>

            <input value="c" name=25 type="radio">
            <label for=""> Duas cabeças pensam melhor do que uma<br></label>

            <input value="a" name=25 type="radio">
            <label for=""> Se você não tem condições de competir, não compita<br></label>

        </div>
    </div>

    <div class="container-botao">
        <button type="button" class="botao" onclick="displayRadioValue()">
            Gravar Respostas
        </button>

        <div id="result" style="display: none;">

        </div>
    </div>

    <div class="resultados">
        <form method="POST" action="./teste-comportamental.php" name="form">
            <input type="hidden" name="usuario_id" value="<?php echo $usuario_id ?>">
            <input type="hidden" name="email" value="<?php echo $email ?>">
            <h3 style="color: red;">SEUS RESULTADOS :</h3>
            <div class="container-resultados">
                <label for="aguia">Águia %</label>
                <input type="text" name="aguia" id="aguia" readonly style="width: 50px; height: 30px;">
                <label for="gato">Gato %</label>
                <input type="text" name="gato" id="gato" readonly style="width: 50px; height: 30px;">
                <label for="tubarao">Tubarão %</label>
                <input type="text" name="tubarao" id="tubarao" readonly style="width: 50px; height: 30px;">
                <label for="lobo">Lobo %</label>
                <input type="text" name="lobo" id="lobo" readonly style="width: 50px; height: 30px;">
            </div>
            <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS" style="height: 30px; margin-left: 15px;">
        </form>
    </div>

</body>

<script>
    function displayRadioValue() {

        document.getElementById("result").innerHTML = "";
        var input = document.getElementsByTagName('input');

        for (i = 0; i < 100; i++) {
            if (input[i].checked) {
                document.getElementById("result").innerHTML += input[i].value;
            }
        }

        if (document.getElementById("result").innerHTML.length < 25) {
            alert("PREENCHA TODOS AS PERGUNTAS ANTES DE CONTINUAR!")
        } else {
            var total = document.getElementById("result").innerHTML.toString();
            a = (total.match(new RegExp("a", "g")) || []).length;
            i = (total.match(new RegExp("i", "g")) || []).length;
            o = (total.match(new RegExp("o", "g")) || []).length;
            c = (total.match(new RegExp("c", "g")) || []).length;

            document.getElementById("aguia").value = i * 4;
            document.getElementById("gato").value = c * 4;
            document.getElementById("tubarao").value = a * 4;
            document.getElementById("lobo").value = o * 4;
        }
    }
</script>


</html>