<?php
include_once "../includes/connection.php";
session_start();
$usuario_id = $_SESSION['usuarioId'];

$data = $conn->query("SELECT * FROM teste_spin WHERE usuario_id = $usuario_id");
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
    <title>Teste SPIN</title>
</head>

<body>
    <div class="container-titulo">
        <img class="img-logo" src="../assets/img/logo-focustrade.jpeg" alt="">
        <img class="img-titulo" src="../assets/img/logo-spin-semfundo2.png" alt="">
    </div>

    <form action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">

        <div class="container-input">
            <input name="grupo" type="text" placeholder="Grupo" required value="<?php if (!empty($linha)) echo $linha['grupo']; ?>">
            <input name="avaliador" type="text" placeholder="Avaliador" required value="<?php if (!empty($linha)) echo $linha['avaliador']; ?>">
            <input name="caso" type="text" placeholder="Case" required value="<?php if (!empty($linha)) echo $linha['caso']; ?>">
        </div>
        <div class="container-table">
            <div class="item">Situação</div>
            <div class="item">Problemas</div>
            <div class="item">Implicações</div>
            <div class="item">Ncessidade/Solução</div>
            <div class="item" style="padding: 20px 0 0 0px;">Perguntas</div>
            <div class="item subgrid">
                <div>Perguntas</div>
                <div style="margin-left: 120px;">Necessidades Implícitas</div>
            </div>
            <div class="item subgrid">
                <div>Perguntas</div>
                <div style="margin-left: 120px;">Necessidades Implícitas</div>
            </div>
            <div class="item subgrid">
                <div>Perguntas</div>
                <div style="margin-left: 120px;">Declaração de Benefícios</div>
            </div>


            <textarea name="txt1" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt1']; ?></textarea>
            <div class="subgrid-txt">
                <textarea name="txt2" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt2']; ?></textarea>
                <textarea name="txt3" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt3']; ?></textarea>
            </div>
            <div class="subgrid-txt">
                <textarea name="txt4" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt4']; ?></textarea>
                <textarea name="txt5" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt5']; ?></textarea>
            </div>
            <div class="subgrid-txt">
                <textarea name="txt6" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt6']; ?></textarea>
                <textarea name="txt7" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt7']; ?></textarea>
            </div>
            <textarea name="txt8" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt8']; ?></textarea>
            <div class="subgrid-txt">
                <textarea name="txt9" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt9']; ?></textarea>
                <textarea name="txt10" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt10']; ?></textarea>
            </div>
            <div class="subgrid-txt">
                <textarea name="txt11" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt11']; ?></textarea>
                <textarea name="txt12" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt12']; ?></textarea>
            </div>
            <div class="subgrid-txt">
                <textarea name="txt13" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt13']; ?></textarea>
                <textarea name="txt14" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt14']; ?></textarea>
            </div>
            <textarea name="txt15" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt15']; ?></textarea>
            <div class="subgrid-txt">
                <textarea name="txt16" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt16']; ?></textarea>
                <textarea name="txt17" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt17']; ?></textarea>
            </div>
            <div class="subgrid-txt">
                <textarea name="txt18" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt18']; ?></textarea>
                <textarea name="txt19" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt19']; ?></textarea>
            </div>
            <div class="subgrid-txt">
                <textarea name="txt20" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt20']; ?></textarea>
                <textarea name="txt21" id="" cols="20" rows="20"><?php if (!empty($linha)) echo $linha['txt21']; ?></textarea>
            </div>

        </div>
        <input id="botao-enviar" type="submit" value="ENVIAR">
    </form>
</body>

</html>