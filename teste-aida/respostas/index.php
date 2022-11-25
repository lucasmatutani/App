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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Respostas A I D A</title>
</head>

<body>

    <form action="">
        <div class="container-titulo">
            <img class="img-logo" class="img-logo" src="../../assets/img/logo-aida-sem-fundo.png" alt="">
            <h1 class="h1-equipe" id="equipe"></h1>
        </div>
        <div class="container-prod">
            <h2 id="prod1" onclick="prod1()"></h2>
            <h2 id="prod2" onclick="prod2()"></h2>
            <h2 id="prod3" onclick="prod3()"></h2>
            <h2 id="prod4" onclick="prod4()"></h2>
        </div>

        <hr color="#000" class="border">

        <div class="container-resposta" id="container1">

            <div class="container-atencao">
                <label for="">ATENÇÃO</label>
                <textarea readonly name="atencao" id="txt1" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input type="radio" name="atencao" id="">
                <label for="">implementou</label>
                <input type="radio" name="atencao" id="">
                <label for="">implementou parcialmente</label>
                <input type="radio" name="atencao" id="">
                <label for="">não implementou</label>
            </div>


            <div class="container-interesse">
                <label for="">INTERESSE</label>
                <textarea readonly name="interesse" id="txt2" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input type="radio" name="interesse" id="">
                <label for="">implementou</label>
                <input type="radio" name="interesse" id="">
                <label for="">implementou parcialmente</label>
                <input type="radio" name="interesse" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-desejo">
                <label for="">DESEJO</label>
                <textarea readonly name="desejo" id="txt3" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input type="radio" name="desejo" id="">
                <label for="">implementou</label>
                <input type="radio" name="desejo" id="">
                <label for="">implementou parcialmente</label>
                <input type="radio" name="desejo" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-acao">
                <label for="">AÇÃO</label>
                <textarea readonly name="acao" id="txt4" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input type="radio" name="acao" id="">
                <label for="">implementou</label>
                <input type="radio" name="acao" id="">
                <label for="">implementou parcialmente</label>
                <input type="radio" name="acao" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-feedback">
                <label for="">FEEDBACK</label>
                <textarea name="feedback" id="" cols="130" rows="10" -></textarea>
            </div>


        </div>

        <div class="container-resposta" id="container2" style="display: none;">

            <div class="container-atencao">
                <label for="">ATENÇÃO</label>
                <textarea readonly name="atencao" id="txt5" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input type="radio" name="atencao" id="">
                <label for="">implementou</label>
                <input type="radio" name="atencao" id="">
                <label for="">implementou parcialmente</label>
                <input type="radio" name="atencao" id="">
                <label for="">não implementou</label>
            </div>


            <div class="container-interesse">
                <label for="">INTERESSE</label>
                <textarea readonly name="interesse" id="txt6" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input type="radio" name="interesse" id="">
                <label for="">implementou</label>
                <input type="radio" name="interesse" id="">
                <label for="">implementou parcialmente</label>
                <input type="radio" name="interesse" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-desejo">
                <label for="">DESEJO</label>
                <textarea readonly name="desejo" id="txt7" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input type="radio" name="desejo" id="">
                <label for="">implementou</label>
                <input type="radio" name="desejo" id="">
                <label for="">implementou parcialmente</label>
                <input type="radio" name="desejo" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-acao">
                <label for="">AÇÃO</label>
                <textarea readonly name="acao" id="txt8" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input type="radio" name="acao" id="">
                <label for="">implementou</label>
                <input type="radio" name="acao" id="">
                <label for="">implementou parcialmente</label>
                <input type="radio" name="acao" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-feedback">
                <label for="">FEEDBACK</label>
                <textarea name="feedback" id="" cols="130" rows="10" -></textarea>
            </div>


        </div>

        <div class="container-resposta" id="container3" style="display: none;">

            <div class="container-atencao">
                <label for="">ATENÇÃO</label>
                <textarea readonly name="atencao" id="txt9" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input type="radio" name="atencao" id="">
                <label for="">implementou</label>
                <input type="radio" name="atencao" id="">
                <label for="">implementou parcialmente</label>
                <input type="radio" name="atencao" id="">
                <label for="">não implementou</label>
            </div>


            <div class="container-interesse">
                <label for="">INTERESSE</label>
                <textarea readonly name="interesse" id="txt10" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input type="radio" name="interesse" id="">
                <label for="">implementou</label>
                <input type="radio" name="interesse" id="">
                <label for="">implementou parcialmente</label>
                <input type="radio" name="interesse" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-desejo">
                <label for="">DESEJO</label>
                <textarea readonly name="desejo" id="txt11" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input type="radio" name="desejo" id="">
                <label for="">implementou</label>
                <input type="radio" name="desejo" id="">
                <label for="">implementou parcialmente</label>
                <input type="radio" name="desejo" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-acao">
                <label for="">AÇÃO</label>
                <textarea readonly name="acao" id="txt12" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input type="radio" name="acao" id="">
                <label for="">implementou</label>
                <input type="radio" name="acao" id="">
                <label for="">implementou parcialmente</label>
                <input type="radio" name="acao" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-feedback">
                <label for="">FEEDBACK</label>
                <textarea name="feedback" id="" cols="130" rows="10" -></textarea>
            </div>

        </div>

        <div class="container-resposta" id="container4" style="display: none;">

            <div class="container-atencao">
                <label for="">ATENÇÃO</label>
                <textarea readonly name="atencao" id="txt13" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input type="radio" name="atencao" id="">
                <label for="">implementou</label>
                <input type="radio" name="atencao" id="">
                <label for="">implementou parcialmente</label>
                <input type="radio" name="atencao" id="">
                <label for="">não implementou</label>
            </div>


            <div class="container-interesse">
                <label for="">INTERESSE</label>
                <textarea readonly name="interesse" id="txt14" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input type="radio" name="interesse" id="">
                <label for="">implementou</label>
                <input type="radio" name="interesse" id="">
                <label for="">implementou parcialmente</label>
                <input type="radio" name="interesse" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-desejo">
                <label for="">DESEJO</label>
                <textarea readonly name="desejo" id="txt15" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input type="radio" name="desejo" id="">
                <label for="">implementou</label>
                <input type="radio" name="desejo" id="">
                <label for="">implementou parcialmente</label>
                <input type="radio" name="desejo" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-acao">
                <label for="">AÇÃO</label>
                <textarea readonly name="acao" id="txt16" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input type="radio" name="acao" id="">
                <label for="">implementou</label>
                <input type="radio" name="acao" id="">
                <label for="">implementou parcialmente</label>
                <input type="radio" name="acao" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-feedback">
                <label for="">FEEDBACK</label>
                <textarea name="feedback" id="" cols="130" rows="10" -></textarea>
            </div>

        </div>

        <div class="container-btn">
            <a class="btn-voltar" href="">Voltar</a>
            <input class="btn-submit" type="submit" name="" id="">
        </div>

    </form>
