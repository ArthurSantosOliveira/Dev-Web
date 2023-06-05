<?php
include('conexao.php');
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

// Gerar o hash da senha
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO clientes (nome, email, cpf, senha) VALUES (?, ?, ?, ?)");
$stmt->bindValue(1, $nome);
$stmt->bindValue(2, $email);
$stmt->bindValue(3, $cpf);
$stmt->bindValue(4, $senha); // Armazena o hash da senha no banco de dados
$stmt->execute();

$_SESSION['Nome'] = $nome;
$_SESSION['Logado'] = 'On';

//header("Location: cliente.php");
header("Location: index.php");


?>