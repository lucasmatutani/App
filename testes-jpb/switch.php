<?php
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}
$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];
include_once "../includes/connection.php";

switch ($_GET['pag']) {


    case 'cenario': ?>
        <link rel="stylesheet" href="./style.css">
        <div class="titulo">
            <img class="img-logo" src="../assets/img/logo-focustrade.jpeg" alt="">
            <h1>Cenário</h1>
        </div>

        <form class="pergunta" method="POST" action="./cenario.php">
            <input type="hidden" name="usuario_id" value="<?php echo $usuario_id ?>">
            <input type="hidden" name="usuario_id" value="<?php echo $email ?>">
            <?php if ($conn) :
                $query = "SELECT * FROM testes_jpb WHERE categoria = 1";
                if ($res = mysqli_query($conn, $query)) :
                    while ($row = $res->fetch_array(MYSQLI_ASSOC)) : ?>
                        <h3 style="margin-top: 60px;"><?php echo utf8_encode($row['pergunta']) ?></h3>
                        <textarea name="<?php echo $row['nome'] ?>" id="" cols="100" rows="10" style="font-size: 1.5em"></textarea>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endif; ?>
            <input type="submit" value="ENVIAR" class="btn-submit">
        </form>
    <?php
        break;

    case 'fechamento': ?>
        <link rel="stylesheet" href="./style.css">
        <div class="titulo">
            <img class="img-logo" src="../assets/img/logo-focustrade.jpeg" alt="">
            <h1>Fechamento e Compromisso</h1>
        </div>

        <form class="pergunta" method="POST" action="./fechamento.php">
            <input type="hidden" name="usuario_id" value="<?php echo $usuario_id ?>">
            <input type="hidden" name="usuario_id" value="<?php echo $email ?>">

            <?php if ($conn) :
                $query = "SELECT * FROM testes_jpb WHERE categoria = 2";
                if ($res = mysqli_query($conn, $query)) :
                    while ($row = $res->fetch_array(MYSQLI_ASSOC)) : ?>
                        <h3 style="margin-top: 60px;"><?php echo utf8_encode($row['pergunta']) ?></h3>
                        <textarea name="<?php echo $row['nome'] ?>" id="" cols="100" rows="10" style="font-size: 1.5em"></textarea>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endif; ?>
            <input type="submit" value="ENVIAR" class="btn-submit">
        </form>
    <?php
        break;

    case 'implicacao': ?>
        <link rel="stylesheet" href="./style.css">
        <div class="titulo">
            <img class="img-logo" src="../assets/img/logo-focustrade.jpeg" alt="">
            <h1>Implicação</h1>
        </div>

        <form class="pergunta" method="POST" action="./implicacao.php">
            <input type="hidden" name="usuario_id" value="<?php echo $usuario_id ?>">
            <input type="hidden" name="usuario_id" value="<?php echo $email ?>">

            <?php if ($conn) :
                $query = "SELECT * FROM testes_jpb WHERE categoria = 3";
                if ($res = mysqli_query($conn, $query)) :
                    while ($row = $res->fetch_array(MYSQLI_ASSOC)) : ?>
                        <h3 style="margin-top: 60px;"><?php echo utf8_encode($row['pergunta']) ?></h3>
                        <textarea name="<?php echo $row['nome'] ?>" id="" cols="100" rows="10" style="font-size: 1.5em"></textarea>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endif; ?>
            <input type="submit" value="ENVIAR" class="btn-submit">
        </form>
    <?php
        break;

    case 'objetivo': ?>
        <link rel="stylesheet" href="./style.css">
        <div class="titulo">
            <img class="img-logo" src="../assets/img/logo-focustrade.jpeg" alt="">
            <h1>Objetivos</h1>
        </div>

        <form class="pergunta" method="POST" action="./objetivo.php">
            <input type="hidden" name="usuario_id" value="<?php echo $usuario_id ?>">
            <input type="hidden" name="usuario_id" value="<?php echo $email ?>">

            <?php if ($conn) :
                $query = "SELECT * FROM testes_jpb WHERE categoria = 4";
                if ($res = mysqli_query($conn, $query)) :
                    while ($row = $res->fetch_array(MYSQLI_ASSOC)) : ?>
                        <h3 style="margin-top: 60px;"><?php echo utf8_encode($row['pergunta']) ?></h3>
                        <textarea name="<?php echo $row['nome'] ?>" id="" cols="100" rows="10" style="font-size: 1.5em"></textarea>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endif; ?>
            <input type="submit" value="ENVIAR" class="btn-submit">
        </form>
    <?php
        break;

    case 'plano-tatico': ?>
        <link rel="stylesheet" href="./style.css">
        <div class="titulo">
            <img class="img-logo" src="../assets/img/logo-focustrade.jpeg" alt="">
            <h1>Plano Tático</h1>
        </div>

        <form class="pergunta" method="POST" action="./plano-tatico.php">
            <input type="hidden" name="usuario_id" value="<?php echo $usuario_id ?>">
            <input type="hidden" name="usuario_id" value="<?php echo $email ?>">

            <?php if ($conn) :
                $query = "SELECT * FROM testes_jpb WHERE categoria = 5";
                if ($res = mysqli_query($conn, $query)) :
                    while ($row = $res->fetch_array(MYSQLI_ASSOC)) : ?>
                        <h3 style="margin-top: 60px;"><?php echo utf8_encode($row['pergunta']) ?></h3>
                        <textarea name="<?php echo $row['nome'] ?>" id="" cols="100" rows="10" style="font-size: 1.5em"></textarea>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endif; ?>
            <input type="submit" value="ENVIAR" class="btn-submit">
        </form>
    <?php
        break;

    case 'problematizacao': ?>
        <link rel="stylesheet" href="./style.css">
        <div class="titulo">
            <img class="img-logo" src="../assets/img/logo-focustrade.jpeg" alt="">
            <h1>Problematização e Oportunidades</h1>
        </div>

        <form class="pergunta" method="POST" action="./problematizacao.php">
            <input type="hidden" name="usuario_id" value="<?php echo $usuario_id ?>">
            <input type="hidden" name="usuario_id" value="<?php echo $email ?>">

            <?php if ($conn) :
                $query = "SELECT * FROM testes_jpb WHERE categoria = 6";
                if ($res = mysqli_query($conn, $query)) :
                    while ($row = $res->fetch_array(MYSQLI_ASSOC)) : ?>
                        <h3 style="margin-top: 60px;"><?php echo utf8_encode($row['pergunta']) ?></h3>
                        <textarea name="<?php echo $row['nome'] ?>" id="" cols="100" rows="10" style="font-size: 1.5em"></textarea>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endif; ?>
            <input type="submit" value="ENVIAR" class="btn-submit">
        </form>
<?php
        break;

    default:

        break;
}
