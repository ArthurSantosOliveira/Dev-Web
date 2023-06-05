<?php

session_start();
setcookie("ck_authorized", "true", 0, "/");

if(!isset($_SESSION["email"])):
    header("location: login.php");
    // echo '<script type="textjavascript">
 
    //     alert("Primeiro faça o login!");

    // </script>';
    echo  "<script>alert('Primeiro realize o login!');</script>";
else:
    $_SESSION["email"] =  $login ;
endif;

// Se o usuário estiver logado, exibe a página
include('conexao.php');

echo 'Bem vindo usuário '.$_SESSION['Nome'];

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


