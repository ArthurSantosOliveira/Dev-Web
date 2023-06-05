<?php

// Inicia sessões
session_start();

// Verifica se existe os dados da sessão de login
if(!isset($_SESSION["Email"]) || !isset($_SESSION["Senha"]))
{
// Usuário não logado! Redireciona para a página de login
header("Location: ./html/login.html");
exit;
}
include('conexao.php');

echo 'Bem vindo ',$_SESSION['Email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Clique aqui para sair da sua conta </h1><a href="logout.php">Logout</a>
</body>
</html>
