<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}

@$usuario = $_SESSION['usuario'];

$data = $conn->query("SELECT * FROM teste_spin ORDER BY email ASC");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Teste SPIN</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>

    <div class="container-titulo">
        <img class="img-logo" src="../assets/img/logo-focustrade.jpeg" alt="">
        <img class="img-titulo" src="../assets/img/logo-spin-semfundo2.png" alt="">
    </div>

    <form id="form" action="./session.php" style="display: flex; align-items: center; justify-content: center;" method="POST">
        <input type="hidden" name="usuario_email" id="usuario_email" value="">
        <select class="form-select col-5 mt-5" name="usuarios" id="usuarios" style="font-size: 1.5em; width: 25vw; margin-bottom: 25px;" onchange="submitForm(event)">
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
        @$query = $conn->query("SELECT * FROM teste_spin WHERE usuario_id = $usuario");
        @$row = @mysqli_fetch_assoc($query);
        if (empty($query)) {
            session_destroy();
            header("location: ./respostas.php");
        }
    ?>

        <div class="container-input">
            <h4 class="subtitulo">Grupo</h4>
            <input name="grupo" type="text" placeholder="Grupo" required value="<?php if (!empty($row)) echo $row['grupo']; ?>">
            <h4 class="subtitulo">Avaliador</h4>
            <input name="avaliador" type="text" placeholder="Avaliador" required value="<?php if (!empty($row)) echo $row['avaliador']; ?>">
            <h4 class="subtitulo">Case</h4>
            <input name="caso" type="text" placeholder="Case" required value="<?php if (!empty($row)) echo $row['caso']; ?>">
        </div>
        <div class="container-table">
            <div class="item">Situação</div>
            <div class="item">Problemas</div>
            <div class="item">Implicações</div>
            <div class="item">Necessidade/Solução</div>
            <div class="item" style="padding: 20px 0 0 0px;">Perguntas</div>
            <div class="item subgrid">
                <div>Perguntas</div>
                <div style="margin-left: 120px;">Necessidades Explícitas</div>
            </div>
            <div class="item subgrid">
                <div>Perguntas</div>
                <div style="margin-left: 120px;">Necessidades Explícitas</div>
            </div>
            <div class="item subgrid">
                <div>Perguntas</div>
                <div style="margin-left: 120px;">Declaração de Benefícios</div>
            </div>


            <textarea name="txt1" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt1']; ?></textarea>
            <div class="subgrid-txt">
                <textarea name="txt2" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt2']; ?></textarea>
                <textarea name="txt3" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt3']; ?></textarea>
            </div>
            <div class="subgrid-txt">
                <textarea name="txt4" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt4']; ?></textarea>
                <textarea name="txt5" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt5']; ?></textarea>
            </div>
            <div class="subgrid-txt">
                <textarea name="txt6" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt6']; ?></textarea>
                <textarea name="txt7" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt7']; ?></textarea>
            </div>
            <textarea name="txt8" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt8']; ?></textarea>
            <div class="subgrid-txt">
                <textarea name="txt9" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt9']; ?></textarea>
                <textarea name="txt10" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt10']; ?></textarea>
            </div>
            <div class="subgrid-txt">
                <textarea name="txt11" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt11']; ?></textarea>
                <textarea name="txt12" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt12']; ?></textarea>
            </div>
            <div class="subgrid-txt">
                <textarea name="txt13" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt13']; ?></textarea>
                <textarea name="txt14" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt14']; ?></textarea>
            </div>
            <textarea name="txt15" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt15']; ?></textarea>
            <div class="subgrid-txt">
                <textarea name="txt16" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt16']; ?></textarea>
                <textarea name="txt17" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt17']; ?></textarea>
            </div>
            <div class="subgrid-txt">
                <textarea name="txt18" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt18']; ?></textarea>
                <textarea name="txt19" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt19']; ?></textarea>
            </div>
            <div class="subgrid-txt">
                <textarea name="txt20" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt20']; ?></textarea>
                <textarea name="txt21" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt21']; ?></textarea>
            </div>
            <textarea name="txt22" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt22']; ?></textarea>
            <div class="subgrid-txt">
                <textarea name="txt23" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt23']; ?></textarea>
                <textarea name="txt24" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt24']; ?></textarea>
            </div>
            <div class="subgrid-txt">
                <textarea name="txt25" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt25']; ?></textarea>
                <textarea name="txt26" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt26']; ?></textarea>
            </div>
            <div class="subgrid-txt">
                <textarea name="txt27" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt27']; ?></textarea>
                <textarea name="txt28" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt28']; ?></textarea>
            </div>
            <textarea name="txt29" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt29']; ?></textarea>
            <div class="subgrid-txt">
                <textarea name="txt30" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt30']; ?></textarea>
                <textarea name="txt31" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt31']; ?></textarea>
            </div>
            <div class="subgrid-txt">
                <textarea name="txt32" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt32']; ?></textarea>
                <textarea name="txt33" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt33']; ?></textarea>
            </div>
            <div class="subgrid-txt">
                <textarea name="txt34" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt34']; ?></textarea>
                <textarea name="txt35" id="" cols="20" rows="20"><?php if (!empty($row)) echo $row['txt35']; ?></textarea>
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
</script>

</html>