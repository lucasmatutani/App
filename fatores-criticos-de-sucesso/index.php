<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}
$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];
$nome = $_SESSION['usuarioNome'];

$data = $conn->query("SELECT * FROM fatores_criticos_de_sucesso WHERE usuario_id = $usuario_id");
if (!empty($data)) {
    $linha = mysqli_fetch_assoc($data);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Fatores Críticos de Sucesso</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>

    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>Fatores Críticos de Sucesso</h1>
        <h3>Eleja e descreva os FCS e atribua um peso a cada um deles.<br> A seguir, preencha a tabela.</h3>
    </div>


    <form action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">
        <input type="hidden" name="nome" value="<?php echo $nome ?>">

        <div class="container-principal">
            <div class="container-txt">
                <div class="container-titulos">
                    <h1 class="titulo">FCS</h1>
                    <h3>Por que?</h3>
                    <h3>Impacto</h3>
                    <h3>Ação Corretiva</h3>
                </div>
                <div class="txt">
                    <textarea name="txt1" id="" cols="20" rows="3"><?php if (!empty($linha)) echo $linha['txt1']; ?></textarea>
                    <input type="number" name="input1" id="input1" max="100" value="<?php if (!empty($linha)) echo $linha['input1']; ?>" onkeypress="doNothing()">
                    <progress id="myProgress1" value="" max="100">
                    </progress>%
                    <textarea name="txt6" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt6']; ?></textarea>
                    <textarea name="txt7" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt7']; ?></textarea>
                    <textarea name="txt8" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt8']; ?></textarea>

                </div>

                <div class="txt">
                    <textarea name="txt2" id="" cols="20" rows="3"><?php if (!empty($linha)) echo $linha['txt2']; ?></textarea>
                    <input type="number" name="input2" id="input2" max="100" value="<?php if (!empty($linha)) echo $linha['input2']; ?>" onkeypress="doNothing()">
                    <progress id="myProgress2" value="" max="100">
                    </progress>%
                    <textarea name="txt9" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt9']; ?></textarea>
                    <textarea name="txt10" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt10']; ?></textarea>
                    <textarea name="txt11" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt11']; ?></textarea>
                </div>

                <div class="txt">
                    <textarea name="txt3" id="" cols="20" rows="3"><?php if (!empty($linha)) echo $linha['txt3']; ?></textarea>
                    <input type="number" name="input3" id="input3" max="100" value="<?php if (!empty($linha)) echo $linha['input3']; ?>" onkeypress="doNothing()">
                    <progress id="myProgress3" value="" max="100">
                    </progress>%
                    <textarea name="txt12" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt12']; ?></textarea>
                    <textarea name="txt13" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt13']; ?></textarea>
                    <textarea name="txt14" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt14']; ?></textarea>
                </div>

                <div class="txt">
                    <textarea name="txt4" id="" cols="20" rows="3"><?php if (!empty($linha)) echo $linha['txt4']; ?></textarea>
                    <input type="number" name="input4" id="input4" max="100" value="<?php if (!empty($linha)) echo $linha['input4']; ?>" onkeypress="doNothing()">
                    <progress id="myProgress4" value="" max="100">
                    </progress>%
                    <textarea name="txt15" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt15']; ?></textarea>
                    <textarea name="txt16" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt16']; ?></textarea>
                    <textarea name="txt17" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt17']; ?></textarea>
                </div>

                <div class="txt">
                    <textarea name="txt5" id="" cols="20" rows="3"><?php if (!empty($linha)) echo $linha['txt5']; ?></textarea>
                    <input type="number" name="input5" id="input5" max="100" value="<?php if (!empty($linha)) echo $linha['input5']; ?>" onkeypress="doNothing()">
                    <progress id="myProgress5" value="" max="100">
                    </progress>%
                    <textarea name="txt18" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt18']; ?></textarea>
                    <textarea name="txt19" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt19']; ?></textarea>
                    <textarea name="txt20" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt20']; ?></textarea>
                </div>
                <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS" style="height: 30px; margin-left: 15px;">
            </div>

            <!-- <div class="container-grid">
                <div>
                    <textarea name="txt6" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt6']; ?></textarea>
                </div>
                <div>
                    <textarea name="txt7" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt7']; ?></textarea>
                </div>
                <div>
                    <textarea name="txt8" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt8']; ?></textarea>
                </div>
                <div>
                    <textarea name="txt9" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt9']; ?></textarea>
                </div>
                <div>
                    <textarea name="txt10" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt10']; ?></textarea>
                </div>
                <div>
                    <textarea name="txt11" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt11']; ?></textarea>
                </div>
                <div>
                    <textarea name="txt12" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt12']; ?></textarea>
                </div>
                <div>
                    <textarea name="txt13" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt13']; ?></textarea>
                </div>
                <div>
                    <textarea name="txt14" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt14']; ?></textarea>
                </div>
                <div>
                    <textarea name="txt15" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt15']; ?></textarea>
                </div>
                <div>
                    <textarea name="txt16" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt16']; ?></textarea>
                </div>
                <div>
                    <textarea name="txt17" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt17']; ?></textarea>
                </div>
                <div>
                    <textarea name="txt18" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt18']; ?></textarea>
                </div>
                <div>
                    <textarea name="txt19" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt19']; ?></textarea>
                </div>
                <div>
                    <textarea name="txt20" id="" cols="30" rows="10"><?php if (!empty($linha)) echo $linha['txt20']; ?></textarea>
                </div>

            </div> -->
        </div>


    </form>

</body>

<script>
    function doNothing() {
        var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
        if (keyCode == 13) {


            if (!e) var e = window.event;

            e.cancelBubble = true;
            e.returnValue = false;

            if (e.stopPropagation) {
                e.stopPropagation();
                e.preventDefault();
            }
        }
    }

    document.getElementById("input1").addEventListener("input", myFunction1);

    function myFunction1() {
        input1 = document.getElementById("input1").value;
        document.getElementById("myProgress1").value = input1;
    }

    document.getElementById("input2").addEventListener("input", myFunction2);

    function myFunction2() {
        input2 = document.getElementById("input2").value;
        document.getElementById("myProgress2").value = input2;
    }

    document.getElementById("input3").addEventListener("input", myFunction3);

    function myFunction3() {
        input3 = document.getElementById("input3").value;
        document.getElementById("myProgress3").value = input3;
    }

    document.getElementById("input4").addEventListener("input", myFunction4);

    function myFunction4() {
        input4 = document.getElementById("input4").value;
        document.getElementById("myProgress4").value = input4;
    }

    document.getElementById("input5").addEventListener("input", myFunction5);

    function myFunction5() {
        input5 = document.getElementById("input5").value;
        document.getElementById("myProgress5").value = input5;
    }
</script>

</html>