<?php
require_once "../includes/connection.php";
include_once "../vendor/envio.php";

$usuario_id = $_REQUEST['usuario_id'];
$email = $_REQUEST['email'];
$aguia = $_REQUEST['aguia'];
$gato = $_REQUEST['gato'];
$tubarao = $_REQUEST['tubarao'];
$lobo = $_REQUEST['lobo'];

$sql = "INSERT INTO teste_comportamental1 (aguia, gato, tubarao, lobo, usuario_id) VALUES ($aguia, $gato, $tubarao, $lobo, $usuario_id)";
if (mysqli_query($conn, $sql)) {
    header("location: ../testes");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (!empty($email)) {
    $mail->addAddress($email);
    $mail->Body = "<div style=\"\">
                    <table cellspacing=2>
                        <tr>
                            <td>Águia</td>
                            <td>Gato</td>
                            <td>Tubarão</td>
                            <td>Lobo</td>
                        </tr>
                        <tr>
                            <td>" . $aguia . "</td>
                            <td>" . $gato . "</td>
                            <td>" . $tubarao . "</td>
                            <td>" . $lobo . "</td>
                        </tr>
                    </table>
                </div>";
}
$mail->send();
mysqli_close($conn);
