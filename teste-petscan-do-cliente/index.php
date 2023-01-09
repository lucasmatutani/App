<?php
include_once "../includes/connection.php";
session_start();
$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];

if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}

$data = $conn->query("SELECT * FROM teste_petscan_do_cliente WHERE usuario_id = $usuario_id");
if (!empty($data)) {
    $linha = mysqli_fetch_assoc($data);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widdiv=device-widdiv, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Petscan Do Cliente</title>

</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>

    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>Petscan Do Cliente</h1>
    </div>

    <form action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">

        <div class="container-principal">

            <div class="tabela" id="tabela-menu">
                <div></div>
                <div></div>
                <div id="pessoas">
                    <h2>Pessoas</h2>
                </div>
                <div>
                    <h2>Processos</h2>
                </div>
                <div>
                    <h2>Relacionamento</h2>
                </div>
                <div>
                    <h2>Competências</h2>
                </div>
                <div></div>
            </div>

            <div class="container-processos">


                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos" id="marketing"> Marketing </div>
                <textarea name="txt1" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt1']; ?></textarea>
                <textarea name="txt2" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt2']; ?></textarea>
                <textarea name="txt3" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt3']; ?></textarea>
                <textarea name="txt4" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt4']; ?></textarea>

                <div class="name-processos"> Stakeholders </div>
                <div class="name-processos" id="logistica"> Logística </div>
                <textarea name="txt5" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt5']; ?></textarea>
                <textarea name="txt6" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt6']; ?></textarea>
                <textarea name="txt7" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt7']; ?></textarea>
                <textarea name="txt8" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt8']; ?></textarea>


                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Compras</div>
                <textarea name="txt9" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt9']; ?></textarea>
                <textarea name="txt10" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt10']; ?></textarea>
                <textarea name="txt11" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt11']; ?></textarea>
                <textarea name="txt12" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt12']; ?></textarea>


                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Trade</div>
                <textarea name="txt13" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt13']; ?></textarea>
                <textarea name="txt14" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt14']; ?></textarea>
                <textarea name="txt15" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt15']; ?></textarea>
                <textarea name="txt16" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt16']; ?></textarea>


                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Financeiro</div>
                <textarea name="txt17" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt17']; ?></textarea>
                <textarea name="txt18" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt18']; ?></textarea>
                <textarea name="txt19" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt19']; ?></textarea>
                <textarea name="txt20" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt20']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Diretoria</div>
                <textarea name="txt21" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt21']; ?></textarea>
                <textarea name="txt22" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt22']; ?></textarea>
                <textarea name="txt23" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt23']; ?></textarea>
                <textarea name="txt24" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt24']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos" id="tabloide"> Tablóide</div>
                <textarea name="txt25" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt25']; ?></textarea>
                <textarea name="txt26" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt26']; ?></textarea>
                <textarea name="txt27" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt27']; ?></textarea>
                <textarea name="txt28" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt28']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Gerenciamento de Categoria</div>
                <textarea name="txt29" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt29']; ?></textarea>
                <textarea name="txt30" id="" cols="20" rows="4"> <?php if (!empty($linha)) echo $linha['txt30']; ?></textarea>
                <textarea name="txt31" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt31']; ?></textarea>
                <textarea name="txt32" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt32']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Preço</div>
                <textarea name="txt33" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt33']; ?></textarea>
                <textarea name="txt34" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt34']; ?></textarea>
                <textarea name="txt35" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt35']; ?></textarea>
                <textarea name="txt36" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt36']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Perdas</div>
                <textarea name="txt37" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt37']; ?></textarea>
                <textarea name="txt38" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt38']; ?></textarea>
                <textarea name="txt39" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt39']; ?></textarea>
                <textarea name="txt40" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt40']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Faturamento</div>
                <textarea name="txt41" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt41']; ?></textarea>
                <textarea name="txt42" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt42']; ?></textarea>
                <textarea name="txt43" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt43']; ?></textarea>
                <textarea name="txt44" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt44']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Treinamento</div>
                <textarea name="txt45" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt45']; ?></textarea>
                <textarea name="txt46" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt46']; ?></textarea>
                <textarea name="txt47" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt47']; ?></textarea>
                <textarea name="txt48" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt48']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Eventos</div>
                <textarea name="txt49" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt49']; ?></textarea>
                <textarea name="txt50" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt50']; ?></textarea>
                <textarea name="txt51" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt51']; ?></textarea>
                <textarea name="txt52" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt52']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> TI/Sistemas</div>
                <textarea name="txt53" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt53']; ?></textarea>
                <textarea name="txt54" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt54']; ?></textarea>
                <textarea name="txt55" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt55']; ?></textarea>
                <textarea name="txt56" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt56']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Plano Estratégico</div>
                <textarea name="txt57" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt57']; ?></textarea>
                <textarea name="txt58" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt58']; ?></textarea>
                <textarea name="txt59" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt59']; ?></textarea>
                <textarea name="txt60" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt60']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Informações Financeiras (Balanço)</div>
                <textarea name="txt61" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt61']; ?></textarea>
                <textarea name="txt62" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt62']; ?></textarea>
                <textarea name="txt63" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt63']; ?></textarea>
                <textarea name="txt64" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt64']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Posicionamento/Imagem</div>
                <textarea name="txt65" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt65']; ?></textarea>
                <textarea name="txt66" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt66']; ?></textarea>
                <textarea name="txt67" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt67']; ?></textarea>
                <textarea name="txt68" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt68']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Público Alvo</div>
                <textarea name="txt69" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt69']; ?></textarea>
                <textarea name="txt70" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt70']; ?></textarea>
                <textarea name="txt71" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt71']; ?></textarea>
                <textarea name="txt72" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt72']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Promoção</div>
                <textarea name="txt73" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt73']; ?></textarea>
                <textarea name="txt74" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt74']; ?></textarea>
                <textarea name="txt75" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt75']; ?></textarea>
                <textarea name="txt76" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt76']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Mídias Sociais</div>
                <textarea name="txt77" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt77']; ?></textarea>
                <textarea name="txt78" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt78']; ?></textarea>
                <textarea name="txt79" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt79']; ?></textarea>
                <textarea name="txt80" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt80']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Objetivos do Cliente com suas Categorias</div>
                <textarea name="txt81" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt81']; ?></textarea>
                <textarea name="txt82" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt82']; ?></textarea>
                <textarea name="txt83" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt83']; ?></textarea>
                <textarea name="txt84" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt84']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Relevancia da Cat Para o Cliente</div>
                <textarea name="txt85" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt85']; ?></textarea>
                <textarea name="txt86" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt86']; ?></textarea>
                <textarea name="txt87" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt87']; ?></textarea>
                <textarea name="txt88" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt88']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Tradebook</div>
                <textarea name="txt89" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt89']; ?></textarea>
                <textarea name="txt90" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt90']; ?></textarea>
                <textarea name="txt91" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt91']; ?></textarea>
                <textarea name="txt92" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt92']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Calendário Promocional do Cliente</div>
                <textarea name="txt93" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt93']; ?></textarea>
                <textarea name="txt94" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt94']; ?></textarea>
                <textarea name="txt95" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt95']; ?></textarea>
                <textarea name="txt96" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt96']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Margem da Categoria</div>
                <textarea name="txt97" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt97']; ?></textarea>
                <textarea name="txt98" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt98']; ?></textarea>
                <textarea name="txt99" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt99']; ?></textarea>
                <textarea name="txt100" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt100']; ?></textarea>

                <div class="name-processos"> Processos</div>
                <div class="name-processos"> Politica de Trocas</div>
                <textarea name="txt101" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt101']; ?></textarea>
                <textarea name="txt102" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt102']; ?></textarea>
                <textarea name="txt103" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt103']; ?></textarea>
                <textarea name="txt104" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt104']; ?></textarea>

                <div class="name-processos"> Processos</div>
                <div class="name-processos"> Politica de Introdução de Novos SKUs</div>
                <textarea name="txt105" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt105']; ?></textarea>
                <textarea name="txt106" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt106']; ?></textarea>
                <textarea name="txt107" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt107']; ?></textarea>
                <textarea name="txt108" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt108']; ?></textarea>

                <div class="name-processos"> Processos</div>
                <div class="name-processos"> Regas de Negócios Para Estoque</div>
                <textarea name="txt109" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt109']; ?></textarea>
                <textarea name="txt110" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt110']; ?></textarea>
                <textarea name="txt111" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt111']; ?></textarea>
                <textarea name="txt112" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt112']; ?></textarea>

                <div class="name-processos"> Processos</div>
                <div class="name-processos"> Composição de Margem</div>
                <textarea name="txt113" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt113']; ?></textarea>
                <textarea name="txt114" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt114']; ?></textarea>
                <textarea name="txt115" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt115']; ?></textarea>
                <textarea name="txt116" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt116']; ?></textarea>

                <div class="name-processos"> Processos</div>
                <div class="name-processos"> Logistica Interna</div>
                <textarea name="txt117" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt117']; ?></textarea>
                <textarea name="txt118" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt118']; ?></textarea>
                <textarea name="txt119" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt119']; ?></textarea>
                <textarea name="txt120" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt120']; ?></textarea>

                <div class="name-processos"> Processos</div>
                <div class="name-processos"> Pedidos</div>
                <textarea name="txt121" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt121']; ?></textarea>
                <textarea name="txt122" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt122']; ?></textarea>
                <textarea name="txt123" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt123']; ?></textarea>
                <textarea name="txt124" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt124']; ?></textarea>

                <div class="name-processos"> Processos</div>
                <div class="name-processos"> Logística com os Fornecedores</div>

                <textarea name="txt125" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt125']; ?></textarea>
                <textarea name="txt126" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt126']; ?></textarea>
                <textarea name="txt127" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt127']; ?></textarea>
                <textarea name="txt128" id="" cols="20" rows="4"><?php if (!empty($linha)) echo $linha['txt128']; ?></textarea>
            </div>
        </div>

        <div class="btn-enviar">
            <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS" style="height: 30px; margin-left: 15px;">
        </div>
    </form>
</body>

<script>
    window.addEventListener("load", (event) => {
        alert("UTILIZE NO MODO PAISAGEM");
    });

    // $(window).on('scroll', function() {
    //     if ($(window).scrollTop() >= $('#tabloide').offset().top + $('#tabloide').outerHeight() - window.innerHeight) {


    //         // alert("error");
    //         document.getElementById('tabela-menu').classList.add("fixed");
    //     }
    // });

    var observer = new IntersectionObserver(function(entries) {
        // isIntersecting is true when element and viewport are overlapping
        // isIntersecting is false when element and viewport don't overlap
        if (entries[0].isIntersecting === true)
            console.log('Element has just become visible in screen');
    }, {
        threshold: [0]
    });

    observer.observe(document.querySelector("#tabloide"));
</script>

</html>