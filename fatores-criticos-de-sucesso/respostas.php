<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}

$data = $conn->query("SELECT * FROM fatores_criticos_de_sucesso ORDER BY email ASC");
$usuario = $_SESSION['usuario'];
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
        <h3> Determine os FCS, defina o quanto em % vocês já possui e responda as questões na tabela
        </h3>
        <form action="./session.php" method="POST" id="form">
            <input type="hidden" name="usuario_email" id="usuario_email" value="">
            <select class="form-select col-5 mt-5" name="usuarios" id="usuarios" style="font-size: 1.5em;" onchange="submitForm(event)">
                <option><?php echo (!empty($_SESSION['usuario_email'])) ? $_SESSION['usuario_email'] : 'Selecione um usuário' ?></option>
                <?php if (!empty($data)) { ?>
                    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                        <option value="<?php echo $row['usuario_id'] ?>"><?php echo $row['email'] ?></option>
                    <?php } ?>
                <?php } ?>
            </select>
        </form>
    </div>

    <?php 
    $query = $conn->query("SELECT * FROM fatores_criticos_de_sucesso WHERE usuario_id = $usuario");
    $row = mysqli_fetch_assoc($query);
    ?>
    <?php if (!empty($row)) { ?>
        <div class="container-principal">
            <div class="container-txt">
                <div class="container-titulos">
                    <h1 class="titulo">FCS</h1>
                    <h3>Por que?</h3>
                    <h3>Impacto</h3>
                    <h3>Ação Corretiva</h3>
                </div>
                <div class="txt">
                    <textarea name="txt1" id="" cols="20" rows="3"><?php if (!empty($row)) echo $row['txt1']; ?></textarea>
                    <input type="number" name="input1" id="input1" max="100" value="<?php if (!empty($row)) echo $row['input1']; ?>" onkeypress="doNothing()">
                    <progress id="myProgress1" value="" max="100">
                    </progress>%
                    <textarea name="txt6" id="" cols="30" rows="10"><?php if (!empty($row)) echo $row['txt6']; ?></textarea>
                    <textarea name="txt7" id="" cols="30" rows="10"><?php if (!empty($row)) echo $row['txt7']; ?></textarea>
                    <textarea name="txt8" id="" cols="30" rows="10"><?php if (!empty($row)) echo $row['txt8']; ?></textarea>

                </div>

                <div class="txt">
                    <textarea name="txt2" id="" cols="20" rows="3"><?php if (!empty($row)) echo $row['txt2']; ?></textarea>
                    <input type="number" name="input2" id="input2" max="100" value="<?php if (!empty($row)) echo $row['input2']; ?>" onkeypress="doNothing()">
                    <progress id="myProgress2" value="" max="100">
                    </progress>%
                    <textarea name="txt9" id="" cols="30" rows="10"><?php if (!empty($row)) echo $row['txt9']; ?></textarea>
                    <textarea name="txt10" id="" cols="30" rows="10"><?php if (!empty($row)) echo $row['txt10']; ?></textarea>
                    <textarea name="txt11" id="" cols="30" rows="10"><?php if (!empty($row)) echo $row['txt11']; ?></textarea>
                </div>

                <div class="txt">
                    <textarea name="txt3" id="" cols="20" rows="3"><?php if (!empty($row)) echo $row['txt3']; ?></textarea>
                    <input type="number" name="input3" id="input3" max="100" value="<?php if (!empty($row)) echo $row['input3']; ?>" onkeypress="doNothing()">
                    <progress id="myProgress3" value="" max="100">
                    </progress>%
                    <textarea name="txt12" id="" cols="30" rows="10"><?php if (!empty($row)) echo $row['txt12']; ?></textarea>
                    <textarea name="txt13" id="" cols="30" rows="10"><?php if (!empty($row)) echo $row['txt13']; ?></textarea>
                    <textarea name="txt14" id="" cols="30" rows="10"><?php if (!empty($row)) echo $row['txt14']; ?></textarea>
                </div>

                <div class="txt">
                    <textarea name="txt4" id="" cols="20" rows="3"><?php if (!empty($row)) echo $row['txt4']; ?></textarea>
                    <input type="number" name="input4" id="input4" max="100" value="<?php if (!empty($row)) echo $row['input4']; ?>" onkeypress="doNothing()">
                    <progress id="myProgress4" value="" max="100">
                    </progress>%
                    <textarea name="txt15" id="" cols="30" rows="10"><?php if (!empty($row)) echo $row['txt15']; ?></textarea>
                    <textarea name="txt16" id="" cols="30" rows="10"><?php if (!empty($row)) echo $row['txt16']; ?></textarea>
                    <textarea name="txt17" id="" cols="30" rows="10"><?php if (!empty($row)) echo $row['txt17']; ?></textarea>
                </div>

                <div class="txt">
                    <textarea name="txt5" id="" cols="20" rows="3"><?php if (!empty($row)) echo $row['txt5']; ?></textarea>
                    <input type="number" name="input5" id="input5" max="100" value="<?php if (!empty($row)) echo $row['input5']; ?>" onkeypress="doNothing()">
                    <progress id="myProgress5" value="" max="100">
                    </progress>%
                    <textarea name="txt18" id="" cols="30" rows="10"><?php if (!empty($row)) echo $row['txt18']; ?></textarea>
                    <textarea name="txt19" id="" cols="30" rows="10"><?php if (!empty($row)) echo $row['txt19']; ?></textarea>
                    <textarea name="txt20" id="" cols="30" rows="10"><?php if (!empty($row)) echo $row['txt20']; ?></textarea>
                </div>
            </div>
        </div>
    <?php } ?>



</body>

<script>
    function submitForm(event) {

        var emailSelecionado = document.getElementById("usuarios");
        var email = emailSelecionado.options[emailSelecionado.selectedIndex].textContent;
        var inputEmail = document.getElementById("usuario_email");
        inputEmail.value = email;

        document.getElementById("form").submit();
    }

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