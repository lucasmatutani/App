<?php
include_once "../includes/connection.php";
session_start();
$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];

if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}

$data = $conn->query("SELECT * FROM teste_cavaben WHERE usuario_id = $usuario_id");

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>CAVABEN</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>Dinâmica Cavaben</h1>
    </div>

    <form action="./sql.php" method="POST">
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">

        <table class="table table-striped">
            <tr>
                <th>Vendedor:</th>
                <td>O sistema possui estabilizador de voltagem</td>
                <td><input type="text" name="input1" value="<?php if (!empty($linha)) echo $linha['input1']; ?>"></td>
            </tr>
            <tr>
                <th>Comprador:</th>
                <td>E o que ele faz?</td>

            </tr>
            <tr>
                <th>Vendedor:</th>
                <td>Ele protege os picos de energia elétrica; assim você
                    não perderá informações valiosas se houver oscilções de
                    voltagem</td>
                <td><input type=" text" name="input2" value="<?php if (!empty($linha)) echo $linha['input2']; ?>"></td>
            </tr>
            <tr>
                <th>Comprador:</th>
                <td>Isso não é necessário aqui. Este prédio é equipado para
                    uso científico, por isso existe um sistema de proteção
                    instalada</td>
            </tr>
            <tr>
                <th>Vendedor:</th>
                <td>Mas eu tenho certeza que você achará a memória Backup
                    útil. Isso quer dizer que, caso haja um erro operacional e seus
                    arquivos principais sejam apagados, você sempre terá um
                    backup automático e nunca correrá o risco de perder dados
                    importantes</td>
                <td><input type="text" name="input3" id="" value="<?php if (!empty($linha)) echo $linha['input3']; ?>"></td>
            </tr>
            <tr>
                <th>Comprador:</th>
                <td>E qual é o custo?</td>
            </tr>
            <tr>
                <th>Vendedor:</th>
                <td>O sistema básico custa $ 78 mil</td>
                <td><input type="text" name="input4" value="<?php if (!empty($linha)) echo $linha['input4']; ?>"></td>
            </tr>
            <tr>
                <th>Comprador:</th>
                <td>E ele é compatível com nossa leitora ótica?</td>
            </tr>
            <tr>
                <th>Vendedor:</th>
                <td>Sim, você conseguirá ler os seus dados atuais sem nenhuma
                    conversão, então se você quiser ler diretamente na memória,
                    poderá fazer isso.</td>
                <td><input type="text" name="input5" value="<?php if (!empty($linha)) echo $linha['input5']; ?>"></td>
            </tr>
            <tr>
                <th>Comprador:</th>
                <td>Isso é bom. E sobre as margens de erro? Eu preciso ter menos
                    de 1 em 100 mil
                </td>
            </tr>
            <tr>
                <th>Vendedor:</th>
                <td>Então você ficará satisfeito em ouvir o que o sistema o que
                    o sistema tem uma das menores margens de erro do mercado
                    menos de 1 em 1,5milhão, o que é muito compatível com
                    suas necessidades</td>
                <td><input type="text" name="input6" value="<?php if (!empty($linha)) echo $linha['input6']; ?>"></td>
            </tr>
            <tr>
                <th>Comprador:</th>
                <td>Muito bom.</td>
            </tr>
            <tr>
                <th>Vendedor:</th>
                <td>E por causa da baixa margem de erro, você pode usar o
                    sistema para validar as outras fontes de processamento,
                    economizando o custo de um processo de validação separad</td>
                <td><input type="text" name="input7" id="" value="<?php if (!empty($linha)) echo $linha['input7']; ?>"></td>
            </tr>
            <tr>
                <th>Comprador:</th>
                <td>Disso eu já não tenho certeza. Temos questões de segurança
                    sobre a validação de de dados das nossas outras fontes</td>
            </tr>
            <tr>
                <th>Vendedor:</th>
                <td>Em matéria de segurança, esse sistema tem oito níveis
                    possíveis de codificação incorporados</td>
                <td><input type="text" name="input8" id="" value="<?php if (!empty($linha)) echo $linha['input8']; ?>"></td>
            </tr>
            <tr>
                <th>Comprador:</th>
                <td>Eles são definidos pelo usuário?
                </td>
            </tr>
            <tr>
                <th>Vendedor:</th>
                <td>Em 5 níveis, os outros 3 são ramdomizados ou com base no tempo</td>
                <td><input type="text" name="input9" value="<?php if (!empty($linha)) echo $linha['input9']; ?>"></td>
            </tr>
            <tr>
                <th>
                    Comprador:
                </th>
                <td> Com base no tempo?
                </td>
            </tr>
            <tr>
                <th>Vendedor:</th>
                <td>Sim, Veja que grande vantagem de um sistema baseado no tempo,
                    para uma organização como a sua, é que você pode colocar simultanea
                    e automaticamente códigos entre unidades operacionais - o quê
                    significa que seus operadores não precisam memorizar códigos novos e
                    ainda assim é quase impossível de serem invadidos por hackers</td>
                <td><input type="text" name="input10" value="<?php if (!empty($linha)) echo $linha['input10']; ?>"></td>
            </tr>
        </table>
    </form>
    <div class="buttom-enviar">
        <input id="botao-enviar" type="submit" onclick="teste()" value="ENVIAR RESULTADOS">
    </div>

    <!-- links js bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>