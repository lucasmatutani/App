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
        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuarioId'] ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">

        <div class="objetivo">
            <h3>Objetivo:</h3>
            <input type="text" name="objetivo" value="<?php if (!empty($linha)) echo $linha['objetivo']; ?>">
        </div>
        <div class="container-titulo">
            <div class="container-1">
                <p>Consultor:</p> <input type="text" name="consultor" value="<?php if (!empty($linha)) echo $linha['consultor']; ?>">
                <p>Setor:</p> <input type="text" name="setor" value="<?php if (!empty($linha)) echo $linha['setor']; ?>">
                <h3>Objetivo:</h3>
                <input type="text" name="objetivo" value="<?php if (!empty($linha)) echo $linha['objetivo']; ?>">
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
            <textarea name="txt16" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt16']; ?></textarea>
            <textarea name="txt17" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt17']; ?></textarea>
            <textarea name="txt18" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt18']; ?></textarea>
            <textarea name="txt19" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt19']; ?></textarea>
            <textarea name="txt20" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt20']; ?></textarea>
            <textarea name="txt21" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt21']; ?></textarea>
            <textarea name="txt22" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt22']; ?></textarea>
            <textarea name="txt23" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt23']; ?></textarea>
            <textarea name="txt24" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt24']; ?></textarea>
            <textarea name="txt25" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt25']; ?></textarea>
            <textarea name="txt26" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt26']; ?></textarea>
            <div class="subgrid" id="pontuacao2">
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
            </div>
            <textarea name="txt32" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt32']; ?></textarea>
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
            <div class="subgrid" id="pontuacao3">
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
            </div>
            <textarea name="txt48" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt48']; ?></textarea>
            <textarea name="txt49" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt49']; ?></textarea>
            <textarea name="txt50" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt50']; ?></textarea>
            <textarea name="txt51" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt51']; ?></textarea>
            <textarea name="txt52" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt52']; ?></textarea>
            <textarea name="txt53" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt53']; ?></textarea>
            <textarea name="txt54" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt54']; ?></textarea>
            <textarea name="txt55" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt55']; ?></textarea>
            <textarea name="txt56" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt56']; ?></textarea>
            <textarea name="txt57" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt57']; ?></textarea>
            <textarea name="txt58" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt58']; ?></textarea>
            <div class="subgrid" id="pontuacao4">
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
                <div class="pontuacao" id=""></div>
            </div>
            <textarea name="txt64" id="" cols="30" rows="5"><?php if (!empty($linha)) echo $linha['txt64']; ?></textarea>

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

        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const containers = document.querySelectorAll('.subgrid');

        containers.forEach(function(container) {
            const elements = container.querySelectorAll('.pontuacao');

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
    });

    $('#formData').on('submit', function(event) {
        event.preventDefault();
        const parents = document.querySelectorAll('.subgrid');
        const desiredBackgroundColor = 'rgb(49, 75, 124)'; // #314b7c em formato RGB
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

            var formData = $(this).serializeArray(); // Serializa os dados do formulário
            formData.push({
                name: 'resultado1',
                value: resultado1,
                name: 'resultado2',
                value: resultado2
            }); // Adiciona a variável JavaScript aos dados do formulário
            $.ajax({
                url: './sql.php',
                method: 'POST',
                data: {
                    result1: resultado1,
                    result2: resultado2
                },
                success: function(response) {
                    console.log(response);
                },
                error: function() {
                    console.log('Erro na requisição');
                }
            });
        });
        // console.log(resultados.resultado1);
        // form.submit();
    });
</script>

</html>