<?php
include_once "../includes/connection.php";
session_start();
$usuario_id = $_SESSION['usuarioId'];
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}

$data = $conn->query("SELECT * FROM diario_de_bordo WHERE usuario_id = $usuario_id");
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
    <link rel="stylesheet" href="./style.css">
    <title>Diário de Bordo</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>Diário de Bordo</h1>
    </div>

    <form action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <div class="container-perguntas">
            <div class="container-dia">
                <h2>Dia :</h2>
                <input type="text" style="height: 30px; width: 15%; font-size: 1.5em; margin-left: 10px;">
            </div>
            <div class="pag-1">
                <p>1. Por que valeu a pena trabalhar e liderar no dia de hoje? </p>
                <textarea name="perg1" id="perg1" cols="80" rows="10"><?php if (!empty($linha)) echo $linha['perg1'] ?></textarea>

                <p>1.1. Que ideia você pode ter hoje para contribuir para a construção de um<br> ambiente melhor de se viver, trabalhar e servir no tempo presente?</p>
                <textarea name="perg2" id="" cols="80" rows="10"><?php if (!empty($linha)) echo $linha['perg2'] ?></textarea>

                <p>1.2. Como você pode colocar isso em prática? </p>
                <textarea name="perg3" id="" cols="80" rows="10"><?php if (!empty($linha)) echo $linha['perg3'] ?></textarea>
            </div>
            <div class="pag-2">
                <p>2. Se você pudesse voltar no tempo e tivesse o poder de modificar algum<br> acontecimento no dia de hoje, o que você faria de diferente? </p>
                <textarea name="perg4" id="" cols="80" rows="10"><?php if (!empty($linha)) echo $linha['perg4'] ?></textarea>
            </div>
            <div class="pag-3">
                <p>3. 6 ações que você se compromete a realizar no dia de amanhã: </p>
                <textarea name="perg5" id="" cols="80" rows="10"><?php if (!empty($linha)) echo $linha['perg5'] ?></textarea>

                <p>3. 6 ações que você se compromete a realizar no dia de amanhã: </p>
                <div class="container-txt">
                    <div>
                        <h6>1-<textarea name="perg6" id="" cols="30" rows="1"><?php if (!empty($linha)) echo $linha['perg6'] ?></textarea></h6>
                        <h6>2-<textarea name="perg7" id="" cols="30" rows="1"><?php if (!empty($linha)) echo $linha['perg7'] ?></textarea></h6>
                        <h6>3-<textarea name="perg8" id="" cols="30" rows="1"><?php if (!empty($linha)) echo $linha['perg8'] ?></textarea></h6>
                    </div>
                    <div>
                        <h6>4-<textarea name="perg9" id="" cols="30" rows="1"><?php if (!empty($linha)) echo $linha['perg9'] ?></textarea></h6>
                        <h6>5-<textarea name="perg10" id="" cols="30" rows="1"><?php if (!empty($linha)) echo $linha['perg10'] ?></textarea></h6>
                        <h6>6-<textarea name="perg11" id="" cols="30" rows="1"><?php if (!empty($linha)) echo $linha['perg11'] ?></textarea></h6>
                    </div>
                </div>

                <p>3.1. Numa escala de 0 a 10, quanto você acredita que essas ações contribuirão para um<br> dia produtivo amanhã? </p>
                <div class="container-radios">
                    <div class="container-input">
                        <input type="radio" name="quest_radio" value="1" id="">
                        <input type="radio" name="quest_radio" value="2" id="">
                        <input type="radio" name="quest_radio" value="3" id="">
                        <input type="radio" name="quest_radio" value="4" id="">
                        <input type="radio" name="quest_radio" value="5" id="">
                        <input type="radio" name="quest_radio" value="6" id="">
                        <input type="radio" name="quest_radio" value="7" id="">
                        <input type="radio" name="quest_radio" value="8" id="">
                        <input type="radio" name="quest_radio" value="9" id="">
                        <input type="radio" name="quest_radio" value="10" id="">
                    </div>

                    <div class="container-label">
                        <label for="">1</label>
                        <label for="">2</label>
                        <label for="">3</label>
                        <label for="">4</label>
                        <label for="">5</label>
                        <label for="">6</label>
                        <label for="">7</label>
                        <label for="">8</label>
                        <label for="">9</label>
                        <label for="">10</label>
                    </div>
                </div>

                <p>3.2. Com quais argumentos você confirma sua nota? </p>
                <textarea name="perg12" id="" cols="80" rows="10"><?php if (!empty($linha)) echo $linha['perg12'] ?></textarea>
            </div>
            <div class="pag-4">
                <p>4. GRATIDÃO: agradeça por 3 acontecimentos, emoções ou fatos positivos,<br> sentimentos ou conquistas do dia de hoje.</p>
                <textarea name="perg13" id="" cols="80" rows="10"><?php if (!empty($linha)) echo $linha['perg13'] ?></textarea>

                <p>5. Quais foram os aprendizados que você teve ao fazer o seu diário de<br> bordo no dia de hoje? </p>
                <textarea name="perg14" id="" cols="80" rows="10"><?php if (!empty($linha)) echo $linha['perg14'] ?></textarea>

                <p>6. Considerando o papel de líder, o que você conclui do dia de hoje?</p>
                <textarea name="perg15" id="" cols="80" rows="10"><?php if (!empty($linha)) echo $linha['perg15'] ?></textarea>
            </div>

            <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS" style="height: 30px; margin-left: 15px;">

        </div>
    </form>

</body>
<script>
    if (window.innerHeight > window.innerWidth) {
        alert("Por favor, utilize no modo paisagem");
    }
</script>
</html>