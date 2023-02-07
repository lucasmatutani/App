<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Ficha Avaliação</title>
</head>

<body>
    <a class="btn-voltar" href="http://focustradeapp.com.br/testes/"><i style="margin-right: 5px;" class="fa-solid fa-caret-left"></i>Voltar</a>
    <form action="">
        <input type="hidden" name="grupo" value="5">
        <div class="container-header">
            <img src="../assets/img/logo-focustrade.jpeg" alt="">
        </div>

        <div class="container-subtitulo">

            <h1 class="grupo">Grupo 5</h1>
            <label class="rodada" for="">
                <h3>Rodada</h3>
            </label>
            <input type="number" name="rodada" id="">
            <label class="rep" for="">
                <h3>Representante</h3>
            </label>
            <input type="number" name="representante" id="">
        </div>
        <div class="container-principal">

            <table cellspacing="50px">
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <h3>Implementou</h3>
                    </td>
                    <td>
                        <h3>Implementou Parcialente</h3>
                    </td>
                    <td>
                        <h3>Não Implementou</h3>
                    </td>
                </tr>

                <tr>
                    <th>Pré visita</th>
                    <td>
                        <p>Contrução e planejamento</p>
                    </td>
                    <td>
                        <input type="radio" name="cp1" id="">
                    </td>
                    <td>
                        <input type="radio" name="cp2" id="">
                    </td>
                    <td>
                        <input type="radio" name="cp3" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <p>Apresentação do planejamento</p>
                    </td>
                    <td>
                        <input type="radio" name="ap1" id="">
                    </td>
                    <td>
                        <input type="radio" name="ap2" id="">
                    </td>
                    <td>
                        <input type="radio" name="ap3" id="">
                    </td>
                </tr>
                </tr>

                <tr>
                    <th>
                        Visita
                    </th>
                    <td>
                        <p>Rapport</p>
                    </td>
                    <td>
                        <input type="radio" name="rap1" id="">
                    </td>
                    <td>
                        <input type="radio" name="rap2" id="">
                    </td>
                    <td>
                        <input type="radio" name="rap3" id="">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <p>Abertura</p>
                    </td>
                    <td>
                        <input type="radio" name="abe1" id="">
                    </td>
                    <td>
                        <input type="radio" name="abe2" id="">
                    </td>
                    <td>
                        <input type="radio" name="abe3" id="">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <p>Apresentação e Desenvolvimento</p>
                    </td>
                    <td>
                        <input type="radio" name="ad1" id="">
                    </td>
                    <td>
                        <input type="radio" name="ad2" id="">
                    </td>
                    <td>
                        <input type="radio" name="ad3" id="">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <p>Negociação</p>
                    </td>
                    <td>
                        <input type="radio" name="neg1" id="">
                    </td>
                    <td>
                        <input type="radio" name="neg2" id="">
                    </td>
                    <td>
                        <input type="radio" name="neg3" id="">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <p>Fechamento e Compromisso</p>
                    </td>
                    <td>
                        <input type="radio" name="fc1" id="">
                    </td>
                    <td>
                        <input type="radio" name="fc2" id="">
                    </td>
                    <td>
                        <input type="radio" name="fc3" id="">
                    </td>
                </tr>

                <tr>
                    <th>
                        Pós Visita
                    </th>
                    <td>
                        <p>Registro da Visita</p>
                    </td>
                    <td>
                        <input type="radio" name="rv1" id="">
                    </td>
                    <td>
                        <input type="radio" name="rv2" id="">
                    </td>
                    <td>
                        <input type="radio" name="rv3" id="">
                    </td>
                <tr>
                    <td></td>
                    <td>
                        <p>OPV</p>
                    </td>
                    <td>
                        <input type="radio" name="opv1" id="">
                    </td>
                    <td>
                        <input type="radio" name="opv2" id="">
                    </td>
                    <td>
                        <input type="radio" name="opv3" id="">
                    </td>
                </tr>
                </tr>

                <tr>
                    <th>Outros</th>
                    <td>Cumpriu o Tempo</td>
                    <td>
                        <input type="radio" name="ct1" id="">
                    </td>
                    <td>
                        <input type="radio" name="ct2" id="">
                    </td>
                    <td>
                        <input type="radio" name="ct3" id="">
                    </td>
                </tr>
                </tr>
            </table>
        </div>

        <div class="buttom-enviar">
            <input id="botao-enviar" type="submit" value="ENVIAR RESULTADOS" style="height: 30px; margin-left: 15px;">
        </div>
    </form>
</body>

</html>