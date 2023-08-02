<?php
include_once '../includes/connection.php';
$table = $_GET['table'];


// nome do aqruivo csv
$resultado_testes = $table . '.csv';

// cabecalho HTTP download config
header('Content-type: text/csv');
header('Content-Disposition: attachment; filename=' . $resultado_testes);

// aqui eh pra abrir o arquivo de saida
$output = fopen('php://output', 'w');

$query = "SELECT $table.*, usuarios.empresa FROM $table JOIN usuarios ON $table.usuario_id = usuarios.id";
$result = $conn->query($query);

// aqui escreve os resultados no arquivo csv
$row = $result->fetch_assoc();
if ($row) {
    fputcsv($output, array_keys($row));

    fputcsv($output, $row);

    while ($row = $result->fetch_assoc()) {
        fputcsv($output, $row);
    }
}

// fechar arqvuio output
fclose($output);
