<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}

$data = $conn->query("SELECT * FROM plano_de_acao_5w2h ORDER BY email ASC");
@$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Plano de ação 5W2H</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <div class="container-header">
        <img src="../assets/img/logo-focustrade.jpeg" alt="">
        <h1>Plano de ação 5W2H</h1>
    </div>

    <form action="./session.php" id="form" method="POST" id="formData" style="display: flex; justify-content: center; align-items: center;">
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
        $query = $conn->query("SELECT * FROM plano_de_acao_5w2h WHERE usuario_id = $usuario");
        $row = mysqli_fetch_assoc($query);
        if (empty($query)) {
            session_destroy();
            header("location: ./respostas.php");
        }
    ?>
    
        <input type="hidden" id="resultado1" name="resultado1" value="<?php if (!empty($row['resultado1'])) echo $row['resultado1'] ?>">
        <input type="hidden" id="resultado2" name="resultado2" value="<?php if (!empty($row['resultado2'])) echo $row['resultado2'] ?>">
        <input type="hidden" id="resultado3" name="resultado3" value="<?php if (!empty($row['resultado3'])) echo $row['resultado3'] ?>">
        <input type="hidden" id="resultado4" name="resultado4" value="<?php if (!empty($row['resultado4'])) echo $row['resultado4'] ?>">
        <input type="hidden" id="resultado5" name="resultado5" value="<?php if (!empty($row['resultado5'])) echo $row['resultado5'] ?>">
        <input type="hidden" id="resultado6" name="resultado6" value="<?php if (!empty($row['resultado6'])) echo $row['resultado6'] ?>">
        <input type="hidden" id="resultado7" name="resultado7" value="<?php if (!empty($row['resultado7'])) echo $row['resultado7'] ?>">

        <div class="objetivo mt-5">
            <h3>Objetivo:</h3>
            <textarea name="objetivo" class="col-8" rows="4"><?php if (!empty($row)) echo $row['objetivo']; ?></textarea>
        </div>
        <div class="container-titulo mt-3">
            <div class="container-1">
                <p>Consultor:</p>
                <input type="text" name="consultor" value="<?php if (!empty($row)) echo $row['consultor']; ?>">
                <p>Setor:</p>
                <input type="text" name="setor" value="<?php if (!empty($row)) echo $row['setor']; ?>">
            </div>
            <div class="container-2">
                <p>Data de Elaboração:</p>
                <input type="text" name="elaboracao" value="<?php if (!empty($row)) echo $row['elaboracao']; ?>">
                <p>Última Atualização:</p>
                <input type="text" name="atualizacao" value="<?php if (!empty($row)) echo $row['atualizacao']; ?>">
            </div>
        </div>

        <div class="container-principal" style="display:flex; justify-content: center; align-items: center;">
            <div class="container-pergunta">
                <div class="name-pergunta">Nº</div>
                <div class="name-pergunta">O Quê?</div>
                <div class="name-pergunta">Por Quê?</div>
                <div class="name-pergunta">Como?</div>
                <div class="name-pergunta">Onde?</div>
                <div class="name-pergunta">Resp</div>
                <div class="name-pergunta">Prazo.</div>
                <div class="name-pergunta">Quanto Custa?</div>
                <div class="name-pergunta">Elementos Limitantes</div>
                <div class="name-pergunta">Recursos Necessários</div>
                <div class="name-pergunta">Status %</div>
                <div class="name-pergunta">Concluído Sim/Não Justificar</div>


                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div class="subgrid_numbers" style="background-color: #314B7C; color:#fff">
                    <div>20</div>
                    <div>40</div>
                    <div>60</div>
                    <div>80</div>
                    <div>100</div>
                </div>
                <div></div>
                <textarea name="txt1" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt1']; ?></textarea>
                <textarea name="txt2" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt2']; ?></textarea>
                <textarea name="txt3" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt3']; ?></textarea>
                <textarea name="txt4" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt4']; ?></textarea>
                <textarea name="txt5" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt5']; ?></textarea>
                <textarea name="txt6" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt6']; ?></textarea>
                <textarea name="txt7" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt7']; ?></textarea>
                <textarea name="txt8" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt8']; ?></textarea>
                <textarea name="txt9" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt9']; ?></textarea>
                <textarea name="txt10" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt10']; ?></textarea>
                <div class="subgrid" id="pontuacao1">
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                </div>
                <textarea name="txt11" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt11']; ?></textarea>
                <textarea name="txt12" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt12']; ?></textarea>
                <textarea name="txt13" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt13']; ?></textarea>
                <textarea name="txt14" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt14']; ?></textarea>
                <textarea name="txt15" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt15']; ?></textarea>
                <textarea name="txt16" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt16']; ?></textarea>
                <textarea name="txt17" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt17']; ?></textarea>
                <textarea name="txt18" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt18']; ?></textarea>
                <textarea name="txt19" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt19']; ?></textarea>
                <textarea name="txt20" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt20']; ?></textarea>
                <textarea name="txt21" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt21']; ?></textarea>
                <div class="subgrid" id="pontuacao2">
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                </div>
                <textarea name="txt22" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt22']; ?></textarea>
                <textarea name="txt23" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt23']; ?></textarea>
                <textarea name="txt24" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt24']; ?></textarea>
                <textarea name="txt25" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt25']; ?></textarea>
                <textarea name="txt26" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt26']; ?></textarea>
                <textarea name="txt27" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt27']; ?></textarea>
                <textarea name="txt28" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt28']; ?></textarea>
                <textarea name="txt29" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt29']; ?></textarea>
                <textarea name="txt30" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt30']; ?></textarea>
                <textarea name="txt31" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt31']; ?></textarea>
                <textarea name="txt32" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt32']; ?></textarea>
                <div class="subgrid" id="pontuacao3">
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                </div>
                <textarea name="txt33" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt33']; ?></textarea>
                <textarea name="txt34" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt34']; ?></textarea>
                <textarea name="txt35" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt35']; ?></textarea>
                <textarea name="txt36" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt36']; ?></textarea>
                <textarea name="txt37" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt37']; ?></textarea>
                <textarea name="txt38" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt38']; ?></textarea>
                <textarea name="txt39" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt39']; ?></textarea>
                <textarea name="txt40" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt40']; ?></textarea>
                <textarea name="txt41" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt41']; ?></textarea>
                <textarea name="txt42" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt42']; ?></textarea>
                <textarea name="txt43" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt43']; ?></textarea>
                <div class="subgrid" id="pontuacao4">
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                </div>

                <textarea name="txt44" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt44']; ?></textarea>
                <textarea name="txt45" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt45']; ?></textarea>
                <textarea name="txt46" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt46']; ?></textarea>
                <textarea name="txt47" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt47']; ?></textarea>
                <textarea name="txt48" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt48']; ?></textarea>
                <textarea name="txt49" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt49']; ?></textarea>
                <textarea name="txt50" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt50']; ?></textarea>
                <textarea name="txt51" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt51']; ?></textarea>
                <textarea name="txt52" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt52']; ?></textarea>
                <textarea name="txt53" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt53']; ?></textarea>
                <textarea name="txt54" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt54']; ?></textarea>
                <div class="subgrid" id="pontuacao5">
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                </div>

                <textarea name="txt55" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt55']; ?></textarea>
                <textarea name="txt56" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt56']; ?></textarea>
                <textarea name="txt57" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt57']; ?></textarea>
                <textarea name="txt58" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt58']; ?></textarea>
                <textarea name="txt59" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt59']; ?></textarea>
                <textarea name="txt60" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt60']; ?></textarea>
                <textarea name="txt61" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt61']; ?></textarea>
                <textarea name="txt62" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt62']; ?></textarea>
                <textarea name="txt63" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt63']; ?></textarea>
                <textarea name="txt64" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt64']; ?></textarea>
                <textarea name="txt65" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt65']; ?></textarea>
                <div class="subgrid" id="pontuacao6">
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                </div>

                <textarea name="txt66" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt66']; ?></textarea>
                <textarea name="txt67" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt67']; ?></textarea>
                <textarea name="txt68" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt68']; ?></textarea>
                <textarea name="txt69" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt69']; ?></textarea>
                <textarea name="txt70" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt70']; ?></textarea>
                <textarea name="txt71" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt71']; ?></textarea>
                <textarea name="txt72" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt72']; ?></textarea>
                <textarea name="txt73" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt73']; ?></textarea>
                <textarea name="txt74" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt74']; ?></textarea>
                <textarea name="txt75" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt75']; ?></textarea>
                <textarea name="txt76" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt76']; ?></textarea>
                <div class="subgrid" id="pontuacao7">
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                    <div class="pontuacao" id=""></div>
                </div>
                <textarea name="txt77" id="" cols="30" rows="5"><?php if (!empty($row)) echo $row['txt77']; ?></textarea>

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

    document.addEventListener('DOMContentLoaded', function() {
        const containers = document.querySelectorAll('.subgrid');

        containers.forEach(function(container) {
            const elements = container.querySelectorAll('.pontuacao');


            elements.forEach(function(element) {
                element.addEventListener('click', function(event) {
                    const clickedElement = event.target;
                    let currentElement = container.firstElementChild;

                    while (currentElement !== null) {
                        currentElement.style.backgroundColor = '#314b7c';

                        if (currentElement === clickedElement) {
                            break;
                        }

                        currentElement = currentElement.nextElementSibling;
                    }
                });
            });

            elements.forEach(function(element) {
                element.addEventListener('click', function(event) {
                    const clickedElement = event.target;
                    let currentElement = clickedElement.nextElementSibling;

                    while (currentElement !== null) {
                        currentElement.style.backgroundColor = 'white';
                        currentElement = currentElement.nextElementSibling;
                    }
                });
            });
        });

        for (let i = 1; i <= 7; i++) {
            if ($('#resultado' + i) != "") {
                if ($('#resultado' + i).val() == 1) {
                    let firstChild = $('#pontuacao' + i).children(':eq(0)');
                    firstChild[0].style.backgroundColor = "#314b7c";
                }
                if ($('#resultado' + i).val() == 2) {
                    let bothChilds = $('#pontuacao' + i).children(':lt(2)');
                    bothChilds[0].style.backgroundColor = "#314b7c";
                    bothChilds[1].style.backgroundColor = "#314b7c";
                }
                if ($('#resultado' + i).val() == 3) {
                    let bothChilds = $('#pontuacao' + i).children(':lt(3)');
                    bothChilds[0].style.backgroundColor = "#314b7c";
                    bothChilds[1].style.backgroundColor = "#314b7c";
                    bothChilds[2].style.backgroundColor = "#314b7c";
                }
                if ($('#resultado' + i).val() == 4) {
                    let bothChilds = $('#pontuacao' + i).children(':lt(4)');
                    bothChilds[0].style.backgroundColor = "#314b7c";
                    bothChilds[1].style.backgroundColor = "#314b7c";
                    bothChilds[2].style.backgroundColor = "#314b7c";
                    bothChilds[3].style.backgroundColor = "#314b7c";
                }
                if ($('#resultado' + i).val() == 5) {
                    let bothChilds = $('#pontuacao' + i).children(':lt(5)');
                    bothChilds[0].style.backgroundColor = "#314b7c";
                    bothChilds[1].style.backgroundColor = "#314b7c";
                    bothChilds[2].style.backgroundColor = "#314b7c";
                    bothChilds[3].style.backgroundColor = "#314b7c";
                    bothChilds[4].style.backgroundColor = "#314b7c";
                }

                if ($('#resultado' + i).val() == 6) {
                    let bothChilds = $('#pontuacao' + i).children(':lt(6)');
                    bothChilds[0].style.backgroundColor = "#314b7c";
                    bothChilds[1].style.backgroundColor = "#314b7c";
                    bothChilds[2].style.backgroundColor = "#314b7c";
                    bothChilds[3].style.backgroundColor = "#314b7c";
                    bothChilds[4].style.backgroundColor = "#314b7c";
                    bothChilds[5].style.backgroundColor = "#314b7c";

                }
                if ($('#resultado' + i).val() == 7) {
                    let bothChilds = $('#pontuacao' + i).children(':lt(7)');
                    bothChilds[0].style.backgroundColor = "#314b7c";
                    bothChilds[1].style.backgroundColor = "#314b7c";
                    bothChilds[2].style.backgroundColor = "#314b7c";
                    bothChilds[3].style.backgroundColor = "#314b7c";
                    bothChilds[4].style.backgroundColor = "#314b7c";
                    bothChilds[5].style.backgroundColor = "#314b7c";
                    bothChilds[6].style.backgroundColor = "#314b7c";

                }
            }
        }

    });

    // $('.subgrid').on('click', function(event) {
    //     const parents = document.querySelectorAll('.subgrid');
    //     const desiredBackgroundColor = 'rgb(49, 75, 124)';
    //     let resultados = {};

    //     parents.forEach(function(parent, parentIndex) {
    //         const elements = parent.querySelectorAll('.pontuacao');

    //         let backgroundColorCount = 0;

    //         elements.forEach(function(element) {
    //             const backgroundColor = window.getComputedStyle(element).getPropertyValue('background-color');
    //             if (backgroundColor === desiredBackgroundColor) {
    //                 backgroundColorCount++;
    //             }
    //         });

    //         resultados[`resultado${parentIndex + 1}`] = backgroundColorCount;
    //         let resultado1 = resultados.resultado1;
    //         let resultado2 = resultados.resultado2;
    //         let resultado3 = resultados.resultado3;
    //         let resultado4 = resultados.resultado4;
    //         let resultado5 = resultados.resultado5;
    //         let resultado6 = resultados.resultado6;
    //         let resultado7 = resultados.resultado7;


    //         $('#resultado1').val(resultado1);
    //         $('#resultado2').val(resultado2);
    //         $('#resultado3').val(resultado3);
    //         $('#resultado4').val(resultado4);
    //         $('#resultado5').val(resultado5);
    //         $('#resultado6').val(resultado6);
    //         $('#resultado7').val(resultado7);
    //     });
    // });
</script>

</html>