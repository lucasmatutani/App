<?php
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    echo "SEM ACESSO PARA ESSA PÁGINA, FAÇA O LOGIN!";
    exit;
}
if ($_SESSION['usuarioEmail'] != "admin") {
    echo "SEM ACESSO PARA ESSA PÁGINA, FAÇA O LOGIN COMO ADMIN!";
    exit;
}
?>
<?php include_once "../../includes/connection.php"; ?>
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
            <?php if ($conn) :
                $query = "select * from teste_aida";
                if ($res = mysqli_query($conn, $query)) :
                    while ($row = $res->fetch_array(MYSQLI_ASSOC)) :
            ?>
                        <table cellpadding="30">
                            <tr style="text-align: left;">
                                <th class="th-nm1" id="grupo" style="width: 100%;"><?php echo $row['grupo']; ?></th>
                                <th style="font-size: 0.8em;"><a class="btn-editar" href="javascript:void(0)" onclick='editar(<?= json_encode($row); ?>)'>editar</a></th>
                                <th class="th-nmr1">10</th>
                            </tr>

                        </table>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </form>
</body>

</html>

<script>
    function editar($row) {
        localStorage.removeItem('grupo_escolhido');
        localStorage['grupo_escolhido'] = JSON.stringify($row);

        window.location.href = 'http://http://focustradeapp.com.br/teste-aida/respostas/';
    }
</script>