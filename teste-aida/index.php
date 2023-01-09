<?php
include_once "../includes/connection.php";
session_start();
$usuario_id = $_SESSION['usuarioId'];

if (!isset($_SESSION['usuarioEmail'])) {
    echo "SEM ACESSO PARA ESSA PÁGINA, FAÇA O LOGIN!";
    exit;
}

$data = $conn->query("SELECT * FROM teste_aida WHERE usuario_id = $usuario_id");
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
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <title>AIDA</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>

    <div class="container-header">
        <div class="containerTitulo">
            <img src="../assets/img/logo-focustrade.jpeg" alt="">

            <h1>Técnica A I D A</h1>

            <h3>Construa um pitch baseado na técnica A I D A</h3>
        </div>
    </div>
    <img class="img-titulo" src="../assets/img/img-aida.jpg" alt="">

    <form action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <div class="container-table">

            <div class="container">
                <input type="text" name="nm1" id="" value="<?php if (!empty($linha)) echo $linha['nm1'] ?>" placeholder="Insira o nome do produto aqui" required>
                <table style="margin: 0;" cellspacing="30">


                    <tr>
                        <th class="table-text">A - Atenção</th>
                        <th><textarea name="txt1" required><?php if (!empty($linha)) echo $linha['txt1'] ?></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">I - Interesse</th>
                        <th><textarea name="txt2" required><?php if (!empty($linha)) echo $linha['txt2'] ?></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">D - Desejo</th>
                        <th><textarea name="txt3" required><?php if (!empty($linha)) echo $linha['txt3'] ?></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">A - Ação</th>
                        <th><textarea name="txt4" required><?php if (!empty($linha)) echo $linha['txt4'] ?></textarea></th>
                    </tr>

                </table>
            </div>

            <div class="container">
                <input type="text" name="nm2" id="" placeholder="Insira o nome do produto aqui" value="<?php if (!empty($linha)) echo $linha['nm2'] ?>" required>
                <table cellspacing="40">
                    <tr>
                        <th class="table-text">A - Atenção</th>
                        <th><textarea name="txt5" required><?php if (!empty($linha)) echo $linha['txt5'] ?></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">I - Interesse</th>
                        <th><textarea name="txt6" required><?php if (!empty($linha)) echo $linha['txt6'] ?></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">D - Desejo</th>
                        <th><textarea name="txt7" required><?php if (!empty($linha)) echo $linha['txt7'] ?></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">A - Ação</th>
                        <th><textarea name="txt8" required><?php if (!empty($linha)) echo $linha['txt8'] ?></textarea></th>
                    </tr>
                    <tr>
                </table>
            </div>

            <div class="container">
                <input type="text" name="nm3" id="" placeholder="Insira o nome do produto aqui" value="<?php if (!empty($linha)) echo $linha['nm3'] ?>" required>
                <table cellspacing="40">
                    <tr>
                        <th class="table-text">A - Atenção</th>
                        <th><textarea name="txt9" required><?php if (!empty($linha)) echo $linha['txt9'] ?></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">I - Interesse</th>
                        <th><textarea name="txt10" required><?php if (!empty($linha)) echo $linha['txt10'] ?></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">D - Desejo</th>
                        <th><textarea name="txt11" required><?php if (!empty($linha)) echo $linha['txt11'] ?></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">A - Ação</th>
                        <th><textarea name="txt12" required><?php if (!empty($linha)) echo $linha['txt12'] ?></textarea></th>
                    </tr>
                </table>
            </div>

            <div class="container">
                <table cellspacing="40">
                    <input type="text" name="nm4" id="" placeholder="Insira o nome do produto aqui" value="<?php if (!empty($linha)) echo $linha['nm4'] ?>" required>
                    <tr>
                        <th class="table-text">A - Atenção</th>
                        <th><textarea name="txt13" required><?php if (!empty($linha)) echo $linha['txt13'] ?></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">I - Interesse</th>
                        <th><textarea name="txt14" required><?php if (!empty($linha)) echo $linha['txt14'] ?></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">D - Desejo</th>
                        <th><textarea name="txt15" required><?php if (!empty($linha)) echo $linha['txt15'] ?></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">A - Ação</th>
                        <th><textarea name="txt16" required><?php if (!empty($linha)) echo $linha['txt16'] ?></textarea></th>
                    </tr>
                </table>
            </div>
        </div>
        <div class="container-submit">
            <input type="text" style="margin-right: 30px;" name="grupo" placeholder="Nome do Grupo" value="<?php if (!empty($linha)) echo $linha['grupo'] ?>" required>
            <input type="submit" name="" id="submit" value="ENVIAR">
        </div>
    </form>
</body>

</html>