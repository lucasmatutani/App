<?php
include_once "../includes/connection.php";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$empresa = $_REQUEST['empresa'];
$senha = $_REQUEST['senha'];
$grupo = $_REQUEST['grupo'];
$teste_hospital = $_REQUEST['teste_hospital'];
$role_play = $_REQUEST['role_play'];
$representacional = $_REQUEST['representacional'];
$comportamental = $_REQUEST['comportamental'];
$conquiste_clientes = $_REQUEST['conquiste_clientes'];
$aida = $_REQUEST['aida'];
$spin = $_REQUEST['spin'];
$metodo_cesar = $_REQUEST['metodo-cesar'];
$petscan = $_REQUEST['petscan'];
$triade = $_REQUEST['triade'];
$plano_de_acao_5w2h = $_REQUEST['plano_de_acao_5w2h'];
$diario_de_bordo = $_REQUEST['diario_de_bordo'];
$fatores_criticos = $_REQUEST['fatores_criticos'];
$analise_swot = $_REQUEST['analise_swot'];
$matriz_predominio = $_REQUEST['matriz_predominio'];
$testes_jpb = $_REQUEST['testes_jpb'];
$matriz_risco = $_REQUEST['matriz_risco'];
$marketing = $_REQUEST['marketing'];
$puv = $_REQUEST['puv'];
$cavaben = $_REQUEST['cavaben'];
$crencas = $_REQUEST['crencas'];
$flowchart = $_REQUEST['flowchart'];
$meta_smart = $_REQUEST['meta_smart'];

$sql = "INSERT INTO usuarios (nome, email, empresa, senha, grupo, representacional, comportamental, conquiste_clientes, aida, spin, metodo_cesar, petscan, triade, plano_de_acao, diario_de_bordo, fatores_criticos, analise_swot, matriz_predominio, testes_jpb, matriz_risco, teste_hospital, marketing, puv, cavaben, crencas, flowchart, role_play , meta_smart) VALUES ('$nome', '$email', '$empresa', '$senha',  '$grupo', '$representacional', '$comportamental', '$conquiste_clientes', '$aida', '$spin', '$metodo_cesar', '$petscan', '$triade', '$plano_de_acao_5w2h', '$diario_de_bordo', '$fatores_criticos', '$analise_swot', '$matriz_predominio', '$testes_jpb', '$matriz_risco', '$teste_hospital', '$marketing', '$puv', '$cavaben', '$crencas', '$flowchart', '$role_play', '$meta_smart')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
