<?php
include_once "../../includes/connection.php";
session_start();
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
    <link rel="shortcut icon" href="../../assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <title>Respostas A I D A</title>
</head>

<body>
    <form action="./respostas.php" method="POST" id="form">

        <input type="hidden" id="usuario_id" name="usuario_id" value="">
        <input type="hidden" id="valor_total" name="valor_total" value="">
        <input type="hidden" id="radio_total" name="radio_total" value="">

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
                <input value="1" type="radio" name="radio-atencao1" id="">
                <label for="">implementou</label>
                <input value="2" type="radio" name="radio-atencao1" id="">
                <label for="">implementou parcialmente</label>
                <input value="3" type="radio" name="radio-atencao1" id="">
                <label for="">não implementou</label>
            </div>


            <div class="container-interesse">
                <label for="">INTERESSE</label>
                <textarea readonly name="interesse" id="txt2" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input value="1" type="radio" name="radio-interesse1" id="">
                <label for="">implementou</label>
                <input value="2" type="radio" name="radio-interesse1" id="">
                <label for="">implementou parcialmente</label>
                <input value="3" type="radio" name="radio-interesse1" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-desejo">
                <label for="">DESEJO</label>
                <textarea readonly name="desejo" id="txt3" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input value="1" type="radio" name="radio-desejo1" id="">
                <label for="">implementou</label>
                <input value="2" type="radio" name="radio-desejo1" id="">
                <label for="">implementou parcialmente</label>
                <input value="3" type="radio" name="radio-desejo1" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-acao">
                <label for="">AÇÃO</label>
                <textarea readonly name="acao" id="txt4" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input value="1" type="radio" name="radio-acao1" id="">
                <label for="">implementou</label>
                <input value="2" type="radio" name="radio-acao1" id="">
                <label for="">implementou parcialmente</label>
                <input value="3" type="radio" name="radio-acao1" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-feedback">
                <label for="">FEEDBACK</label>
                <textarea name="feedback1" id="feedback1" cols="130" rows="10"></textarea>
            </div>


        </div>

        <div class="container-resposta" id="container2" style="display: none;">

            <div class="container-atencao">
                <label for="">ATENÇÃO</label>
                <textarea readonly name="atencao2" id="txt5" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input value="1" type="radio" name="radio-atencao2" id="">
                <label for="">implementou</label>
                <input value="2" type="radio" name="radio-atencao2" id="">
                <label for="">implementou parcialmente</label>
                <input value="3" type="radio" name="radio-atencao2" id="">
                <label for="">não implementou</label>
            </div>


            <div class="container-interesse">
                <label for="">INTERESSE</label>
                <textarea readonly name="interesse" id="txt6" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input value="1" type="radio" name="radio-interesse2" id="">
                <label for="">implementou</label>
                <input value="2" type="radio" name="radio-interesse2" id="">
                <label for="">implementou parcialmente</label>
                <input value="3" type="radio" name="radio-interesse2" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-desejo">
                <label for="">DESEJO</label>
                <textarea readonly name="desejo" id="txt7" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input value="1" type="radio" name="radio-desejo2" id="">
                <label for="">implementou</label>
                <input value="2" type="radio" name="radio-desejo2" id="">
                <label for="">implementou parcialmente</label>
                <input value="3" type="radio" name="radio-desejo2" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-acao">
                <label for="">AÇÃO</label>
                <textarea readonly name="acao" id="txt8" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input value="1" type="radio" name="radio-acao2" id="">
                <label for="">implementou</label>
                <input value="2" type="radio" name="radio-acao2" id="">
                <label for="">implementou parcialmente</label>
                <input value="3" type="radio" name="radio-acao2" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-feedback">
                <label for="">FEEDBACK</label>
                <textarea name="feedback2" id="feedback2" cols="130" rows="10"></textarea>
            </div>


        </div>

        <div class="container-resposta" id="container3" style="display: none;">

            <div class="container-atencao">
                <label for="">ATENÇÃO</label>
                <textarea readonly name="atencao" id="txt9" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input value="1" type="radio" name="radio-atencao3" id="">
                <label for="">implementou</label>
                <input value="2" type="radio" name="radio-atencao3" id="">
                <label for="">implementou parcialmente</label>
                <input value="3" type="radio" name="radio-atencao3" id="">
                <label for="">não implementou</label>
            </div>


            <div class="container-interesse">
                <label for="">INTERESSE</label>
                <textarea readonly name="interesse" id="txt10" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input value="1" type="radio" name="radio-interesse3" id="">
                <label for="">implementou</label>
                <input value="2" type="radio" name="radio-interesse3" id="">
                <label for="">implementou parcialmente</label>
                <input value="3" type="radio" name="radio-interesse3" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-desejo">
                <label for="">DESEJO</label>
                <textarea readonly name="desejo" id="txt11" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input value="1" type="radio" name="radio-desejo3" id="">
                <label for="">implementou</label>
                <input value="2" type="radio" name="radio-desejo3" id="">
                <label for="">implementou parcialmente</label>
                <input value="3" type="radio" name="radio-desejo3" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-acao">
                <label for="">AÇÃO</label>
                <textarea readonly name="acao" id="txt12" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input value="1" type="radio" name="radio-acao3" id="">
                <label for="">implementou</label>
                <input value="2" type="radio" name="radio-acao3" id="">
                <label for="">implementou parcialmente</label>
                <input value="3" type="radio" name="radio-acao3" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-feedback">
                <label for="">FEEDBACK</label>
                <textarea name="feedback3" id="feedback3" cols="130" rows="10"></textarea>
            </div>

        </div>

        <div class="container-resposta" id="container4" style="display: none;">

            <div class="container-atencao">
                <label for="">ATENÇÃO</label>
                <textarea readonly name="atencao" id="txt13" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input value="1" type="radio" name="radio-atencao4" id="">
                <label for="">implementou</label>
                <input value="2" type="radio" name="radio-atencao4" id="">
                <label for="">implementou parcialmente</label>
                <input value="3" type="radio" name="radio-atencao4" id="">
                <label for="">não implementou</label>
            </div>


            <div class="container-interesse">
                <label for="">INTERESSE</label>
                <textarea readonly name="interesse" id="txt14" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input value="1" type="radio" name="radio-interesse4" id="">
                <label for="">implementou</label>
                <input value="2" type="radio" name="radio-interesse4" id="">
                <label for="">implementou parcialmente</label>
                <input value="3" type="radio" name="radio-interesse4" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-desejo">
                <label for="">DESEJO</label>
                <textarea readonly name="desejo" id="txt15" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input value="1" type="radio" name="radio-desejo4" id="">
                <label for="">implementou</label>
                <input value="2" type="radio" name="radio-desejo4" id="">
                <label for="">implementou parcialmente</label>
                <input value="3" type="radio" name="radio-desejo4" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-acao">
                <label for="">AÇÃO</label>
                <textarea readonly name="acao" id="txt16" cols="130" rows="10"></textarea>
            </div>
            <div class="btns-radios">
                <input value="1" type="radio" name="radio-acao4" id="">
                <label for="">implementou</label>
                <input value="2" type="radio" name="radio-acao4" id="">
                <label for="">implementou parcialmente</label>
                <input value="3" type="radio" name="radio-acao4" id="">
                <label for="">não implementou</label>
            </div>

            <div class="container-feedback">
                <label for="">FEEDBACK</label>
                <textarea name="feedback4" id="feedback4" cols="130" rows="10"></textarea>
            </div>

        </div>
        <div class="container-btn" style="margin-top: 20px;">
            <a class="btn-voltar" href="http://focustradeapp.com.br/teste-aida/role-play">Voltar</a>
            <input value="ENVIAR" id="botao-enviar" type="submit" id="btn-enviar">
        </div>
    </form>
