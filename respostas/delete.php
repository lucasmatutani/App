<?php
include_once "../includes/connection.php";
$nome_banco = $_REQUEST['nome_banco'];
if(isset($nome_banco)) {
    // Verifica a conexão
    if($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Consulta SQL para apagar todos os dados da tabela
    $sql = "DELETE FROM $nome_banco";

    if($conn->query($sql) === TRUE) {
        header("location: ../admin/respostas.php");
    } else {
        echo "Erro ao apagar dados: " . $conn->error;
    }

    $conn->close();
}
?>