</body>

</html>

<script>
    arrGrupo = $.parseJSON(localStorage.getItem("grupo_escolhido"));
    $("#equipe").html(arrGrupo['grupo']);
    $("#prod1").html(arrGrupo["nm1"]);
    $("#prod2").html(arrGrupo["nm2"]);
    $("#prod3").html(arrGrupo["nm3"]);
    $("#prod4").html(arrGrupo["nm4"]);
    $("#txt1").html(arrGrupo["txt1"]);
    $("#txt2").html(arrGrupo["txt2"]);
    $("#txt3").html(arrGrupo["txt3"]);
    $("#txt4").html(arrGrupo["txt4"]);
    $("#txt5").html(arrGrupo["txt5"]);
    $("#txt6").html(arrGrupo["txt6"]);
    $("#txt7").html(arrGrupo["txt7"]);
    $("#txt8").html(arrGrupo["txt8"]);
    $("#txt9").html(arrGrupo["txt9"]);
    $("#txt10").html(arrGrupo["txt10"]);
    $("#txt11").html(arrGrupo["txt11"]);
    $("#txt12").html(arrGrupo["txt12"]);
    $("#txt13").html(arrGrupo["txt13"]);
    $("#txt14").html(arrGrupo["txt14"]);
    $("#txt15").html(arrGrupo["txt15"]);
    $("#txt16").html(arrGrupo["txt16"]);

    container1 = document.getElementById('container1');
    container2 = document.getElementById('container2');
    container3 = document.getElementById('container3');
    container4 = document.getElementById('container4');

    function prod1() {
        container1.style.display = 'flex';
        container2.style.display = 'none';
        container3.style.display = "none";
        container4.style.display = "none";
    }

    function prod2() {
        container1.style.display = 'none';
        container2.style.display = 'flex';
        container3.style.display = "none";
        container4.style.display = "none";
    }

    function prod3() {
        container1.style.display = "none";
        container2.style.display = "none";
        container3.style.display = "flex";
        container4.style.display = "none";
    }

    function prod4() {
        container1.style.display = "none";
        container2.style.display = "none";
        container3.style.display = "none";
        container4.style.display = "flex";
    }
</script>