</body>

</html>

<script>
    arrGrupo = JSON.parse(localStorage.getItem("grupo_escolhido"));
    $("#equipe").html(arrGrupo["grupo"]);
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
    $("#feedback1").html(arrGrupo['feedback1']);
    $("#feedback2").html(arrGrupo['feedback2']);
    $("#feedback3").html(arrGrupo['feedback3']);
    $("#feedback4").html(arrGrupo['feedback4']);
    $("#usuario_id").html(arrGrupo['usuario_id']);

    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        calculateScore();
    });
    
    var categories = ["atencao", "interesse", "desejo", "acao"];
    function calculateScore() {
        var score = 0;
        var totalQuestions = 0;
        var selectedValues = '';

        // Loop through each category
        for (var i = 1; i <= 4; i++) {
            // Loop through each set of responses
            for (var j = 1; j <= 4; j++) {
                var radios = document.getElementsByName('radio-' + categories[i - 1] + j);

                for (var k = 0; k < radios.length; k++) {
                    var radio = radios[k];

                    // If this radio button is selected, add its value to the score
                    if (radio.checked) {
                        if (radio.value == "1") {
                            score += 100;
                            selectedValues += '1';
                        } else if (radio.value == "2") {
                            score += 50;
                            selectedValues += '2';
                        } else if (radio.value == "3") {
                            score += 0;
                            selectedValues += '3';
                        }
                        totalQuestions += 1;
                    }
                }
            }
        }

        // Calculate the average score
        var averageScore = score / totalQuestions;

        document.getElementById("radio_total").value = selectedValues;
        document.getElementById("valor_total").value = averageScore;

        document.getElementById("form").submit();
    }

    window.onload = function() {
        loadValues();
    };

    function loadValues() {
        if (arrGrupo['radio_total'] != "") {

            var selectedValues = arrGrupo['radio_total'];

            if (selectedValues) {
                var index = 0;

                // Loop through each category
                for (var i = 1; i <= 4; i++) {
                    // Loop through each set of responses
                    for (var j = 1; j <= 4; j++) {
                        var radios = document.getElementsByName('radio-' + categories[i - 1] + j);

                        for (var k = 0; k < radios.length; k++) {
                            var radio = radios[k];

                            // If this radio button's value matches the saved value, check it
                            if (radio.value == selectedValues.charAt(index)) {
                                radio.checked = true;
                            }
                        }

                        index++;
                    }
                }
            }
        }
    }

    container1 = document.getElementById('container1');
    container2 = document.getElementById('container2');
    container3 = document.getElementById('container3');
    container4 = document.getElementById('container4');

    function prod1() {
        container1.style.display = 'flex';
        container2.style.display = 'none';
        container3.style.display = "none";
        container4.style.display = "none";
        $("#btn-enviar").hide();
    }

    function prod2() {
        container1.style.display = 'none';
        container2.style.display = 'flex';
        container3.style.display = "none";
        container4.style.display = "none";
        $("#btn-enviar").hide();
    }

    function prod3() {
        container1.style.display = "none";
        container2.style.display = "none";
        container3.style.display = "flex";
        container4.style.display = "none";
        $("#btn-enviar").hide();
    }

    function prod4() {
        container1.style.display = "none";
        container2.style.display = "none";
        container3.style.display = "none";
        container4.style.display = "flex";
        $("#btn-enviar").show();
    }
</script>