<?php
//conexao feita com sucesso
$pdo = new PDO("mysql:host=localhost;dbname=rato", "root", ""); 
if (!$pdo) {
    die('Erro ao conectar ao banco: ' . mysql_error());
}
echo  'OK! <br>';



// Seleciona o banco de dados desejado
$pdo->exec("USE rato");

// Executa a query desejada
$query = "SELECT * FROM clientes"; 
$result_query = $pdo->query($query);

// Exibe os registros na tela
while ($row = $result_query->fetch(PDO::FETCH_ASSOC)) { 
    echo $row['nome'] , "<br>" ,$row['senha'] ."<br>"; 
}
?>
