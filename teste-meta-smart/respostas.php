<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}

@$usuario = $_SESSION['usuario'];


$data = $conn->query("SELECT * FROM meta_smart ORDER BY email ASC");
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

    <form id="form" action="./session.php" style="display: flex; align-items: center; justify-content: center;">
        <input type="hidden" name="usuario_email" id="usuario_email" value="">
        <select class="form-select col-5 mt-5" name="usuarios" id="usuarios" style="font-size: 1.5em;" onchange="submitForm(event)">
            <option><?php echo (!empty($_SESSION['usuario_email'])) ? $_SESSION['usuario_email'] : 'Selecione um usuário' ?></option>
            <?php if (!empty($data)) { ?>
                <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                    <option value="<?php echo $row['usuario_id'] ?>"><?php echo $row['email'] ?></option>
                <?php } ?>
            <?php } ?>
        </select>
    </form>

    <?php
    if (!empty($_SESSION['usuario'])) {
        @$query = $conn->query("SELECT * FROM meta_smart WHERE usuario_id = $usuario");
        @$row = @mysqli_fetch_assoc($query);
        if (empty($query)) {
            session_destroy();
            header("location: ./respostas.php");
        }
    ?>

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
                        <td scope="row"><textarea name="txt1" id="" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt1']; ?></textarea></td>
                        <td scope="row"><textarea name="txt2" id="" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt2']; ?></textarea></td>
                        <td><select name="especifica1" class="form-select">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($row['especifica1'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($row['especifica1'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td scope="row"><textarea name="txt3" id="" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt3']; ?></textarea></td>
                        <td><select name="mensuravel1" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="exito1" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto">Muito Alto</option>
                                <option value="alto">Alto</option>
                                <option value="medio">Médio</option>
                                <option value="baixo">Baixo</option>
                                <option value="muito_baixo">Muito Baixo</option>
                            </select></td>
                        <td><select name="alcancavel1" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="negocio1" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto">Muito Alto</option>
                                <option value="alto">Alto</option>
                                <option value="medio">Médio</option>
                                <option value="baixo">Baixo</option>
                                <option value="muito_baixo">Muito Baixo</option>
                            </select></td>
                        <td><select name="relevante1" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td> <input type="date" name="inicio1" id="" value="<?php if (!empty($row)) echo $row['inicio1']; ?>"></td>
                        <td> <input type="date" name="limite1" id="" value="<?php if (!empty($row)) echo $row['limite1']; ?>"></td>
                        <td><input type="date" name="meses1" id="" value="<?php if (!empty($row)) echo $row['meses1']; ?>"></td>
                        <td><select name="temporal1" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="smart1" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>

                        <td scope="row"><textarea name="txt4" id="txt4" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt4']; ?></textarea></td>
                        <td scope="row"><textarea name="txt5" id="txt5" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt5']; ?></textarea></td>
                        <td scope="row"><textarea name="txt6" id="txt6" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt6']; ?></textarea></td>
                        <td scope="col">
                            <select name="status1" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="abaixo_meta">Abaixo da meta</option>
                                <option value="meta_alcancada">Meta alcançada</option>
                                <option value="acima_meta">Acima da meta</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="txt7" id="" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt7']; ?></textarea></td>
                        <td scope="row"><textarea name="txt8" id="" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt8']; ?></textarea></td>
                        <td><select name="especifica2" class="form-select">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($row['especifica2'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($row['especifica2'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td scope="row"><textarea name="txt9" id="" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt9']; ?></textarea></td>
                        <td><select name="mensuravel2" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="exito2" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto">Muito Alto</option>
                                <option value="alto">Alto</option>
                                <option value="medio">Médio</option>
                                <option value="baixo">Baixo</option>
                                <option value="muito_baixo">Muito Baixo</option>
                            </select></td>
                        <td><select name="alcancavel2" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="negocio2" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto">Muito Alto</option>
                                <option value="alto">Alto</option>
                                <option value="medio">Médio</option>
                                <option value="baixo">Baixo</option>
                                <option value="muito_baixo">Muito Baixo</option>
                            </select></td>
                        <td><select name="relevante2" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td> <input type="date" name="inicio2" id="" value="<?php if (!empty($row)) echo $row['inicio2']; ?>"></td>
                        <td> <input type="date" name="limite2" id="" value="<?php if (!empty($row)) echo $row['limite2']; ?>"></td>
                        <td><input type="date" name="meses2" id="" value="<?php if (!empty($row)) echo $row['meses2']; ?>"></td>
                        <td><select name="temporal2" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="smart2" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>

                        <td scope="row"><textarea name="txt10" id="txt10" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt10']; ?></textarea></td>
                        <td scope="row"><textarea name="txt11" id="txt11" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt11']; ?></textarea></td>
                        <td scope="row"><textarea name="txt12" id="txt12" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt12']; ?></textarea></td>
                        <td scope="col">
                            <select name="status2" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="abaixo_meta">Abaixo da meta</option>
                                <option value="meta_alcancada">Meta alcançada</option>
                                <option value="acima_meta">Acima da meta</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="txt13" id="" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt13']; ?></textarea></td>
                        <td scope="row"><textarea name="txt14" id="" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt14']; ?></textarea></td>
                        <td><select name="especifica3" class="form-select">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($row['especifica3'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($row['especifica3'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td scope="row"><textarea name="txt15" id="" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt15']; ?></textarea></td>
                        <td><select name="mensuravel3" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="exito3" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto">Muito Alto</option>
                                <option value="alto">Alto</option>
                                <option value="medio">Médio</option>
                                <option value="baixo">Baixo</option>
                                <option value="muito_baixo">Muito Baixo</option>
                            </select></td>
                        <td><select name="alcancavel3" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="negocio3" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto">Muito Alto</option>
                                <option value="alto">Alto</option>
                                <option value="medio">Médio</option>
                                <option value="baixo">Baixo</option>
                                <option value="muito_baixo">Muito Baixo</option>
                            </select></td>
                        <td><select name="relevante3" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td> <input type="date" name="inicio3" id="" value="<?php if (!empty($row)) echo $row['inicio3']; ?>"></td>
                        <td> <input type="date" name="limite3" id="" value="<?php if (!empty($row)) echo $row['limite3']; ?>"></td>
                        <td><input type="date" name="meses3" id="" value="<?php if (!empty($row)) echo $row['meses3']; ?>"></td>
                        <td><select name="temporal3" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="smart3" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>

                        <td scope="row"><textarea name="txt16" id="txt16" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt16']; ?></textarea></td>
                        <td scope="row"><textarea name="txt17" id="txt17" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt17']; ?></textarea></td>
                        <td scope="row"><textarea name="txt18" id="txt18" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt18']; ?></textarea></td>
                        <td scope="col">
                            <select name="status3" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="abaixo_meta">Abaixo da meta</option>
                                <option value="meta_alcancada">Meta alcançada</option>
                                <option value="acima_meta">Acima da meta</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="txt19" id="" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt19']; ?></textarea></td>
                        <td scope="row"><textarea name="txt20" id="" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt20']; ?></textarea></td>
                        <td><select name="especifica4" class="form-select">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($row['especifica4'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($row['especifica4'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td scope="row"><textarea name="txt21" id="" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt21']; ?></textarea></td>
                        <td><select name="mensuravel4" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="exito4" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto">Muito Alto</option>
                                <option value="alto">Alto</option>
                                <option value="medio">Médio</option>
                                <option value="baixo">Baixo</option>
                                <option value="muito_baixo">Muito Baixo</option>
                            </select></td>
                        <td><select name="alcancavel4" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="negocio4" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto">Muito Alto</option>
                                <option value="alto">Alto</option>
                                <option value="medio">Médio</option>
                                <option value="baixo">Baixo</option>
                                <option value="muito_baixo">Muito Baixo</option>
                            </select></td>
                        <td><select name="relevante4" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td> <input type="date" name="inicio4" id="" value="<?php if (!empty($row)) echo $row['inicio4']; ?>"></td>
                        <td> <input type="date" name="limite4" id="" value="<?php if (!empty($row)) echo $row['limite4']; ?>"></td>
                        <td><input type="date" name="meses4" id="" value="<?php if (!empty($row)) echo $row['meses4']; ?>"></td>
                        <td><select name="temporal4" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="smart4" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>

                        <td scope="row"><textarea name="txt22" id="txt22" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt22']; ?></textarea></td>
                        <td scope="row"><textarea name="txt23" id="txt23" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt23']; ?></textarea></td>
                        <td scope="row"><textarea name="txt24" id="txt24" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt24']; ?></textarea></td>
                        <td scope="col">
                            <select name="status4" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="abaixo_meta">Abaixo da meta</option>
                                <option value="meta_alcancada">Meta alcançada</option>
                                <option value="acima_meta">Acima da meta</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="txt25" id="" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt25']; ?></textarea></td>
                        <td scope="row"><textarea name="txt25" id="" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt25']; ?></textarea></td>
                        <td><select name="especifica5" class="form-select">
                                <option value="">Selecione</option>
                                <option value="sim" <?php if ($row['especifica5'] == "sim") echo 'selected' ?>>sim</option>
                                <option value="nao" <?php if ($row['especifica5'] == "nao") echo 'selected' ?>>não</option>
                            </select></td>
                        <td scope="row"><textarea name="txt26" id="" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt26']; ?></textarea></td>
                        <td><select name="mensuravel5" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="exito5" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto">Muito Alto</option>
                                <option value="alto">Alto</option>
                                <option value="medio">Médio</option>
                                <option value="baixo">Baixo</option>
                                <option value="muito_baixo">Muito Baixo</option>
                            </select></td>
                        <td><select name="alcancavel5" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="negocio5" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="muito_alto">Muito Alto</option>
                                <option value="alto">Alto</option>
                                <option value="medio">Médio</option>
                                <option value="baixo">Baixo</option>
                                <option value="muito_baixo">Muito Baixo</option>
                            </select></td>
                        <td><select name="relevante5" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td> <input type="date" name="inicio5" id="" value="<?php if (!empty($row)) echo $row['inicio5']; ?>"></td>
                        <td> <input type="date" name="limite5" id="" value="<?php if (!empty($row)) echo $row['limite5']; ?>"></td>
                        <td><input type="date" name="meses5" id="" value="<?php if (!empty($row)) echo $row['meses5']; ?>"></td>
                        <td><select name="temporal5" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>
                        <td><select name="smart5" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="sim">sim</option>
                                <option value="nao">não</option>
                            </select></td>

                        <td scope="row"><textarea name="txt27" id="txt4" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt27']; ?></textarea></td>
                        <td scope="row"><textarea name="txt28" id="txt5" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt28']; ?></textarea></td>
                        <td scope="row"><textarea name="txt29" id="txt6" cols="30" rows="2"><?php if (!empty($row)) echo $row['txt29']; ?></textarea></td>
                        <td scope="col">
                            <select name="status5" class="form-select" aria-label="Default select example">
                                <option value="">Selecione</option>
                                <option value="abaixo_meta">Abaixo da meta</option>
                                <option value="meta_alcancada">Meta alcançada</option>
                                <option value="acima_meta">Acima da meta</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php } ?>
</body>
<script>
    function submitForm(event) {

        var emailSelecionado = document.getElementById("usuarios");
        var email = emailSelecionado.options[emailSelecionado.selectedIndex].textContent;
        var inputEmail = document.getElementById("usuario_email");
        inputEmail.value = email;

        document.getElementById("form").submit();
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>