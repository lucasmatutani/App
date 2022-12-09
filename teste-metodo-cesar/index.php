<?php
include_once "../includes/connection.php";
session_start();
$usuario_id = $_SESSION['usuarioId'];

$query = "SELECT * FROM teste_metodo_cesar WHERE usuario_id = $usuario_id";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style.css">
    <title>Método Cesar</title>
</head>

<body>
    <div class="container-titulo">
        <img src="../assets/img/logo-focustrade.jpeg" alt="logo" style="min-width: 300px;">
        <h1>MÉTODO CESAR</h1>
    </div>
    <?php
    $data = $conn->query("SELECT * FROM teste_metodo_cesar WHERE usuario_id = $usuario_id");
    $linha = mysqli_fetch_assoc($data);
    if ($linha['usuario_id'] == $usuario_id) {
        if ($res = mysqli_query($conn, $query))
            while ($row = $res->fetch_array(MYSQLI_ASSOC)) : ?>
            <form action="./sql.php" method="POST">
                <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">

                <div class="container-case">
                    <h2>Escolha um case de atendimento do dia a dia</h2>
                    <textarea name="case" id="" cols="30" rows="10" required><?php echo $row['caso'] ?></textarea>
                </div>

                <h1 class="atitudes">Atitudes</h1>

                <div class="container-atitudes">
                    <div class="container-resposta">
                        <h2>Confiança</h2>
                        <textarea name="confianca" id="" cols="30" rows="10" required><?php echo $row['confianca'] ?></textarea>
                    </div>
                    <div class="container-resposta">
                        <h2>Empatia</h2>
                        <textarea name="empatia" id="" cols=" 30" rows="10" required><?php echo $row['empatia'] ?></textarea>
                    </div>
                    <div class="container-resposta">
                        <h2>Segurança</h2>
                        <textarea name="seguranca" id="" cols="30" rows="10" required><?php echo $row['seguranca'] ?></textarea>
                    </div>
                    <div class="container-resposta">
                        <h2>Aparência</h2>
                        <textarea name="aparencia" id="" cols="30" rows="10" required><?php echo $row['aparencia'] ?></textarea>
                    </div>
                    <div class="container-resposta">
                        <h2>Resposta</h2>
                        <textarea name="resposta" id="" cols=" 30" rows="10" required><?php echo $row['resposta'] ?></textarea>
                    </div>
                </div>

                <div class="container-observacoes">
                    <h1>Observações</h1>
                    <textarea name="observacoes" id="" cols="30" rows="10"><?php if (!empty($row['observacoes'])) echo $row['observacoes'] ?></textarea>
                </div>
            <?php endwhile; ?>
            <input id="botao-enviar" type="submit" value="ENVIAR">
            </form>
        <?php } ?>

        <form action="./sql.php" method="POST">
            <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">

            <div class="container-case">
                <h2>Escolha um case de atendimento do dia a dia</h2>
                <textarea name="case" id="" cols="30" rows="10" required></textarea>
            </div>

            <h1 class="atitudes">Atitudes</h1>

            <div class="container-atitudes">
                <div class="container-resposta">
                    <h2>Confiança</h2>
                    <textarea name="confianca" id="" cols="30" rows="10" required></textarea>
                </div>
                <div class="container-resposta">
                    <h2>Empatia</h2>
                    <textarea name="empatia" id="" cols=" 30" rows="10" required></textarea>
                </div>
                <div class="container-resposta">
                    <h2>Segurança</h2>
                    <textarea name="seguranca" id="" cols="30" rows="10" required></textarea>
                </div>
                <div class="container-resposta">
                    <h2>Aparência</h2>
                    <textarea name="aparencia" id="" cols="30" rows="10" required></textarea>
                </div>
                <div class="container-resposta">
                    <h2>Resposta</h2>
                    <textarea name="resposta" id="" cols=" 30" rows="10" required></textarea>
                </div>
            </div>

            <div class="container-observacoes">
                <h1>Observações</h1>
                <textarea name="observacoes" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="btn-enviar">
                <input id="botao-enviar" type="submit" value="ENVIAR">
            </div>
        </form>
</body>

</html>