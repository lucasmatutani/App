<?php
include_once "../../includes/connection.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Respostas</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i> <strong> Voltar</a>
    <div></div>
    <div class="respostas">
        <h1>Respostas</h1>
    </div>

    <div class="container-principal">
        <div class="table1">
            <table cellpadding="40" cellspacing="20">
                <tr>
                    <td>Código do Participante</td>
                    <td>Grupo</td>
                    <td>Representante</td>
                    <td>Total</td>
                </tr>
                <span></span>
                <?php
                if ($conn) :
                    $query = "SELECT * FROM role_play";
                    if ($res = mysqli_query($conn, $query)) :
                        while ($row = $res->fetch_array(MYSQLI_ASSOC)) : ?>
                            <tr>
                                <td><?php echo $row['participante'] ?></td>
                                <td><?php echo $row['grupo'] ?></td>
                                <td><?php echo $row['representante'] ?></td>
                                <td class="grupo<?php echo $row['grupo'] ?>"><?php echo $row['total'] ?></td>
                            </tr>
                            <span></span>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </table>
        </div>

        <div class="table2">
            <h3>Total dos Grupos</h3>
            <table cellpadding="30" cellspacing="20">
                <tr>
                    <td>Grupo 1</td>
                    <td>Grupo 2</td>
                    <td>Grupo 3</td>
                    <td>Grupo 4</td>
                    <td>Grupo 5</td>
                    <td>Grupo 6</td>
                </tr>
                <tr>
                    <td id="grupo1"></td>
                    <td id="grupo2"></td>
                    <td id="grupo3"></td>
                    <td id="grupo4"></td>
                    <td id="grupo5"></td>
                    <td id="grupo6"></td>
                </tr>
            </table>
        </div>
    </div>
</body>
<script>
    var grupo1 = document.getElementsByClassName("grupo1");
    var grupo2 = document.getElementsByClassName("grupo2");
    var grupo3 = document.getElementsByClassName("grupo3");
    var grupo4 = document.getElementsByClassName("grupo4");
    var grupo5 = document.getElementsByClassName("grupo5");
    var grupo6 = document.getElementsByClassName("grupo6");
    var td = document.getElementsByTagName("td");
    console.log(td.length);
    result1 = '';

    for (i = 0; i <= td.length; i++) {

        result1 += grupo1.innerHTML;
        console.log(result1);

    }
</script>

</html>