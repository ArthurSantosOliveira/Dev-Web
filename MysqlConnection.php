<?php
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$pdo = new PDO("mysql:host=localhost;dbname=rato", "root", "");

$sql = "CREATE DATABASE IF NOT EXISTS rato";

if ($pdo->query($sql) === TRUE) {
  echo "Banco de dados rato criado com sucesso!<br>";
} else {
  echo "Erro ao criar banco de dados: " . $pdo->errorInfo()[2];
}


$sql = "CREATE TABLE IF NOT EXISTS clientes (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  rg VARCHAR(20) NOT NULL,
  cpf VARCHAR(14) NOT NULL,
  senha VARCHAR(50) NOT NULL
)";

if ($pdo->query($sql) === TRUE) {
  echo "Tabela clientes criada com sucesso!<br>";
} else {
  echo "Erro ao criar tabela: " . $pdo->errorInfo()[2];
}

$stmt = $pdo->prepare("INSERT INTO clientes (nome, email, rg, cpf, senha) VALUES (?, ?, ?, ?, ?)");
$stmt->bindValue(1, $nome);
$stmt->bindValue(2, $email);
$stmt->bindValue(3, $rg);
$stmt->bindValue(4, $cpf);
$stmt->bindValue(5, $senha);
$stmt->execute();

echo "Cadastro feito com sucesso!<br>";

if (isset($_POST['login'])) {
  $emailLogin = $_POST['email'];
  $senha = $_POST['senha'];

  $stmt = $pdo->prepare("SELECT * FROM clientes WHERE email = :email AND senha = :senha");
  $stmt->bindParam(':email', $emailLogin);
  $stmt->bindParam(':senha', $senha);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
    $linha = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION["Email"] = $linha['email'];
    $_SESSION["Senha"] = $linha['senha'];
    header("Location:cliente.php");
  } else {
    echo '<script type="text/javascript">';
    echo 'alert("Email ou senha inválidos!!!");';
    echo 'window.location.href="login.php"';
  }
}
?>

