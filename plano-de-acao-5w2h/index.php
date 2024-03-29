<?php
include_once "../includes/connection.php";
session_start();
if (!isset($_SESSION['usuarioEmail'])) {
    header('Location: ../login');
}
$usuario_id = $_SESSION['usuarioId'];
$email = $_SESSION['usuarioEmail'];
$data = $conn->query("SELECT * FROM plano_de_acao_5w2h WHERE usuario_id = $usuario_id");
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

    <form action="./sql.php" method="POST" id="formData">
        <input type="hidden" name="usuario_id" value="<?php echo $usuario_id ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">
        <input type="hidden" id="resultado1" name="resultado1" value="<?php if (!empty($linha['resultado1'])) echo $linha['resultado1'] ?>">
        <input type="hidden" id="resultado2" name="resultado2" value="<?php if (!empty($linha['resultado2'])) echo $linha['resultado2'] ?>">
        <input type="hidden" id="resultado3" name="resultado3" value="<?php if (!empty($linha['resultado3'])) echo $linha['resultado3'] ?>">
        <input type="hidden" id="resultado4" name="resultado4" value="<?php if (!empty($linha['resultado4'])) echo $linha['resultado4'] ?>">
        <input type="hidden" id="resultado5" name="resultado5" value="<?php if (!empty($linha['resultado5'])) echo $linha['resultado5'] ?>">
        <input type="hidden" id="resultado6" name="resultado6" value="<?php if (!empty($linha['resultado6'])) echo $linha['resultado6'] ?>">
        <input type="hidden" id="resultado7" name="resultado7" value="<?php if (!empty($linha['resultado7'])) echo $linha['resultado7'] ?>">
        
        <div class="objetivo mt-5">
            <h3>Objetivo:</h3>
            <textarea name="objetivo" class="col-8" rows="4"><?php if (!empty($linha)) echo $linha['objetivo']; ?></textarea>
        </div>
        <div class="container-titulo mt-3">
            <div class="container-1">
                <p>Consultor:</p>
                <input type="text" name="consultor" value="<?php if (!empty($linha)) echo $linha['consultor']; ?>">
                <p>Setor:</p>
                <input type="text" name="setor" value="<?php if (!empty($linha)) echo $linha['setor']; ?>">
            </div>
            <div class="container-2">
                <p>Data de Elaboração:</p>
                <input type="text" name="elaboracao" value="<?php if (!empty($linha)) echo $linha['elaboracao']; ?>">
                <p>Última Atualização:</p>
                <input type="text" name="atualizacao" value="<?php if (!empty($linha)) echo $linha['atualizacao']; ?>">
            </div>
        </div>


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
            <textarea name="txt1" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt1']; ?></textarea>
            <textarea name="txt2" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt2']; ?></textarea>
            <textarea name="txt3" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt3']; ?></textarea>
            <textarea name="txt4" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt4']; ?></textarea>
            <textarea name="txt5" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt5']; ?></textarea>
            <textarea name="txt6" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt6']; ?></textarea>
            <textarea name="txt7" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt7']; ?></textarea>
            <textarea name="txt8" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt8']; ?></textarea>
            <textarea name="txt9" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt9']; ?></textarea>
            <textarea name="txt10" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt10']; ?></textarea>
            <div class="subgrid" id="pontuacao1">
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
            </div>
            <textarea name="txt11" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt11']; ?></textarea>
            <textarea name="txt12" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt12']; ?></textarea>
            <textarea name="txt13" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt13']; ?></textarea>
            <textarea name="txt14" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt14']; ?></textarea>
            <textarea name="txt15" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt15']; ?></textarea>
            <textarea name="txt16" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt16']; ?></textarea>
            <textarea name="txt17" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt17']; ?></textarea>
            <textarea name="txt18" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt18']; ?></textarea>
            <textarea name="txt19" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt19']; ?></textarea>
            <textarea name="txt20" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt20']; ?></textarea>
            <textarea name="txt21" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt21']; ?></textarea>
            <div class="subgrid" id="pontuacao2">
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
            </div>
            <textarea name="txt22" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt22']; ?></textarea>
            <textarea name="txt23" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt23']; ?></textarea>
            <textarea name="txt24" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt24']; ?></textarea>
            <textarea name="txt25" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt25']; ?></textarea>
            <textarea name="txt26" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt26']; ?></textarea>
            <textarea name="txt27" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt27']; ?></textarea>
            <textarea name="txt28" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt28']; ?></textarea>
            <textarea name="txt29" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt29']; ?></textarea>
            <textarea name="txt30" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt30']; ?></textarea>
            <textarea name="txt31" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt31']; ?></textarea>
            <textarea name="txt32" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt32']; ?></textarea>
            <div class="subgrid" id="pontuacao3">
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
            </div>
            <textarea name="txt33" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt33']; ?></textarea>
            <textarea name="txt34" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt34']; ?></textarea>
            <textarea name="txt35" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt35']; ?></textarea>
            <textarea name="txt36" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt36']; ?></textarea>
            <textarea name="txt37" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt37']; ?></textarea>
            <textarea name="txt38" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt38']; ?></textarea>
            <textarea name="txt39" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt39']; ?></textarea>
            <textarea name="txt40" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt40']; ?></textarea>
            <textarea name="txt41" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt41']; ?></textarea>
            <textarea name="txt42" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt42']; ?></textarea>
            <textarea name="txt43" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt43']; ?></textarea>
            <div class="subgrid" id="pontuacao4">
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
            </div>

            <textarea name="txt44" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt44']; ?></textarea>
            <textarea name="txt45" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt45']; ?></textarea>
            <textarea name="txt46" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt46']; ?></textarea>
            <textarea name="txt47" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt47']; ?></textarea>
            <textarea name="txt48" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt48']; ?></textarea>
            <textarea name="txt49" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt49']; ?></textarea>
            <textarea name="txt50" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt50']; ?></textarea>
            <textarea name="txt51" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt51']; ?></textarea>
            <textarea name="txt52" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt52']; ?></textarea>
            <textarea name="txt53" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt53']; ?></textarea>
            <textarea name="txt54" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt54']; ?></textarea>
            <div class="subgrid" id="pontuacao5">
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
            </div>

            <textarea name="txt55" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt55']; ?></textarea>
            <textarea name="txt56" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt56']; ?></textarea>
            <textarea name="txt57" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt57']; ?></textarea>
            <textarea name="txt58" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt58']; ?></textarea>
            <textarea name="txt59" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt59']; ?></textarea>
            <textarea name="txt60" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt60']; ?></textarea>
            <textarea name="txt61" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt61']; ?></textarea>
            <textarea name="txt62" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt62']; ?></textarea>
            <textarea name="txt63" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt63']; ?></textarea>
            <textarea name="txt64" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt64']; ?></textarea>
            <textarea name="txt65" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt65']; ?></textarea>
            <div class="subgrid" id="pontuacao6">
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
            </div>

            <textarea name="txt66" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt66']; ?></textarea>
            <textarea name="txt67" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt67']; ?></textarea>
            <textarea name="txt68" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt68']; ?></textarea>
            <textarea name="txt69" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt69']; ?></textarea>
            <textarea name="txt70" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt70']; ?></textarea>
            <textarea name="txt71" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt71']; ?></textarea>
            <textarea name="txt72" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt72']; ?></textarea>
            <textarea name="txt73" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt73']; ?></textarea>
            <textarea name="txt74" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt74']; ?></textarea>
            <textarea name="txt75" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt75']; ?></textarea>
            <textarea name="txt76" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt76']; ?></textarea>
            <div class="subgrid" id="pontuacao7">
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
            </div>
            <textarea name="txt77" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt77']; ?></textarea>

        </div>
        <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS" style="height: 30px; position: relative; left: 50%;">
    </form>

