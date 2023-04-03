<?php
include_once "../../includes/connection.php";
?>
<div class="container-principal" style="display:flex; justify-content: center; align-items: center;">
    <div class="table1">
        <table cellpadding="40" cellspacing="20" id="table-result">
            <thead>
                <tr>
                    <th>Autor do teste</th>
                    <th>Vendedor</th>
                    <th>Grupo</th>
                    <th>Problemas</th>
                    <th>Oportunidades</th>
                    <th>Objetivos</th>
                </tr>
            </thead>
            <span></span>
            <tbody>
                <?php
                if ($conn) :
                    $query = "SELECT * FROM diagnostico ORDER BY grupo ASC";
                    if ($res = mysqli_query($conn, $query)) :
                        while ($row = $res->fetch_array(MYSQLI_ASSOC)) : ?>
                            <tr>
                                <td><?php echo $row['nome'] ?></td>
                                <td><?php echo $row['representante'] ?></td>
                                <td><?php echo $row['grupo'] ?></td>
                                <td><?php echo $row['problemas'] ?></td>
                                <td><?php echo $row['oportunidade'] ?></td>
                                <td><?php echo $row['objetivo'] ?></td>
                            </tr>
                            <span></span>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<style>
    td {
        border-bottom: 1px solid #000;
    }

    th {
        font-size: 1.2em;
    }

    table {
        border-collapse: collapse;
        border-bottom: 1px solid #000;
        text-align: center;
    }
</style>