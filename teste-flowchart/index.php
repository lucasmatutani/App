<?php
include_once "../includes/connection.php";
session_start();

$email = $_SESSION['usuarioEmail'];
$usuario_id = $_SESSION['usuarioId'];

if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}

$data = $conn->query("SELECT * FROM teste_flowchart WHERE usuario_id = $usuario_id");
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
    <title>Flowchart</title>

    <link rel="stylesheet" href="./style.css">
    <!-- Link para os arquivos do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>


<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>Flowchart</h1>
    </div>

    <form action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">

        <table class="table table-bordered ">
            <tr>
                <th></th>
                <th>Habilidade</th>
                <th>Habilidade</th>
                <th>Habilidade</th>
            </tr>

            <tr>
                <th scope="col"></th>
                <th scope="col">Baixa</th>
                <th scope="col">Média</th>
                <th scope="col">Alta</th>
            </tr>

            <tbody>
                <tr>
                    <th scope="row">Alto</th>
                    <td><textarea placeholder="ANSIEADE" name="" id="" cols="20" rows="5"><?php if (!empty($linha)) echo $linha['alta1']; ?></textarea></td>
                    <td><textarea name="" id="" cols="20" rows="5"><?php if (!empty($linha)) echo $linha['alta2']; ?></textarea></td>
                    <td style="background-color: #d3d3d3;"><textarea placeholder="FLOW" style="background-color: #d3d3d3;" name="" id="" cols="20" rows="5"><?php if (!empty($linha)) echo $linha['alta3']; ?></textarea></td>
                </tr>
                <tr>
                    <th scope="row">Médio</th>
                    <td><textarea name="" id="" cols="20" rows="5"><?php if (!empty($linha)) echo $linha['media1']; ?></textarea></td>
                    <td style="background-color: #d3d3d3;"><textarea style="background-color: #d3d3d3;" name="" id="" cols="20" rows="5"><?php if (!empty($linha)) echo $linha['media2']; ?></textarea></td>
                    <td><textarea name="" id="" cols="20" rows="5"><?php if (!empty($linha)) echo $linha['media3']; ?></textarea></td>
                </tr>
                <tr>
                    <th scope="row">Baixo</th>
                    <td style="background-color: #d3d3d3;"><textarea style="background-color: #d3d3d3;" name="" id="" cols="20" rows="5"><?php if (!empty($linha)) echo $linha['baixa1']; ?></textarea></td>
                    <td><textarea name="" id="" cols="20" rows="5"></textarea><?php if (!empty($linha)) echo $linha['baixa2']; ?></td>
                    <td><textarea placeholder="TÉDIO" name="" id="" cols="20" rows="5"><?php if (!empty($linha)) echo $linha['baixa3']; ?></textarea></td>

                </tr>
            </tbody>
        </table>


    </form>

    <div class="buttom-enviar">
        <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS">
    </div>

    <!-- link js para bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>