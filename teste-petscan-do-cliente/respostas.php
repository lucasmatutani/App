<?php
include_once "../includes/connection.php";
session_start();
$usuario = $_SESSION['usuario'];

if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}

$data = $conn->query("SELECT * FROM teste_petscan_do_cliente ORDER BY email ASC");
if (!empty($data)) {
    $row = mysqli_fetch_assoc($data);
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

    <form id="form" action="./session.php" method="POST" style="display: flex; align-items: center; justify-content: center;">
        <input type="hidden" name="usuario_email" id="usuario_email" value="">
        <select class="form-select col-5 mt-5" name="usuarios" id="usuarios" style="font-size: 1.5em; width: 25vw;" onchange="submitForm(event)">
            <option><?php echo (!empty($_SESSION['usuario_email'])) ? $_SESSION['usuario_email'] : 'Selecione um usuário' ?></option>
            <?php if (!empty($data)) { ?>
                <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                    <option value="<?php echo $row['usuario_id'] ?>"><?php echo $row['email'] ?></option>
                <?php } ?>
            <?php } ?>
        </select>
    </form>

    <?php
    if (!empty($_SESSION['usuario'])) {
        @$query = $conn->query("SELECT * FROM teste_petscan_do_cliente WHERE usuario_id = $usuario");
        @$row = @mysqli_fetch_assoc($query);
        if (empty($query)) {
            session_destroy();
            header("location: ./respostas.php");
        }
    ?>

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
                <textarea name="txt1" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt1']; ?></textarea>
                <textarea name="txt2" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt2']; ?></textarea>
                <textarea name="txt3" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt3']; ?></textarea>
                <textarea name="txt4" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt4']; ?></textarea>

                <div class="name-processos"> Stakeholders </div>
                <div class="name-processos" id="logistica"> Logística </div>
                <textarea name="txt5" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt5']; ?></textarea>
                <textarea name="txt6" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt6']; ?></textarea>
                <textarea name="txt7" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt7']; ?></textarea>
                <textarea name="txt8" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt8']; ?></textarea>


                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Compras</div>
                <textarea name="txt9" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt9']; ?></textarea>
                <textarea name="txt10" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt10']; ?></textarea>
                <textarea name="txt11" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt11']; ?></textarea>
                <textarea name="txt12" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt12']; ?></textarea>


                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Trade</div>
                <textarea name="txt13" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt13']; ?></textarea>
                <textarea name="txt14" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt14']; ?></textarea>
                <textarea name="txt15" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt15']; ?></textarea>
                <textarea name="txt16" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt16']; ?></textarea>


                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Financeiro</div>
                <textarea name="txt17" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt17']; ?></textarea>
                <textarea name="txt18" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt18']; ?></textarea>
                <textarea name="txt19" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt19']; ?></textarea>
                <textarea name="txt20" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt20']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Diretoria</div>
                <textarea name="txt21" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt21']; ?></textarea>
                <textarea name="txt22" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt22']; ?></textarea>
                <textarea name="txt23" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt23']; ?></textarea>
                <textarea name="txt24" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt24']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos" id="tabloide"> Tablóide</div>
                <textarea name="txt25" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt25']; ?></textarea>
                <textarea name="txt26" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt26']; ?></textarea>
                <textarea name="txt27" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt27']; ?></textarea>
                <textarea name="txt28" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt28']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Gerenciamento de Categoria</div>
                <textarea name="txt29" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt29']; ?></textarea>
                <textarea name="txt30" id="" cols="20" rows="4"> <?php if (!empty($row)) echo $row['txt30']; ?></textarea>
                <textarea name="txt31" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt31']; ?></textarea>
                <textarea name="txt32" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt32']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Preço</div>
                <textarea name="txt33" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt33']; ?></textarea>
                <textarea name="txt34" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt34']; ?></textarea>
                <textarea name="txt35" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt35']; ?></textarea>
                <textarea name="txt36" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt36']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Perdas</div>
                <textarea name="txt37" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt37']; ?></textarea>
                <textarea name="txt38" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt38']; ?></textarea>
                <textarea name="txt39" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt39']; ?></textarea>
                <textarea name="txt40" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt40']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Faturamento</div>
                <textarea name="txt41" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt41']; ?></textarea>
                <textarea name="txt42" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt42']; ?></textarea>
                <textarea name="txt43" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt43']; ?></textarea>
                <textarea name="txt44" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt44']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Treinamento</div>
                <textarea name="txt45" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt45']; ?></textarea>
                <textarea name="txt46" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt46']; ?></textarea>
                <textarea name="txt47" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt47']; ?></textarea>
                <textarea name="txt48" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt48']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> Eventos</div>
                <textarea name="txt49" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt49']; ?></textarea>
                <textarea name="txt50" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt50']; ?></textarea>
                <textarea name="txt51" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt51']; ?></textarea>
                <textarea name="txt52" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt52']; ?></textarea>

                <div class="name-processos"> Stakeholders</div>
                <div class="name-processos"> TI/Sistemas</div>
                <textarea name="txt53" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt53']; ?></textarea>
                <textarea name="txt54" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt54']; ?></textarea>
                <textarea name="txt55" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt55']; ?></textarea>
                <textarea name="txt56" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt56']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Plano Estratégico</div>
                <textarea name="txt57" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt57']; ?></textarea>
                <textarea name="txt58" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt58']; ?></textarea>
                <textarea name="txt59" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt59']; ?></textarea>
                <textarea name="txt60" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt60']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Informações Financeiras (Balanço)</div>
                <textarea name="txt61" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt61']; ?></textarea>
                <textarea name="txt62" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt62']; ?></textarea>
                <textarea name="txt63" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt63']; ?></textarea>
                <textarea name="txt64" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt64']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Posicionamento/Imagem</div>
                <textarea name="txt65" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt65']; ?></textarea>
                <textarea name="txt66" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt66']; ?></textarea>
                <textarea name="txt67" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt67']; ?></textarea>
                <textarea name="txt68" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt68']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Público Alvo</div>
                <textarea name="txt69" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt69']; ?></textarea>
                <textarea name="txt70" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt70']; ?></textarea>
                <textarea name="txt71" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt71']; ?></textarea>
                <textarea name="txt72" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt72']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Promoção</div>
                <textarea name="txt73" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt73']; ?></textarea>
                <textarea name="txt74" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt74']; ?></textarea>
                <textarea name="txt75" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt75']; ?></textarea>
                <textarea name="txt76" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt76']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Mídias Sociais</div>
                <textarea name="txt77" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt77']; ?></textarea>
                <textarea name="txt78" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt78']; ?></textarea>
                <textarea name="txt79" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt79']; ?></textarea>
                <textarea name="txt80" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt80']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Objetivos do Cliente com suas Categorias</div>
                <textarea name="txt81" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt81']; ?></textarea>
                <textarea name="txt82" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt82']; ?></textarea>
                <textarea name="txt83" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt83']; ?></textarea>
                <textarea name="txt84" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt84']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Relevancia da Cat Para o Cliente</div>
                <textarea name="txt85" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt85']; ?></textarea>
                <textarea name="txt86" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt86']; ?></textarea>
                <textarea name="txt87" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt87']; ?></textarea>
                <textarea name="txt88" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt88']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Tradebook</div>
                <textarea name="txt89" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt89']; ?></textarea>
                <textarea name="txt90" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt90']; ?></textarea>
                <textarea name="txt91" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt91']; ?></textarea>
                <textarea name="txt92" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt92']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Calendário Promocional do Cliente</div>
                <textarea name="txt93" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt93']; ?></textarea>
                <textarea name="txt94" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt94']; ?></textarea>
                <textarea name="txt95" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt95']; ?></textarea>
                <textarea name="txt96" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt96']; ?></textarea>

                <div class="name-processos"> Estratégia</div>
                <div class="name-processos"> Margem da Categoria</div>
                <textarea name="txt97" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt97']; ?></textarea>
                <textarea name="txt98" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt98']; ?></textarea>
                <textarea name="txt99" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt99']; ?></textarea>
                <textarea name="txt100" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt100']; ?></textarea>

                <div class="name-processos"> Processos</div>
                <div class="name-processos"> Politica de Trocas</div>
                <textarea name="txt101" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt101']; ?></textarea>
                <textarea name="txt102" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt102']; ?></textarea>
                <textarea name="txt103" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt103']; ?></textarea>
                <textarea name="txt104" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt104']; ?></textarea>

                <div class="name-processos"> Processos</div>
                <div class="name-processos"> Politica de Introdução de Novos SKUs</div>
                <textarea name="txt105" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt105']; ?></textarea>
                <textarea name="txt106" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt106']; ?></textarea>
                <textarea name="txt107" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt107']; ?></textarea>
                <textarea name="txt108" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt108']; ?></textarea>

                <div class="name-processos"> Processos</div>
                <div class="name-processos"> Regas de Negócios Para Estoque</div>
                <textarea name="txt109" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt109']; ?></textarea>
                <textarea name="txt110" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt110']; ?></textarea>
                <textarea name="txt111" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt111']; ?></textarea>
                <textarea name="txt112" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt112']; ?></textarea>

                <div class="name-processos"> Processos</div>
                <div class="name-processos"> Composição de Margem</div>
                <textarea name="txt113" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt113']; ?></textarea>
                <textarea name="txt114" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt114']; ?></textarea>
                <textarea name="txt115" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt115']; ?></textarea>
                <textarea name="txt116" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt116']; ?></textarea>

                <div class="name-processos"> Processos</div>
                <div class="name-processos"> Logistica Interna</div>
                <textarea name="txt117" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt117']; ?></textarea>
                <textarea name="txt118" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt118']; ?></textarea>
                <textarea name="txt119" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt119']; ?></textarea>
                <textarea name="txt120" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt120']; ?></textarea>

                <div class="name-processos"> Processos</div>
                <div class="name-processos"> Pedidos</div>
                <textarea name="txt121" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt121']; ?></textarea>
                <textarea name="txt122" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt122']; ?></textarea>
                <textarea name="txt123" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt123']; ?></textarea>
                <textarea name="txt124" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt124']; ?></textarea>

                <div class="name-processos"> Processos</div>
                <div class="name-processos"> Logística com os Fornecedores</div>

                <textarea name="txt125" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt125']; ?></textarea>
                <textarea name="txt126" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt126']; ?></textarea>
                <textarea name="txt127" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt127']; ?></textarea>
                <textarea name="txt128" id="" cols="20" rows="4"><?php if (!empty($row)) echo $row['txt128']; ?></textarea>
            </div>
        </div>
</body>
<?php } ?>
<script>
    function submitForm(event) {

        var emailSelecionado = document.getElementById("usuarios");
        var email = emailSelecionado.options[emailSelecionado.selectedIndex].textContent;
        var inputEmail = document.getElementById("usuario_email");
        inputEmail.value = email;

        document.getElementById("form").submit();
    }
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