<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}
$usuario = $_SESSION['usuario'];

$data = $conn->query("SELECT * FROM teste_matriz_de_risco ORDER BY email ASC");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/532ecf1f07.js" crossorigin="anonymous"></script>
    <title>Matriz de Risco</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>

    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>Matriz de Risco</h1>
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
        @$query = $conn->query("SELECT * FROM teste_matriz_de_risco WHERE usuario_id = $usuario");
        @$row = @mysqli_fetch_assoc($query);
    ?>

        <div class="container-flex">
            <h2 class="probabilidade">Probabilidade</h2>

            <div class=" container-principal">
                <div class="titulo">
                    <h3>Alto</h3>
                    <h3>Médio</h3>
                    <h3>Baixo</h3>
                </div>
                <div class="incio">
                    <h3>Risco Médio</h3>
                    <input style="border: 3px solid yellow" type=" text" name="input1" id="" value="<?php if (!empty($row)) echo $row['input1']; ?>">
                    <h3>Risco Baixo</h3>
                    <input type="text" name="input5" id="" value="<?php if (!empty($row)) echo $row['input5']; ?>">
                    <h3>Risco Mínimo</h3>
                    <input type="text" name="input7" id="" value="<?php if (!empty($row)) echo $row['input7']; ?>">
                    <h3>Baixa</h3>
                </div>
                <div class="inicio">
                    <h3>Risco Alto</h3>
                    <input style="border: 3px solid pink" type="text" name="input2" id="" value="<?php if (!empty($row)) echo $row['input2']; ?>">
                    <h3>Risco Médio</h3>
                    <input style="border: 3px solid yellow" type="text" name="input6" id="" value="<?php if (!empty($row)) echo $row['input6']; ?>">
                    <h3>Risco Baixo</h3>
                    <input type="text" name="input8" id="" value="<?php if (!empty($row)) echo $row['input8']; ?>">
                    <h3>Médio</h3>
                    <h2 class="impactos">Impacto</h2>

                </div>
                <div class="inicio">
                    <h3>Risco Máximo</h3>
                    <input style="border: 3px solid red" type="text" name="input3" id="" value="<?php if (!empty($row)) echo $row['input3']; ?>">
                    <h3>Risco Alto</h3>
                    <input style="border: 3px solid pink" type="text" name="input4" id="" value="<?php if (!empty($row)) echo $row['input4']; ?>">
                    <h3>Risco Médio</h3>
                    <input style="border: 3px solid yellow" type="text" name="input9" id="" value="<?php if (!empty($row)) echo $row['input9']; ?>">
                    <h3>Alto</h3>
                </div>
            </div>
            <div class="container-riscos">
                <h2>Riscos</h2>
                <label>1</label><textarea name="txt1" id="" cols="30" rows="4"><?php if (!empty($row)) echo $row['txt1']; ?></textarea>
                <label>2</label><textarea name="txt2" id="" cols="30" rows="4"><?php if (!empty($row)) echo $row['txt2']; ?></textarea>
                <label>3</label><textarea name="txt3" id="" cols="30" rows="4"><?php if (!empty($row)) echo $row['txt3']; ?></textarea>
                <label>4</label><textarea name="txt4" id="" cols="30" rows="4"><?php if (!empty($row)) echo $row['txt4']; ?></textarea>
                <label>5</label><textarea name="txt5" id="" cols="30" rows="4"><?php if (!empty($row)) echo $row['txt5']; ?></textarea>
                <label>6</label><textarea name="txt6" id="" cols="30" rows="4"><?php if (!empty($row)) echo $row['txt6']; ?></textarea>
                <label>7</label><textarea name="txt7" id="" cols="30" rows="4"><?php if (!empty($row)) echo $row['txt7']; ?></textarea>
                <label>8</label><textarea name="txt8" id="" cols="30" rows="4"><?php if (!empty($row)) echo $row['txt8']; ?></textarea>
                <label>9</label><textarea name="txt9" id="" cols="30" rows="4"><?php if (!empty($row)) echo $row['txt9']; ?></textarea>
                <label>10</label><textarea name="txt10" id="" cols="30" rows="4"><?php if (!empty($row)) echo $row['txt10']; ?></textarea>
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

    if (window.innerHeight > window.innerWidth) {
        alert("Por favor, utilize no modo paisagem");
    }
</script>

</html>