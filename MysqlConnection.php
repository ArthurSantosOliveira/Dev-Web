<?php
// echo  'OK! <br>';
// Seleciona o banco de dados desejado
// $pdo->exec("USE rato");

// Executa a query desejada
// $query = "SELECT * FROM clientes"; 
// $result_query = $pdo->query($query);

// Exibe os registros na tela
// while ($row = $result_query->fetch(PDO::FETCH_ASSOC)) { 
//     echo $row['nome'] , "<br>" ,$row['senha'] ."<br>"; 
// }

$nome =$_POST['nome'];
$email =$_POST['email'];
$rg =$_POST['rg'];
$cpf =$_POST['cpf'];
// $data_nascimento =$_POST['data_nascimento'];
$senha =$_POST['senha'];


//conexao feita com sucesso
// $pdo = new PDO("mysql:host=localhost;dbname=rato", "root", ""); 
// if (!$pdo) {
//     die('Erro ao conectar ao banco: ' . mysql_error());
// }else{
//     $stmt = $pdo->prepare("INSERT INTO clientes (nome, email, rg, cpf, dataNascimento,senha) values(?,?,?,?,?,?)");
//     $stmt->bindValue($nome,$email,$rg,$cpf,$dataNascimento,$senha);
//     $stmt->execute();
//     echo "Cadastro feito com sucesso";
//     $stmt-> close();
//     $conn -> close();
// }
$pdo = new PDO("mysql:host=localhost;dbname=rato", "root", ""); 
if (!$pdo) {
    die('Erro ao conectar ao banco: ' . mysql_error());
} else {
    $stmt = $pdo->prepare("INSERT INTO clientes (nome, email, rg, cpf, senha) values(?,?,?,?,?)");
    $stmt->bindValue(1, $nome);
    $stmt->bindValue(2, $email);
    $stmt->bindValue(3, $rg);
    $stmt->bindValue(4, $cpf);
    $stmt->bindValue(5, $senha);
    $stmt->execute();
    echo "Cadastro feito com sucesso";

}
if(isset($_POST['login'])){
    $emailLogin = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $pdo->prepare("SELECT * FROM clientes WHERE email = :email AND senha = :senha");
    $stmt->bindParam(':email', $emailLogin);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        $linha = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION["Email"] = $linha['email'];
        $_SESSION["Senha"] = $linha['senha'];
        header("Location:cliente.php");
    }else{
        echo'<script type = "text/javascript">';
        echo'alert("Email ou senha inválidos!!!);';
        echo'window.location.href="login.php"';
        echo'</script>';
    }
}

?>
