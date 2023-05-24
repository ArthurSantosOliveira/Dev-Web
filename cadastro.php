<?php
    include ('conexao.php');
    session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
//password_hash("senha123", PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO clientes (nome, email, cpf, senha) VALUES (?, ?, ?, ?)");
$stmt->bindValue(1, $nome);
$stmt->bindValue(2, $email);
$stmt->bindValue(3, $cpf);
$stmt->bindValue(4, $senha);
$stmt->execute();

echo "Cadastro feito com sucesso!<br>";
?>