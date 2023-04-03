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


    <form action="">
        <!-- table meta inicio -->
        <div class="container-table">
            <table class="table" border="1px">
                <thead>
                    <tr>
                        <th scope="col">Meta</th>
                        <th scope="col">Detalhamento</th>
                        <th scope="col">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    É Específica?
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">SIM</button>
                                    <button class="dropdown-item" type="button">NÃO</button>
                                </div>
                            </div>
                        </th>
                        <th scope="col">Metríca KPI</th>
                        <th scope="col">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    É Mensurável?
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">SIM</button>
                                    <button class="dropdown-item" type="button">NÃO</button>
                                </div>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Probabilidade de Alcançar Êxito
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">MUITO ALTA</button>
                                    <button class="dropdown-item" type="button">ALTA</button>
                                    <button class="dropdown-item" type="button">MÉDIA</button>
                                    <button class="dropdown-item" type="button">BAIXA</button>
                                    <button class="dropdown-item" type="button">MUITO BAIXA</button>
                                </div>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    É Alcançável?
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">SIM</button>
                                    <button class="dropdown-item" type="button">NÃO</button>
                                </div>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Impacto no Négocio
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">MUITO ALTA</button>
                                    <button class="dropdown-item" type="button">ALTA</button>
                                    <button class="dropdown-item" type="button">MÉDIA</button>
                                    <button class="dropdown-item" type="button">BAIXA</button>
                                    <button class="dropdown-item" type="button">MUITO BAIXA</button>
                                </div>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    É Relevante?
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">SIM</button>
                                    <button class="dropdown-item" type="button">NÃO</button>
                                </div>
                            </div>
                        </th>
                        <th scope="col">
                            <label for="">Início</label>
                            <input type="date" name="" id="">
                        </th>
                        <th scope="col">
                            <label for="">Prazo Limite</label>
                            <input type="date" name="" id="">
                        </th>
                        <th scope="col">
                            <label for="">Prazo em Meses</label>
                            <input type="date" name="" id="">
                        </th>
                        <th scope="col">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    É Temporal?
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">SIM</button>
                                    <button class="dropdown-item" type="button">NÃO</button>
                                </div>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    É Smart?
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">SIM</button>
                                    <button class="dropdown-item" type="button">NÃO</button>
                                </div>
                            </div>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td scope="row"><textarea name="" id="" cols="7" rows="1"></textarea></td>
                        <td scope="row"><textarea name="" id="" cols="7" rows="1"></textarea></td>
                        <td></td>
                        <td scope="row"><textarea name="" id="" cols="7" rows="1"></textarea></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="" id="" cols="7" rows="1"></textarea></td>
                        <td scope="row"><textarea name="" id="" cols="7" rows="1"></textarea></td>
                        <td></td>
                        <td scope="row"><textarea name="" id="" cols="7" rows="1"></textarea></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="" id="" cols="7" rows="1"></textarea></td>
                        <td scope="row"><textarea name="" id="" cols="7" rows="1"></textarea></td>
                        <td></td>
                        <td scope="row"><textarea name="" id="" cols="7" rows="1"></textarea></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="" id="" cols="7" rows="1"></textarea></td>
                        <td scope="row"><textarea name="" id="" cols="7" rows="1"></textarea></td>
                        <td></td>
                        <td scope="row"><textarea name="" id="" cols="7" rows="1"></textarea></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="" id="" cols="7" rows="1"></textarea></td>
                        <td scope="row"><textarea name="" id="" cols="7" rows="1"></textarea></td>
                        <td></td>
                        <td scope="row"><textarea name="" id="" cols="7" rows="1"></textarea></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- table meta fim -->

        <!-- table objetivo inicio -->

        <div class="container-table-obj">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Objetivo (valor, unid,%)</th>
                        <th scope="col">Resultado Atual</th>
                        <th scope="col">Diferença %</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"><textarea name="" id="" cols="20" rows="1"></textarea></td>
                        <td scope="row"><textarea name="" id="" cols="20" rows="1"></textarea></td>
                        <td scope="row"><textarea name="" id="" cols="20" rows="1"></textarea></td>
                        <td scope="col">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">MUITO ALTA</button>
                                    <button class="dropdown-item" type="button">ALTA</button>
                                    <button class="dropdown-item" type="button">MÉDIA</button>
                                    <button class="dropdown-item" type="button">BAIXA</button>
                                    <button class="dropdown-item" type="button">MUITO BAIXA</button>
                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td scope="row"><textarea name="" id="" cols="20" rows="1"></textarea></td>
                        <td scope="row"><textarea name="" id="" cols="20" rows="1"></textarea></td>
                        <td scope="row"><textarea name="" id="" cols="20" rows="1"></textarea></td>
                        <td scope="col">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">MUITO ALTA</button>
                                    <button class="dropdown-item" type="button">ALTA</button>
                                    <button class="dropdown-item" type="button">MÉDIA</button>
                                    <button class="dropdown-item" type="button">BAIXA</button>
                                    <button class="dropdown-item" type="button">MUITO BAIXA</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row"><textarea name="" id="" cols="20" rows="1"></textarea></td>
                        <td scope="row"><textarea name="" id="" cols="20" rows="1"></textarea></td>
                        <td scope="row"><textarea name="" id="" cols="20" rows="1"></textarea></td>
                        <td scope="col">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">MUITO ALTA</button>
                                    <button class="dropdown-item" type="button">ALTA</button>
                                    <button class="dropdown-item" type="button">MÉDIA</button>
                                    <button class="dropdown-item" type="button">BAIXA</button>
                                    <button class="dropdown-item" type="button">MUITO BAIXA</button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="" id="" cols="20" rows="1"></textarea></td>
                        <td scope="row"><textarea name="" id="" cols="20" rows="1"></textarea></td>
                        <td scope="row"><textarea name="" id="" cols="20" rows="1"></textarea></td>
                        <td scope="col">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">MUITO ALTA</button>
                                    <button class="dropdown-item" type="button">ALTA</button>
                                    <button class="dropdown-item" type="button">MÉDIA</button>
                                    <button class="dropdown-item" type="button">BAIXA</button>
                                    <button class="dropdown-item" type="button">MUITO BAIXA</button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><textarea name="" id="" cols="20" rows="1"></textarea></td>
                        <td scope="row"><textarea name="" id="" cols="20" rows="1"></textarea></td>
                        <td scope="row"><textarea name="" id="" cols="20" rows="1"></textarea></td>
                        <td scope="col">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">MUITO ALTA</button>
                                    <button class="dropdown-item" type="button">ALTA</button>
                                    <button class="dropdown-item" type="button">MÉDIA</button>
                                    <button class="dropdown-item" type="button">BAIXA</button>
                                    <button class="dropdown-item" type="button">MUITO BAIXA</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>

    <div class="buttom-enviar">
        <input id="botao-enviar" type="submit" onclick="teste()" value="ENVIAR RESULTADOS" style="height: 30px; margin-left: 15px;">
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>