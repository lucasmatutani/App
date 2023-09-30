<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}
$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];

$data = $conn->query("SELECT * FROM meta_smart WHERE usuario_id = $usuario_id");
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
                        <td><select name="especifica1" class="form-select">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['especifica1'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['especifica1'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td scope="row"><textarea name="txt3" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt3']; ?></textarea></td>
                        <td><select name="mensuravel1" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['mensuravel1'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['mensuravel1'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td><select name="exito1" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto" <?php if ($linha['exito1'] == "muito_alto") echo 'selected' ?>>Muito Alto</option>
                                <option value="alto" <?php if ($linha['exito1'] == "alto") echo 'selected' ?>>Alto</option>
                                <option value="medio" <?php if ($linha['exito1'] == "medio") echo 'selected' ?>>Médio</option>
                                <option value="baixo" <?php if ($linha['exito1'] == "baixo") echo 'selected' ?>>Baixo</option>
                                <option value="muito_baixo" <?php if ($linha['exito1'] == "muito_baixo") echo 'selected' ?>>Muito Baixo</option>
                            </select></td>
                        <td><select name="alcancavel1" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['alcancavel1'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['alcancavel1'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td><select name="negocio1" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto" <?php if ($linha['negocio1'] == "muito_alto") echo 'selected' ?>>Muito Alto</option>
                                <option value="alto" <?php if ($linha['negocio1'] == "alto") echo 'selected' ?>>Alto</option>
                                <option value="medio" <?php if ($linha['negocio1'] == "medio") echo 'selected' ?>>Médio</option>
                                <option value="baixo" <?php if ($linha['negocio1'] == "baixo") echo 'selected' ?>>Baixo</option>
                                <option value="muito_baixo" <?php if ($linha['negocio1'] == "muito_baixo") echo 'selected' ?>>Muito Baixo</option>
                            </select></td>
                        <td><select name="relevante1" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['relevante1'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['relevante1'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td> <input type="date" name="inicio1" id="" value="<?php if (!empty($linha)) echo $linha['inicio1']; ?>"></td>
                        <td> <input type="date" name="limite1" id="" value="<?php if (!empty($linha)) echo $linha['limite1']; ?>"></td>
                        <td><input type="date" name="meses1" id="" value="<?php if (!empty($linha)) echo $linha['meses1']; ?>"></td>
                        <td><select name="temporal1" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['temporal1'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['temporal1'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td><select name="smart1" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['smart1'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['smart1'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>

                        <td scope="row"><textarea name="txt4" id="txt4" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt4']; ?></textarea></td>
                        <td scope="row"><textarea name="txt5" id="txt5" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt5']; ?></textarea></td>
                        <td scope="row"><textarea name="txt6" id="txt6" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt6']; ?></textarea></td>
                        <td scope="col">
                            <select name="status1" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="abaixo_meta" <?php if ($linha['status1'] == "abaixo_meta") echo 'selected' ?>>Abaixo da meta</option>
                                <option value="meta_alcancada" <?php if ($linha['status1'] == "meta_alcancada") echo 'selected' ?>>Meta alcançada</option>
                                <option value="acima_meta" <?php if ($linha['status1'] == "acima_meta") echo 'selected' ?>>Acima da meta</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="txt7" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt7']; ?></textarea></td>
                        <td scope="row"><textarea name="txt8" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt8']; ?></textarea></td>
                        <td><select name="especifica2" class="form-select">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['especifica2'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['especifica2'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td scope="row"><textarea name="txt9" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt9']; ?></textarea></td>
                        <td><select name="mensuravel2" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['mensuravel2'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['mensuravel2'] == "sim") echo 'selected' ?>>não</option>
                            </select></td>
                        <td><select name="exito2" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto" <?php if ($linha['exito2'] == "muito_alto") echo 'selected' ?>>Muito Alto</option>
                                <option value="alto" <?php if ($linha['exito2'] == "alto") echo 'selected' ?>>Alto</option>
                                <option value="medio" <?php if ($linha['exito2'] == "medio") echo 'selected' ?>>Médio</option>
                                <option value="baixo" <?php if ($linha['exito2'] == "baixo") echo 'selected' ?>>Baixo</option>
                                <option value="muito_baixo" <?php if ($linha['exito2'] == "muito_baixo") echo 'selected' ?>>Muito Baixo</option>
                            </select></td>
                        <td><select name="alcancavel2" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['alcancavel2'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['alcancavel2'] == "sim") echo 'selected' ?>>não</option>
                            </select></td>
                        <td><select name="negocio2" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto" <?php if ($linha['negocio2'] == "muito_alto") echo 'selected' ?>>Muito Alto</option>
                                <option value="alto" <?php if ($linha['negocio2'] == "alto") echo 'selected' ?>>Alto</option>
                                <option value="medio" <?php if ($linha['negocio2'] == "medio") echo 'selected' ?>>Médio</option>
                                <option value="baixo" <?php if ($linha['negocio2'] == "baixo") echo 'selected' ?>>Baixo</option>
                                <option value="muito_baixo" <?php if ($linha['negocio1'] == "muito_baixo") echo 'selected' ?>>Muito Baixo</option>
                            </select></td>
                        <td><select name="relevante2" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['relevante2'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['relevante2'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td> <input type="date" name="inicio2" id="" value="<?php if (!empty($linha)) echo $linha['inicio2']; ?>"></td>
                        <td> <input type="date" name="limite2" id="" value="<?php if (!empty($linha)) echo $linha['limite2']; ?>"></td>
                        <td><input type="date" name="meses2" id="" value="<?php if (!empty($linha)) echo $linha['meses2']; ?>"></td>
                        <td><select name="temporal2" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['temporal2'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['temporal2'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td><select name="smart2" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['smart2'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['smart2'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>

                        <td scope="row"><textarea name="txt10" id="txt10" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt10']; ?></textarea></td>
                        <td scope="row"><textarea name="txt11" id="txt11" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt11']; ?></textarea></td>
                        <td scope="row"><textarea name="txt12" id="txt12" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt12']; ?></textarea></td>
                        <td scope="col">
                            <select name="status2" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="abaixo_meta" <?php if ($linha['status2'] == "abaixo_meta") echo 'selected' ?>>Abaixo da meta</option>
                                <option value="meta_alcancada" <?php if ($linha['status2'] == "meta_alcancada") echo 'selected' ?>>Meta alcançada</option>
                                <option value="acima_meta" <?php if ($linha['status2'] == "acima_meta") echo 'selected' ?>>Acima da meta</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="txt13" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt13']; ?></textarea></td>
                        <td scope="row"><textarea name="txt14" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt14']; ?></textarea></td>
                        <td><select name="especifica3" class="form-select">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['especifica3'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['especifica3'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td scope="row"><textarea name="txt15" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt15']; ?></textarea></td>
                        <td><select name="mensuravel3" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['mensuravel3'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['mesuravel3'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td><select name="exito3" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto" <?php if ($linha['exito3'] == "muito_alto") echo 'selected' ?>>Muito Alto</option>
                                <option value="alto" <?php if ($linha['exito3'] == "alto") echo 'selected' ?>>Alto</option>
                                <option value="medio" <?php if ($linha['exito3'] == "medio") echo 'selected' ?>>Médio</option>
                                <option value="baixo" <?php if ($linha['exito2'] == "baixo") echo 'selected' ?>>Baixo</option>
                                <option value="muito_baixo" <?php if ($linha['exito3'] == "muito_baixo") echo 'selected' ?>>Muito Baixo</option>
                            </select></td>
                        <td><select name="alcancavel3" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['alcancavel3'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['alcancavel3'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td><select name="negocio3" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto" <?php if ($linha['negocio3'] == "muito_alto") echo 'selected' ?>>Muito Alto</option>
                                <option value="alto" <?php if ($linha['negocio3'] == "alto") echo 'selected' ?>>Alto</option>
                                <option value="medio" <?php if ($linha['negocio3'] == "medio") echo 'selected' ?>>Médio</option>
                                <option value="baixo" <?php if ($linha['negocio3'] == "baixo") echo 'selected' ?>>Baixo</option>
                                <option value="muito_baixo" <?php if ($linha['negocio3'] == "muito_baixo") echo 'selected' ?>>Muito Baixo</option>
                            </select></td>
                        <td><select name="relevante3" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['relevante3'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['relevante3'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td> <input type="date" name="inicio3" id="" value="<?php if (!empty($linha)) echo $linha['inicio3']; ?>"></td>
                        <td> <input type="date" name="limite3" id="" value="<?php if (!empty($linha)) echo $linha['limite3']; ?>"></td>
                        <td><input type="date" name="meses3" id="" value="<?php if (!empty($linha)) echo $linha['meses3']; ?>"></td>
                        <td><select name="temporal3" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['temporal3'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['temporal3'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td><select name="smart3" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['smart3'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['smart3'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>

                        <td scope="row"><textarea name="txt16" id="txt16" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt16']; ?></textarea></td>
                        <td scope="row"><textarea name="txt17" id="txt17" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt17']; ?></textarea></td>
                        <td scope="row"><textarea name="txt18" id="txt18" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt18']; ?></textarea></td>
                        <td scope="col">
                            <select name="status3" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="abaixo_meta" <?php if ($linha['status3'] == "abaixo_meta") echo 'selected' ?>>Abaixo da meta</option>
                                <option value="meta_alcancada" <?php if ($linha['status3'] == "meta_alcancada") echo 'selected' ?>>Meta alcançada</option>
                                <option value="acima_meta" <?php if ($linha['status3'] == "acima_meta") echo 'selected' ?>>Acima da meta</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="txt19" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt19']; ?></textarea></td>
                        <td scope="row"><textarea name="txt20" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt20']; ?></textarea></td>
                        <td><select name="especifica4" class="form-select">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['especifica4'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['especifica4'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td scope="row"><textarea name="txt21" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt21']; ?></textarea></td>
                        <td><select name="mensuravel4" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['mensuravel4'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['mensuravel4'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td><select name="exito4" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto" <?php if ($linha['exito4'] == "muito_alto") echo 'selected' ?>>Muito Alto</option>
                                <option value="alto" <?php if ($linha['exito4'] == "alto") echo 'selected' ?>>Alto</option>
                                <option value="medio" <?php if ($linha['exito4'] == "medio") echo 'selected' ?>>Médio</option>
                                <option value="baixo" <?php if ($linha['exito4'] == "baixo") echo 'selected' ?>>Baixo</option>
                                <option value="muito_baixo" <?php if ($linha['exito4'] == "muito_baixo") echo 'selected' ?>>Muito Baixo</option>
                            </select></td>
                        <td><select name="alcancavel4" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['alcancavel4'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['alcancavel4'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td><select name="negocio4" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto" <?php if ($linha['negocio4'] == "muito_alto") echo 'selected' ?>>Muito Alto</option>
                                <option value="alto" <?php if ($linha['negocio4'] == "alto") echo 'selected' ?>>Alto</option>
                                <option value="medio" <?php if ($linha['negocio4'] == "medio") echo 'selected' ?>>Médio</option>
                                <option value="baixo" <?php if ($linha['negocio4'] == "baixo") echo 'selected' ?>>Baixo</option>
                                <option value="muito_baixo" <?php if ($linha['negocio4'] == "muito_baixo") echo 'selected' ?>>Muito Baixo</option>
                            </select></td>
                        <td><select name="relevante4" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['relevante4'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['relevante4'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td> <input type="date" name="inicio4" id="" value="<?php if (!empty($linha)) echo $linha['inicio4']; ?>"></td>
                        <td> <input type="date" name="limite4" id="" value="<?php if (!empty($linha)) echo $linha['limite4']; ?>"></td>
                        <td><input type="date" name="meses4" id="" value="<?php if (!empty($linha)) echo $linha['meses4']; ?>"></td>
                        <td><select name="temporal4" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['temporal4'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['temporal4'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td><select name="smart4" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['smart4'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['smart4'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>

                        <td scope="row"><textarea name="txt22" id="txt22" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt22']; ?></textarea></td>
                        <td scope="row"><textarea name="txt23" id="txt23" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt23']; ?></textarea></td>
                        <td scope="row"><textarea name="txt24" id="txt24" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt24']; ?></textarea></td>
                        <td scope="col">
                            <select name="status4" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="abaixo_meta" <?php if ($linha['status4'] == "abaixo_meta") echo 'selected' ?>>Abaixo da meta</option>
                                <option value="meta_alcancada" <?php if ($linha['status4'] == "meta_alcancada") echo 'selected' ?>>Meta alcançada</option>
                                <option value="acima_meta" <?php if ($linha['status4'] == "acima_meta") echo 'selected' ?>>Acima da meta</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="txt25" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt25']; ?></textarea></td>
                        <td scope="row"><textarea name="txt25" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt25']; ?></textarea></td>
                        <td><select name="especifica5" class="form-select">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['especifica5'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['especifica5'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td scope="row"><textarea name="txt26" id="" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt26']; ?></textarea></td>
                        <td><select name="mensuravel5" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['mensuravel5'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['mensuravel5'] == "sim") echo 'selected' ?>>não</option>
                            </select></td>
                        <td><select name="exito5" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto" <?php if ($linha['exito5'] == "muito_alto") echo 'selected' ?>>Muito Alto</option>
                                <option value="alto" <?php if ($linha['exito5'] == "alto") echo 'selected' ?>>Alto</option>
                                <option value="medio" <?php if ($linha['exito5'] == "medio") echo 'selected' ?>>Médio</option>
                                <option value="baixo" <?php if ($linha['exito5'] == "baixo") echo 'selected' ?>>Baixo</option>
                                <option value="muito_baixo" <?php if ($linha['exito5'] == "muito_baixo") echo 'selected' ?>>Muito Baixo</option>
                            </select></td>
                        <td><select name="alcancavel5" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['alcancavel5'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['alcancavel5'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td><select name="negocio5" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto" <?php if ($linha['negocio5'] == "muito_alto") echo 'selected' ?>>Muito Alto</option>
                                <option value="alto" <?php if ($linha['negocio5'] == "alto") echo 'selected' ?>>Alto</option>
                                <option value="medio" <?php if ($linha['negocio5'] == "medio") echo 'selected' ?>>Médio</option>
                                <option value="baixo" <?php if ($linha['negocio5'] == "baixo") echo 'selected' ?>>Baixo</option>
                                <option value="muito_baixo" <?php if ($linha['negocio5'] == "muito_baixo") echo 'selected' ?>>Muito Baixo</option>
                            </select></td>
                        <td><select name="relevante5" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['relevante5'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['relevante5'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td> <input type="date" name="inicio5" id="" value="<?php if (!empty($linha)) echo $linha['inicio5']; ?>"></td>
                        <td> <input type="date" name="limite5" id="" value="<?php if (!empty($linha)) echo $linha['limite5']; ?>"></td>
                        <td><input type="date" name="meses5" id="" value="<?php if (!empty($linha)) echo $linha['meses5']; ?>"></td>
                        <td><select name="temporal5" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['temporal5'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['temporal5'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td><select name="smart5" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($linha['smart5'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($linha['smart5'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>

                        <td scope="row"><textarea name="txt27" id="txt4" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt27']; ?></textarea></td>
                        <td scope="row"><textarea name="txt28" id="txt5" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt28']; ?></textarea></td>
                        <td scope="row"><textarea name="txt29" id="txt6" cols="30" rows="2"><?php if (!empty($linha)) echo $linha['txt29']; ?></textarea></td>
                        <td scope="col">
                            <select name="status5" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="abaixo_meta" <?php if ($linha['status5'] == "abaixo_meta") echo 'selected' ?>>Abaixo da meta</option>
                                <option value="meta_alcancada" <?php if ($linha['status5'] == "meta_alcancada") echo 'selected' ?>>Meta alcançada</option>
                                <option value="acima_meta" <?php if ($linha['status5'] == "aimca_meta") echo 'selected' ?>>Acima da meta</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- table meta fim -->
        <div class="buttom-enviar">
            <input id="botao-enviar" type="submit" onclick="teste()" value="ENVIAR RESULTADOS">
        </div>
    </form>


</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>