</body>

<script>
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

    $('.subgrid').on('click', function(event) {
        const parents = document.querySelectorAll('.subgrid');
        const desiredBackgroundColor = 'rgb(49, 75, 124)';
        let resultados = {};

        parents.forEach(function(parent, parentIndex) {
            const elements = parent.querySelectorAll('.pontuacao');

            let backgroundColorCount = 0;

            elements.forEach(function(element) {
                const backgroundColor = window.getComputedStyle(element).getPropertyValue('background-color');
                if (backgroundColor === desiredBackgroundColor) {
                    backgroundColorCount++;
                }
            });

            resultados[`resultado${parentIndex + 1}`] = backgroundColorCount;
            let resultado1 = resultados.resultado1;
            let resultado2 = resultados.resultado2;
            let resultado3 = resultados.resultado3;
            let resultado4 = resultados.resultado4;
            let resultado5 = resultados.resultado5;
            let resultado6 = resultados.resultado6;
            let resultado7 = resultados.resultado7;


            $('#resultado1').val(resultado1);
            $('#resultado2').val(resultado2);
            $('#resultado3').val(resultado3);
            $('#resultado4').val(resultado4);
            $('#resultado5').val(resultado5);
            $('#resultado6').val(resultado6);
            $('#resultado7').val(resultado7);
        });
    });
</script>

</html>