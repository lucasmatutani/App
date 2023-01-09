<?php
include_once "../includes/connection.php";
include_once "../vendor/envio.php";

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
$importancia = $_REQUEST['importancia'];
$urgencia = $_REQUEST['urgencia'];
$circunstancia = $_REQUEST['circunstancia'];

$sql = "INSERT INTO teste_triade_tempo (importancia, urgencia, circunstancia, usuario_id) VALUES ($importancia, $urgencia, $circunstancia, $usuario_id)";

if (mysqli_query($conn, $sql)) {
    header("location: ../testes");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
if (!empty($email)) {
    $mail->addAddress($email);
    $mail->Body = "<div style=\"\">
                    <table cellspacing=2>
                        <tr>
                            <td>Importância</td>
                            <td>Urgência</td>
                            <td>Circunstância</td>
                        </tr>
                        <tr>
                            <td>" . $importancia . "%</td>
                            <td>" . $urgencia . "%</td>
                            <td>" . $circunstancia . "%</td>
                        </tr>
                    </table>
                </div>";
}
$mail->send();
