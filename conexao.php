<?php
// Conexão com o banco de dados
$pdo = new PDO("mysql:host=localhost", "root", "");

// Verificar se o banco de dados "rato" existe
$sql = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'rato'";
$resultado = $pdo->query($sql)->fetch();

if (empty($resultado)) {
    // Criar o banco de dados "rato" se não existir
    $sql = "CREATE DATABASE rato";
    $pdo->exec($sql);
}

// Selecionar o banco de dados "rato"
$pdo->exec("USE rato");

// Verificar se a tabela "clientes" existe
$resultado = $pdo->query("SHOW TABLES LIKE 'clientes'")->fetch();

if (!$resultado) {
    // Criar a tabela "clientes" se não existir
    $sql = "CREATE TABLE clientes (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(50) NOT NULL,
        email VARCHAR(50) UNIQUE NOT NULL,
        cpf VARCHAR(20) NOT NULL UNIQUE,
        senha VARCHAR(255) NOT NULL
    )";
    $pdo->exec($sql);
}

// Resto do código...
?>
