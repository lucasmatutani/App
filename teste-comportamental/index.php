<?php
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/532ecf1f07.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <title>AVALIAÇÃO DE PERFIL COMPORTAMENTAL</title>
</head>

<body>
    <a class="btn-voltar" href="../index.php"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
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
            <label for=""> Idealista, criativo e visionário
                <input value="i" name=1 type="radio"></label><br>

            <label for=""> Divertido, espiritual e benéfico
                <input value="c" name=1 type="radio"></label><br>

            <label for=""> Confiável, meticuloso e previsível
                <input value="o" name=1 type="radio"></label><br>

            <label for=""> Focado, determinado e persistente
                <input value="a" name=1 type="radio"></label><br>

            <p>2. Eu gosto de. ....</p>
            <label for=""> Ser piloto
                <input value="a" name=2 type="radio"> <br></label>

            <label for=""> Conversar com os passageiros
                <input value="c" name=2 type="radio"> <br></label>

            <label for=""> Planejar a viagem
                <input value="o" name=2 type="radio"> <br></label>

            <label for=""> Explorar novas rotas
                <input value="i" name=2 type="radio"> <br></label>

            <p>3. Se você quiser se dar bem comigo...</p>
            <label for=""> Me dê liberdade
                <input value="i" name=3 type="radio"> <br></label>

            <label for=""> Me deixe saber sua expectativa
                <input value="o" name=3 type="radio"> <br></label>

            <label for=""> Lidere, siga ou saia do caminho
                <input value="a" name=3 type="radio"> <br></label>

            <label for=""> Seja amigável, carinhoso e compreensivo
                <input value="c" name=3 type="radio"> <br></label>

            <p>4. Para conseguir obter bons resultados é preciso...</p>
            <label for=""> Ter incertezas
                <input value="i" name=4 type="radio"> <br></label>

            <label for=""> Controlar o essencial
                <input value="o" name=4 type="radio"> <br></label>

            <label for=""> Diversão e celebração
                <input value="c" name=4 type="radio"> <br></label>

            <label for=""> Planejar e obter recursos
                <input value="a" name=4 type="radio"> <br></label>

            <p>5. Eu me divirto quando...</p>
            <label for=""> Estou me exercitando
                <input value="a" name=5 type="radio"> <br></label>

            <label for=""> Tenho novidades
                <input value="i" name=5 type="radio"> <br></label>

            <label for=""> Estou com os outros
                <input value="c" name=5 type="radio"> <br></label>

            <label for=""> Determino as regras
                <input value="o" name=5 type="radio"> <br></label>

            <p>6. Eu penso que...</p>
            <label for="">Unidos venceremos, divididos perderemos
                <input value="c" name=6 type="radio"> <br></label>

            <label for="">O ataque é melhor que a defesa
                <input value="a" name=6 type="radio"> <br></label>

            <label for=""> É bom ser manso, mas andar com um porrete
                <input value="i" name=6 type="radio"> <br></label>

            <label for=""> Um homem prevenido vale por dois
                <input value="o" name=6 type="radio"> <br></label>

            <p>7. Minha preocupação é...</p>
            <label for=""> Gerar a ideia global
                <input value="i" name=7 type="radio"> <br></label>

            <label for=""> Fazer com que as pessoas gostem
                <input value="c" name=7 type="radio"> <br></label>

            <label for=""> Fazer com que funcione
                <input value="o" name=7 type="radio"> <br></label>

            <label for=""> Fazer com que aconteça
                <input value="a" name=7 type="radio"> <br></label>

            <P>8. Eu prefiro</P>
            <label for=""> Perguntas a respostas
                <input value="i" name=8 type="radio"> <br></label>

            <label for=""> Ter todos os detalhes
                <input value="o" name=8 type="radio"> <br></label>

            <label for=""> Vantagens a meu favor
                <input value="a" name=8 type="radio"> <br></label>

            <label for=""> Que todos tenham a chance de serem ouvidos
                <input value="c" name=8 type="radio"> <br></label>

            <p>9. Eu gosto de...</p>
            <label for=""> Fazer progesso
                <input value="a" name=9 type="radio"> <br></label>

            <label for=""> Construir memórias
                <input value="i" name=9 type="radio"> <br></label>

            <label for=""> Fazer sentido
                <input value="o" name=9 type="radio"> <br></label>

            <label for=""> Tornar as pessoas confortáveis
                <input value="c" name=9 type="radio"> <br></label>

            <p>10. Eu gosto de chegar...</p>
            <label for=""> Na frente
                <input value="a" name=10 type="radio"> <br></label>

            <label for=""> Junto
                <input value="c" name=10 type="radio"> <br></label>

            <label for=""> Na hora
                <input value="o" name=10 type="radio"> <br></label>

            <label for=""> Em outro lugar
                <input value="i" name=10 type="radio"> <br></label>

            <p>11. Um ótimo dia para mim é quando...</p>
            <label for=""> Consigo fazer muitas coisas
                <input value="a" name=11 type="radio"> <br></label>

            <label for=""> Me divirto com meus amigos
                <input value="c" name=11 type="radio"> <br></label>

            <label for=""> Tudo segue conforme planejado
                <input value="o" name=11 type="radio"> <br></label>

            <label for=""> Desfruto de coisas novas e estimulantes
                <input value="i" name=11 type="radio"> <br></label>

            <p>12. Eu vejo a morte como...</p>
            <label for=""> Uma grande aventura misteriosa
                <input value="i" name=12 type="radio"> <br></label>

            <label for=""> Oportunidade para rever os falecidos
                <input value="c" name=12 type="radio"> <br></label>

            <label for=""> Um modo de receber recompensas
                <input value="o" name=12 type="radio"> <br></label>

            <label for=""> Algo que sempre chega muito cedo
                <input value="a" name=12 type="radio"> <br></label>

            <p>13. Minha filosofia de vida é...</p>
            <label for=""> Há ganhadores e perdedores, e eu acredito ser um ganhador
                <input value="a" name=13 type="radio"> <br></label>

            <label for=""> Para eu ganhar, ninguém precisa perder
                <input value="c" name=13 type="radio"> <br></label>

            <label for=""> Para ganhar, é preciso seguir as regras
                <input value="o" name=13 type="radio"> <br></label>

            <label for=""> Para ganhar, é necessário inventar novas regras
                <input value="i" name=13 type="radio"> <br></label>

        </div>

        <div>

            <P>14. Eu sempre gostei de...</P>
            <label for=""> Explorar
                <input value="i" name=14 type="radio"> <br></label>

            <label for=""> Evitar surpresas
                <input value="o" name=14 type="radio"> <br></label>

            <label for=""> Focalizar a meta
                <input value="a" name=14 type="radio"> <br></label>

            <label for=""> Realizar uma abordagem natural
                <input value="c" name=14 type="radio"> <br></label>

            <p>15. Eu gosto de mudanças se</p>
            <label for=""> Me der uma vantagem competitiva
                <input value="a" name=15 type="radio"> <br></label>

            <label for=""> For divertido e puder ser compartilhado
                <input value="c" name=15 type="radio"> <br></label>

            <label for=""> Me der mais liberdade e variedade
                <input value="i" name=15 type="radio"> <br></label>

            <label for=""> Melhorar ou me der mais controle
                <input value="o" name=15 type="radio"> <br></label>

            <P>16. Não existe nada de errado em... </P>
            <label for=""> Se colocar na frente
                <input value="a" name=16 type="radio"> <br></label>

            <label for=""> Colocar os outros na frente
                <input value="c" name=16 type="radio"> <br></label>

            <label for=""> Mudar de ideia
                <input value="i" name=16 type="radio"> <br></label>

            <label for=""> Ser consistente
                <input value="o" name=16 type="radio"> <br></label>

            <P>17. Eu gosto de buscar conselhos de... </P>
            <label for=""> Pessoas bem sucedidas
                <input value="a" name=17 type="radio"> <br></label>

            <label for=""> Anciões e conselheiros
                <input value="c" name=17 type="radio"> <br></label>

            <label for=""> Autoridades no assunto
                <input value="o" name=17 type="radio"> <br></label>

            <label for=""> Lugares, os mais estranhos
                <input value="i" name=17 type="radio"> <br></label>

            <p>18. Meu lema é... </p>
            <label for=""> Fazer o que precisa ser feito
                <input value="i" name=18 type="radio"> <br></label>

            <label for=""> Fazer bem feito
                <input value="o" name=18 type="radio"> <br></label>

            <label for=""> Fazer junto com o grupo
                <input value="c" name=18 type="radio"> <br></label>

            <label for=""> Simplesmente fazer
                <input value="a" name=18 type="radio"> <br></label>

            <p>19. Eu gosto de...</p>
            <label for=""> Complexidade, mesmo se confuso
                <input value="i" name=19 type="radio"> <br></label>

            <label for=""> Ordem e sistematização
                <input value="o" name=19 type="radio"> <br></label>

            <label for=""> Calor humano e animação
                <input value="c" name=19 type="radio"> <br></label>

            <label for=""> Coisas claras e simples
                <input value="a" name=19 type="radio"> <br></label>

            <p>20. Tempo para mim é...</p>
            <label for=""> Algo que detesto desperdiçar
                <input value="a" name="20" type="radio"> <br></label>

            <label for=""> Um grande ciclo
                <input value="c" name=20 type="radio"> <br></label>

            <label for=""> Uma flecha que leva ao inevitável
                <input value="o" name=20 type="radio"> <br></label>

            <label for=""> Irrelevante
                <input value="i" name=20 type="radio"> <br></label>

            <p>21. Se eu fosse bilionário...</p>
            <label for=""> Faria doações para muitas entidades
                <input value="c" name=21 type="radio"> <br></label>

            <label for=""> Criaria uma poupança avantajada
                <input value="o" name=21 type="radio"> <br></label>

            <label for=""> Faria o que desse na cabeça
                <input value="i" name=21 type="radio"> <br></label>

            <label for=""> Me exibiria bastante para algumas pessoas
                <input value="a" name=21 type="radio"> <br></label>

            <P>22. Eu acredito que...</P>
            <label for="">O destino é mais importante que a jornada
                <input value="a" name=22 type="radio"> <br></label>

            <label for=""> jornada é mais importante que o destino
                <input value="c" name=22 type="radio"> <br></label>

            <label for=""> Um centavo economizado é um centavo ganho
                <input value="o" name=22 type="radio"> <br></label>

            <label for=""> Bastam um navio e uma estrela para navegar
                <input value="i" name=22 type="radio"> <br></label>

            <P>23. Eu acredito também que... </P>
            <label for=""> Aquele que hesita está perdido
                <input value="a" name=23 type="radio"> <br></label>

            <label for=""> De grão em grão a galinha enche o papo
                <input value="o" name=23 type="radio"> <br></label>

            <label for="">O que vai, volta
                <input value="c" name=23 type="radio"> <br></label>

            <label for=""> Um sorriso ou uma careta é o mesmo para quem é cego
                <input value="i" name=23 type="radio"> <br></label>

            <P>24. Eu acredito ainda que...</P>
            <label for=""> É melhor prudência do que arrependimento
                <input value="o" name=24 type="radio"> <br></label>

            <label for="">A autoridade deve ser desafiada
                <input value="i" name=24 type="radio"> <br></label>

            <label for=""> Ganhar é fundamental
                <input value="a" name=24 type="radio"> <br></label>

            <label for="">O coletivo é mais importante do que o individual
                <input value="c" name=24 type="radio"> <br></label>

            <p>25. Eu penso que...</p>
            <label for=""> Não é fácil ficar encurralado
                <input value="i" name=25 type="radio"> <br></label>

            <label for=""> É preferível olhar, antes de pular
                <input value="o" name=25 type="radio"> <br></label>

            <label for=""> Duas cabeças pensam melhor do que uma
                <input value="c" name=25 type="radio"> <br></label>

            <label for=""> Se você não tem condições de competir, não compita
                <input value="a" name=25 type="radio"> <br></label>

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
            <!-- <div class="container-infos">
                <label for="nome">Nome e Sobrenome</label>
                <input type="text" name="nome" id="nome" required style="height: 30px;">
                <label for="nome">Empresa</label>
                <input type="text" name="empresa" id="empresa" required style="height: 30px;">
                <label for="nome">Email</label>
                <input type="text" placeholder="Opcional" name="email" id="email" style="height: 30px;">
            </div> -->
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

            alert("DIGITE SEU NOME, SOBRENOME E CONFIRA OS DADOS NA TABELA ANTES DE ENVIAR")
        }
    }
</script>


</html>