<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}
$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];

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


    <form action="./sql.php">
        <h1 class="titulo">FCS</h1>
        <div class="container-txt">
            <div class="txt">
                <textarea name="" id="" cols="20" rows="3"></textarea>
                <input type="number" name="" id="input1">
                <progress id="myProgress1" value="" max="100">
                </progress>%
            </div>

            <div class="txt">
                <textarea name="" id="" cols="20" rows="3"></textarea>
                <input type="number" name="" id="input2">
                <progress id="myProgress2" value="" max="100">
                </progress>%
            </div>

            <div class="txt">
                <textarea name="" id="" cols="20" rows="3"></textarea>
                <input type="number" name="" id="input3">
                <progress id="myProgress3" value="" max="100">
                </progress>%
            </div>

            <div class="txt">
                <textarea name="" id="" cols="20" rows="3"></textarea>
                <input type="number" name="" id="input4">
                <progress id="myProgress4" value="" max="100">
                </progress>%
            </div>

            <div class="txt">
                <textarea name="" id="" cols="20" rows="3"></textarea>
                <input type="number" name="" id="input5">
                <progress id="myProgress5" value="" max="100">
                </progress>%
            </div>
        </div>

        <div class="container-grid">
            <h3>Por que?</h3>
            <h3>Impacto</h3>
            <h3>Ação Corretiva</h3>
            <div>
                <textarea name="txt1" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <textarea name="txt2" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <textarea name="txt3" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <textarea name="txt4" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <textarea name="txt5" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <textarea name="txt6" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <textarea name="txt7" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <textarea name="txt8" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <textarea name="txt9" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <textarea name="txt10" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <textarea name="txt11" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <textarea name="txt12" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <textarea name="txt13" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <textarea name="txt14" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <textarea name="txt15" id="" cols="30" rows="10"></textarea>
            </div>

        </div>



    </form>

</body>

<script>
    document.getElementById("input1").addEventListener("change", myFunction1);

    function myFunction1() {
        input1 = document.getElementById("input1").value;
        document.getElementById("myProgress1").value = input1;
    }

    document.getElementById("input2").addEventListener("change", myFunction2);

    function myFunction2() {
        input2 = document.getElementById("input2").value;
        document.getElementById("myProgress2").value = input2;
    }

    document.getElementById("input3").addEventListener("change", myFunction3);

    function myFunction3() {
        input3 = document.getElementById("input3").value;
        document.getElementById("myProgress3").value = input3;
    }

    document.getElementById("input4").addEventListener("change", myFunction4);

    function myFunction4() {
        input4 = document.getElementById("input4").value;
        document.getElementById("myProgress4").value = input4;
    }

    document.getElementById("input5").addEventListener("change", myFunction5);

    function myFunction5() {
        input5 = document.getElementById("input5").value;
        document.getElementById("myProgress5").value = input5;
    }
</script>

</html>