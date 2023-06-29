<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}
$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];

$data = $conn->query("SELECT * FROM teste_meta_smart WHERE usuario_id = $usuario_id");
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Meta Smart</title>
</head>

<body>

    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <!-- logo e titulo -->
    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>Meta Smart</h1>
    </div>


    <form action="./sql.php" method="POST">
    <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">
        <input type="hidden" name="nome" value="<?php echo $nome ?>">

        <!-- table meta inicio -->
        <div class="container-table">
            <table class="table table-hover table-bordered" border="1px">
                <thead>
                    <tr>
                        <th scope="col">Meta</th>
                        <th scope="col">Detalhamento</th>
                        <th scope="col">É Específica?</th>
                        <th scope="col">Metríca KPI</th>
                        <th scope="col"> É Mensurável?</th>
                        <th scope="col">Probabilidade de alcançar êxito</th>
                        <th scope="col">É Alcançável?</th>
                        <th scope="col">Impacto no negócio</th>
                        <th scope="col">É Relevante?</th>
                        <th scope="col"> <label for="">Início</label> </th>
                        <th scope="col"> <label for="">Prazo Limite</label> </th>
                        <th scope="col"> <label for="">Prazo em Meses</label> </th>
                        <th scope="col">É Temporal? </th>
                        <th scope="col">É Smart? </th>
                        <th scope="col">Objetivo (valor, unid,%)</th>
                        <th scope="col">Resultado Atual</th>
                        <th scope="col">Diferença %</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td scope="row"><textarea name="txt1" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt1']; ?></textarea></td>
                        <td scope="row"><textarea name="txt2" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt2']; ?></textarea></td>
                        <td><select name="especifica" class="form-select" >
                            <option value="">Selecione</option>
                                <option value="sim" <?php if($linha['especifica'] == "sim") echo 'selected'?>>sim</option>
                                <option value="nao" <?php if($linha['especifica'] == "nao") echo 'selected'?>>não</option>
                            </select></td>
                        <td scope="row"><textarea name="txt3" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt3']; ?></textarea></td>
                        <td><select name="mensuravel" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="exito" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="muito alto">Muito Alto</option>
                                <option value="alto">Alto</option>
                                <option value="medio">Médio</option>
                                <option value="baixo">Baixo</option>
                                <option value="muito baixo">Muito Baixo</option>
                            </select></td>
                        <td><select name="alcancavel" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="negocio" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="muito alto">Muito Alto</option>
                                <option value="alto">Alto</option>
                                <option value="medio">Médio</option>
                                <option value="baixo">Baixo</option>
                                <option value="muito baixo">Muito Baixo</option>
                            </select></td>
                        <td><select name="relevante" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td> <input type="date" name="input1" id="" value="<?php if (!empty($linha)) echo $linha['input1']; ?>"></td>
                        <td> <input type="date" name="input2" id="" value="<?php if (!empty($linha)) echo $linha['input2']; ?>"></td>
                        <td><input type="date" name="input3" id="" value="<?php if (!empty($linha)) echo $linha['input3']; ?>"></td>
                        <td><select name="inicio" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="limite" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>

                        <td scope="row"><textarea name="" id="txt4" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt4']; ?></textarea></td>
                        <td scope="row"><textarea name="" id="txt5" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt5']; ?></textarea></td>
                        <td scope="row"><textarea name="" id="txt6" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt6']; ?></textarea></td>
                        <td scope="col">
                            <select name="meses" class="form-select" aria-label="Default select example">
                            <option value="">Selecione</option>
                                <option value="abaixo meta">Abaixo da meta</option>
                                <option value="meta alcancada">Meta alcançada</option>
                                <option value="acima meta">Acima da meta</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="txt7" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt7']; ?></textarea></td>
                        <td scope="row"><textarea name="txt8" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt8']; ?></textarea></td>
                        <td><select name="temporal" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td scope="row"><textarea name="txt9" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt9']; ?></textarea></td>
                        <td><select name="smart" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="status" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="muito alto">Muito Alto</option>
                                <option value="alto">Alto</option>
                                <option value="medio">Médio</option>
                                <option value="baixo">Baixo</option>
                                <option value="muito baixo">Muito Baixo</option>
                            </select></td>
                        <td><select name="especifica" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="mensuravel" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="muito alto">Muito Alto</option>
                                <option value="alto">Alto</option>
                                <option value="medio">Médio</option>
                                <option value="baixo">Baixo</option>
                                <option value="muito baixo">Muito Baixo</option>
                            </select></td>
                        <td><select name="exito" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td> <input type="date" name="input4" id="" value="<?php if (!empty($linha)) echo $linha['input4']; ?>"></td>
                        <td> <input type="date" name="input5" id="" value="<?php if (!empty($linha)) echo $linha['input5']; ?>"></td>
                        <td><input type="date" name="input6" id="" value="<?php if (!empty($linha)) echo $linha['input6']; ?>"></td>
                        <td><select name="alcancavel" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name=""negocio class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>

                        <td scope="row"><textarea name="txt10" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt10']; ?></textarea></td>
                        <td scope="row"><textarea name="txt11" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt11']; ?></textarea></td>
                        <td scope="row"><textarea name="txt12" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt12']; ?></textarea></td>
                        <td scope="col">
                            <select name="relevante" class="form-select" aria-label="Default select example">
                            <option value="">Selecione</option>
                                <option value="abaixo meta">Abaixo da meta</option>
                                <option value="meta alcancada">Meta alcançada</option>
                                <option value="acima meta">Acima da meta</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="txt13" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt13']; ?></textarea></td>
                        <td scope="row"><textarea name="txt14" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt14']; ?></textarea></td>
                        <td><select name="inicio" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td scope="row"><textarea name="txt15" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt15']; ?></textarea></td>
                        <td><select name="limite" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="meses" class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="muito alto">Muito Alto</option>
                                <option value="alto">Alto</option>
                                <option value="medio">Médio</option>
                                <option value="baixo">Baixo</option>
                                <option value="muito baixo">Muito Baixo</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">sim</option>
                                <option value="2">não</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">Muito Alto</option>
                                <option value="2">Alto</option>
                                <option value="2">Médio</option>
                                <option value="2">Baixo</option>
                                <option value="2">Muito Baixo</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">sim</option>
                                <option value="2">não</option>
                            </select></td>
                        <td> <input type="date" name="input7" id="" value="<?php if (!empty($linha)) echo $linha['input7']; ?>"></td>
                        <td> <input type="date" name="input8" id="" value="<?php if (!empty($linha)) echo $linha['input8']; ?>"></td>
                        <td><input type="date" name="input9" id="" value="<?php if (!empty($linha)) echo $linha['input9']; ?>"></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">sim</option>
                                <option value="2">não</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">sim</option>
                                <option value="2">não</option>
                            </select></td>

                        <td scope="row"><textarea name="txt16" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt16']; ?></textarea></td>
                        <td scope="row"><textarea name="txt17" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt17']; ?></textarea></td>
                        <td scope="row"><textarea name="txt18" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt18']; ?></textarea></td>
                        <td scope="col">
                            <select class="form-select" aria-label="Default select example">
                            <option value="">Selecione</option>
                                <option value="1">Abaixo da meta</option>
                                <option value="2">Meta alcançada</option>
                                <option value="2">Acima da meta</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="txt19" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt19']; ?></textarea></td>
                        <td scope="row"><textarea name="txt20" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt20']; ?></textarea></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">sim</option>
                                <option value="2">não</option>
                            </select></td>
                        <td scope="row"><textarea name="txt21" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt21']; ?></textarea></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">sim</option>
                                <option value="2">não</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">Muito Alto</option>
                                <option value="2">Alto</option>
                                <option value="2">Médio</option>
                                <option value="2">Baixo</option>
                                <option value="2">Muito Baixo</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">sim</option>
                                <option value="2">não</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">Muito Alto</option>
                                <option value="2">Alto</option>
                                <option value="2">Médio</option>
                                <option value="2">Baixo</option>
                                <option value="2">Muito Baixo</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">sim</option>
                                <option value="2">não</option>
                            </select></td>
                        <td> <input type="date" name="input10" id="" value="<?php if (!empty($linha)) echo $linha['input10']; ?>"></td>
                        <td> <input type="date" name="input11" id="" value="<?php if (!empty($linha)) echo $linha['input11']; ?>"></td>
                        <td><input type="date" name="input12" id="" value="<?php if (!empty($linha)) echo $linha['input12']; ?>"></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">sim</option>
                                <option value="2">não</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">sim</option>
                                <option value="2">não</option>
                            </select></td>

                        <td scope="row"><textarea name="txt22" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt22']; ?></textarea></td>
                        <td scope="row"><textarea name="txt23" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt23']; ?></textarea></td>
                        <td scope="row"><textarea name="txt24" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt24']; ?></textarea></td>
                        <td scope="col">
                            <select class="form-select" aria-label="Default select example">
                            <option value="">Selecione</option>
                                <option value="1">Abaixo da meta</option>
                                <option value="2">Meta alcançada</option>
                                <option value="2">Acima da meta</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="txt25" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt25']; ?></textarea></td>
                        <td scope="row"><textarea name="txt26" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt26']; ?></textarea></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">sim</option>
                                <option value="2">não</option>
                            </select></td>
                        <td scope="row"><textarea name="txt27" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt27']; ?></textarea></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">sim</option>
                                <option value="2">não</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">Muito Alto</option>
                                <option value="2">Alto</option>
                                <option value="2">Médio</option>
                                <option value="2">Baixo</option>
                                <option value="2">Muito Baixo</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">sim</option>
                                <option value="2">não</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">Muito Alto</option>
                                <option value="2">Alto</option>
                                <option value="2">Médio</option>
                                <option value="2">Baixo</option>
                                <option value="2">Muito Baixo</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">sim</option>
                                <option value="2">não</option>
                            </select></td>
                        <td> <input type="date" name="input13" id="" value="<?php if (!empty($linha)) echo $linha['input13']; ?>"></td>
                        <td> <input type="date" name="input14" id="" value="<?php if (!empty($linha)) echo $linha['input14']; ?>"></td>
                        <td><input type="date" name="input15" id="" value="<?php if (!empty($linha)) echo $linha['input15']; ?>"></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">sim</option>
                                <option value="2">não</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example">
                        <option value="">Selecione</option>
                                <option value="1">sim</option>
                                <option value="2">não</option>
                            </select></td>

                        <td scope="row"><textarea name="txt28" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt28']; ?></textarea></td>
                        <td scope="row"><textarea name="txt29" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt29']; ?></textarea></td>
                        <td scope="row"><textarea name="txt30" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt30']; ?></textarea></td>
                        <td scope="col">
                            <select class="form-select" aria-label="Default select example">
                            <option value="">Selecione</option>
                                <option value="1">Abaixo da meta</option>
                                <option value="2">Meta alcançada</option>
                                <option value="2">Acima da meta</option>
                            </select>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- table meta fim -->
    </form>

    <div class="buttom-enviar">
        <input id="botao-enviar" type="submit" onclick="teste()" value="ENVIAR RESULTADOS">
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>