<?php
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    echo "SEM ACESSO PARA ESSA PÁGINA, FAÇA O LOGIN!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>AIDA</title>
</head>

<body>


    <div class="container-header">
        <div class="containerTitulo">
            <img src="../assets/img/logo-focustrade.jpeg" alt="">

            <h1>Técnica A I D A</h1>

            <h3>Construa um pitch baseado na técnica A I D A</h3>
        </div>
    </div>
    <img class="img-titulo" src="../assets/img/img-aida.jpg" alt="">

    <form action="./sql.php" method="POST">

        <div class="container-table">

            <div class="container">
                <input type="text" name="nm1" id="" placeholder="Insira o nome do produto aqui" required>
                <table style="margin: 0;" cellspacing="30">


                    <tr>
                        <th class="table-text">A</th>
                        <th><textarea name="txt1" required></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">I</th>
                        <th><textarea name="txt2" required></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">D</th>
                        <th><textarea name="txt3" required></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">A</th>
                        <th><textarea name="txt4" required></textarea></th>
                    </tr>

                </table>
            </div>

            <div class="container">
                <input type="text" name="nm2" id="" placeholder="Insira o nome do produto aqui" required>
                <table cellspacing="40">
                    <tr>
                        <th class="table-text">A</th>
                        <th><textarea name="txt5" required></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">I</th>
                        <th><textarea name="txt6" required></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">D</th>
                        <th><textarea name="txt7" required></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">A</th>
                        <th><textarea name="txt8" required></textarea></th>
                    </tr>
                    <tr>
                </table>
            </div>

            <div class="container">
                <input type="text" name="nm3" id="" placeholder="Insira o nome do produto aqui" required>
                <table cellspacing="40">
                    <tr>
                        <th class="table-text">A</th>
                        <th><textarea name="txt9" required></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">I</th>
                        <th><textarea name="txt10" required></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">D</th>
                        <th><textarea name="txt11" required></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">A</th>
                        <th><textarea name="txt12" required></textarea></th>
                    </tr>
                </table>
            </div>

            <div class="container">
                <table cellspacing="40">
                    <input type="text" name="nm4" id="" placeholder="Insira o nome do produto aqui" required>
                    <tr>
                        <th class="table-text">A</th>
                        <th><textarea name="txt13" required></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">I</th>
                        <th><textarea name="txt14" required></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">D</th>
                        <th><textarea name="txt15" required></textarea></th>
                    </tr>
                    <tr>

                        <th class="table-text">A</th>
                        <th><textarea name="txt16" required></textarea></th>
                    </tr>
                </table>
            </div>
        </div>
        <div class="container-submit">
            <input type="text" style="margin-right: 30px;" name="grupo" placeholder="Nome do Grupo" required>
            <input type="submit" name="" id="submit">
        </div>
    </form>
</body>

</html>