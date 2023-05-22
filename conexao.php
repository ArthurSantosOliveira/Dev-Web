<?php
//conexao com o banco
$pdo = new PDO("mysql:host=localhost;dbname=rato", "root", "");

$sql = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'rato'";
$resultado = $pdo->query($sql)->fetch();


//criacao do banco e tabelas
if(empty($resultado)){
    $sql = "CREATE DATABASE rato";
    $pdo->exec($sql);$resultado = $pdo->query("SHOW TABLES LIKE 'clientes'")->fetch();
    if (!$resultado) {
        $sql = "CREATE TABLE clientes (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(50) NOT NULL,
            email VARCHAR(50) NOT NULL,
            rg VARCHAR(20) NOT NULL,
            cpf VARCHAR(20) NOT NULL,
            senha VARCHAR(50) NOT NULL
        )";
        $pdo->exec($sql);
        // echo "Tabela criada com sucesso!";
    } else {
        // echo "A tabela já existe.";
    }
    // echo "Banco de dados criado com sucesso!";
} else {
    // echo "O banco de dados já existe.";
}


//adicionando dados na tabela
$nome = $_POST['nome'];
$email = $_POST['email'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$stmt = $pdo->prepare("INSERT INTO clientes (nome, email, rg, cpf, senha) VALUES (?, ?, ?, ?, ?)");
$stmt->bindValue(1, $nome);
$stmt->bindValue(2, $email);
$stmt->bindValue(3, $rg);
$stmt->bindValue(4, $cpf);
$stmt->bindValue(5, $senha);
$stmt->execute();

echo "Cadastro feito com sucesso!<br>";

?>

