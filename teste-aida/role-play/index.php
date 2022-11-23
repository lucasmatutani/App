<?php include_once "../includes/connection.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Respotas A I D A</title>
</head>

<body>
    <div class="container-titulo">

        <img class="img-logo" src="../../assets/img/logo-focustrade.jpeg" alt="">

        <img class="img-titulo" src="../../assets/img/logo-aida-sem-fundo.png" alt="">
    </div>

    <h3 class="h-titulo">Meios de comunicação</h3>

    <form action="">
        <div class="container-table">
            <?php if ($bd && $_REQUEST["type"] == "form") :
                $query = "select teste_aida,
                s.nome as nome_seguradora,
                l.nome as nome_plano,
                dolar,
                s.id as id_seguradora,
                l.id as id_plano,
                l.cobertura_medica,
                l.cobertura_bagagem,
                l.desconto_familiar,
                idade_adicional,
                preco_fam2,
                preco_fam5
                from seguro_preco p, seguro_seguradora s, seguro_plano l, seguro_cambio d
                where
                l.id_mercado = $origem and
                s.id = l.id_seguradora and
                l.id = p.id_plano and
                s.id = d.id_seguradora and
                dias=$dias ";
            ?>
                <table cellpadding="30">
                    <tr style="text-align: left;">

                        <th class="th-nm1" style="width: 100%;">Focus Trade</th>

                        <th style="font-size: 1em;"> <a class="btn-editar" href="">editar</a> </th>
                        <th class="th-nmr1">10</th>
                    </tr>

                </table>
            <?php endif; ?>
        </div>
    </form>
</body>

</html>