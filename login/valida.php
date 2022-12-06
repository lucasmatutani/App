<?php
session_start();
//Incluindo a conexão com banco de dados   
include_once "../includes/connection.php";

//O campo usuário e senha preenchido entra no if para validar
if ((isset($_REQUEST['email'])) && (isset($_REQUEST['senha']))) {
    $usuario = mysqli_real_escape_string($conn, $_REQUEST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
    $senha = mysqli_real_escape_string($conn, $_REQUEST['senha']);
    $senha = $senha;

    //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
    $result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
    if (isset($resultado)) {
        $_SESSION['usuarioNome'] = $resultado['nome'];
        // $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
        $_SESSION['usuarioEmail'] = $resultado['email'];
        $_SESSION['comportamental'] = $resultado['comportamental'];
        $_SESSION['representacional'] = $resultado['representacional'];
        $_SESSION['aida'] = $resultado['aida'];
        $_SESSION['conquiste_clientes'] = $resultado['conquiste_clientes'];
        $_SESSION['spin'] = $resultado['spin'];
        $_SESSION['metodo_cesar'] = $resultado['metodo_cesar'];
        $_SESSION['petscan'] = $resultado['petscan'];
        $_SESSION['triade'] = $resultado['triade'];

        if ($resultado['email'] == "admin") {
            header("Location: ../admin");
            exit;
        }
        header("Location: ../testes");
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
    } else {
        //Váriavel global recebendo a mensagem de erro
        $_SESSION['loginErro'] = "Usuário ou senha Inválido";
        header("Location: index.php");
    }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
} else {
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: index.php");
}
