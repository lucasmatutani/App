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
            <table cellpadding="40" cellspacing="20" id="table-result">
                <thead>
                    <tr>
                        <th>Avaliador</th>
                        <th>Código do Participante</th>
                        <th>Grupo</th>
                        <th>Vendedor</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <span></span>
                <tbody>
                    <?php
                    if ($conn) :
                        $query = "SELECT * FROM role_play ORDER BY representante ASC";
                        if ($res = mysqli_query($conn, $query)) :
                            while ($row = $res->fetch_array(MYSQLI_ASSOC)) : ?>
                                <tr>
                                    <td><?php if (!empty($row['avaliador'])) echo $row['avaliador'] ?></td>
                                    <td><?php echo $row['participante'] ?></td>
                                    <td><?php echo $row['grupo'] ?></td>
                                    <td><?php echo $row['representante'] ?></td>
                                    <td name="grupo<?php echo $row['grupo'] ?>"><?php echo $row['total'] ?></td>
                                </tr>
                                <span></span>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </tbody>
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

        <div class="table2" style="margin-top: 40px;">
            <h3>Total Avaliadores</h3>
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
                    <td id="av1"></td>
                    <td id="av2"></td>
                    <td id="av3"></td>
                    <td id="av4"></td>
                    <td id="av5"></td>
                    <td id="av6"></td>
                </tr>
            </table>
        </div>
    </div>
</body>
<script>
    const table = document.getElementById("table-result");
    const rows = table.getElementsByTagName("tbody")[0].getElementsByTagName("tr");
    const headers = table.getElementsByTagName("thead")[0].getElementsByTagName("th");
    const data = [];

    for (let i = 0; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName("td");
        const rowData = {};
        for (let j = 0; j < cells.length; j++) {
            rowData[headers[j].textContent] = cells[j].textContent;
        }
        data.push(rowData);
    }
    console.log(data);

    let sumGrupo1 = 0;
    let sumGrupo2 = 0;
    let sumGrupo3 = 0;
    let sumGrupo4 = 0;
    let sumGrupo5 = 0;
    let sumGrupo6 = 0;

    let sumAv1 = 0;
    let sumAv2 = 0;
    let sumAv3 = 0;
    let sumAv4 = 0;
    let sumAv5 = 0;
    let sumAv6 = 0;


    for (let i = 0; i < data.length; i++) {
        if (data[i].Grupo === "1" && data[i].Avaliador === "") {
            sumGrupo1 += parseInt(data[i].Total);
        }

        if (data[i].Grupo === "2" && data[i].Avaliador === "") {
            sumGrupo2 += parseInt(data[i].Total);
        }

        if (data[i].Grupo === "3" && data[i].Avaliador === "") {
            sumGrupo3 += parseInt(data[i].Total);
        }

        if (data[i].Grupo === "4" && data[i].Avaliador === "") {
            sumGrupo4 += parseInt(data[i].Total);
        }

        if (data[i].Grupo === "5" && data[i].Avaliador === "") {
            sumGrupo5 += parseInt(data[i].Total);
        }

        if (data[i].Grupo === "6" && data[i].Avaliador === "") {
            sumGrupo6 += parseInt(data[i].Total);
        }

        if (data[i].Grupo === "1" && data[i].Avaliador) {
            sumAv1 += parseInt(data[i].Total);
        }

        if (data[i].Grupo === "2" && data[i].Avaliador) {
            sumAv2 += parseInt(data[i].Total);
        }

        if (data[i].Grupo === "3" && data[i].Avaliador) {
            sumAv3 += parseInt(data[i].Total);
        }

        if (data[i].Grupo === "4" && data[i].Avaliador) {
            sumAv4 += parseInt(data[i].Total);
        }

        if (data[i].Grupo === "5" && data[i].Avaliador) {
            sumAv5 += parseInt(data[i].Total);
        }

        if (data[i].Grupo === "6" && data[i].Avaliador) {
            sumAv6 += parseInt(data[i].Total);
        }
    }

    document.getElementById("grupo1").innerHTML = sumGrupo1;
    document.getElementById("grupo2").innerHTML = sumGrupo2;
    document.getElementById("grupo3").innerHTML = sumGrupo3;
    document.getElementById("grupo4").innerHTML = sumGrupo4;
    document.getElementById("grupo5").innerHTML = sumGrupo5;
    document.getElementById("grupo6").innerHTML = sumGrupo6;

    document.getElementById("av1").innerHTML = sumAv1;
    document.getElementById("av2").innerHTML = sumAv2;
    document.getElementById("av3").innerHTML = sumAv3;
    document.getElementById("av4").innerHTML = sumAv4;
    document.getElementById("av5").innerHTML = sumAv5;
    document.getElementById("av6").innerHTML = sumAv6;
</script>

</html>