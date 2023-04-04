<?php
include_once "../../includes/connection.php";
session_start();
$usuario_id = $_SESSION['usuarioId'];
?>
<div class="container-principal" style="display:flex; justify-content: center; flex-direction: column; align-items: center;">
    <h3 style="color: red;">RODADA 1</h3>
    <?php
    if ($conn) :
        $query = "SELECT * FROM diagnostico WHERE usuario_id = $usuario_id AND rodada = 1 ORDER BY grupo ASC ";
        if ($res = mysqli_query($conn, $query)) :
            while ($row = $res->fetch_array(MYSQLI_ASSOC)) : ?>
                <h3 style="color: red;">Case <?php echo $row['case_diag'] ?></h3>

                <h2>Problemas</h2>
                <textarea name="" id="" cols="120" rows="10" readonly><?php if (!empty($row['problemas'])) echo $row['problemas'] ?></textarea>

                <h2>Oportunidades</h2>
                <textarea name="" id="" cols="120" rows="10" readonly><?php if (!empty($row['oportunidade'])) echo $row['oportunidade'] ?></textarea>

                <h2>Objetivos</h2>
                <textarea name="" id="" cols="120" rows="10" readonly><?php if (!empty($row['objetivo'])) echo $row['objetivo'] ?></textarea>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endif; ?>

    <h3 style="color: red;">RODADA 2</h3>
    <?php
    if ($conn) :
        $query = "SELECT * FROM diagnostico WHERE usuario_id = $usuario_id AND rodada = 2 ORDER BY grupo ASC ";
        if ($res = mysqli_query($conn, $query)) :
            while ($row = $res->fetch_array(MYSQLI_ASSOC)) : ?>
                <h3 style="color: red;">Case <?php echo $row['case_diag'] ?></h3>

                <h2>Problemas</h2>
                <textarea name="" id="" cols="120" rows="10" readonly><?php if (!empty($row['problemas'])) echo $row['problemas'] ?></textarea>

                <h2>Oportunidades</h2>
                <textarea name="" id="" cols="120" rows="10" readonly><?php if (!empty($row['oportunidade'])) echo $row['oportunidade'] ?></textarea>

                <h2>Objetivos</h2>
                <textarea name="" id="" cols="120" rows="10" readonly><?php if (!empty($row['objetivo'])) echo $row['objetivo'] ?></textarea>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endif; ?>