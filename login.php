<?php
    //  if(isset($_POST['login'])){
    //     $emailLogin = $_POST['email'];
    //     $senha = $_POST['senha'];
        
    //     $select = query($pdo,"SELECT * FROM clientes WHERE email = '$emailLogin' AND senha = '$senha'");
    //     $linha = fetch_array($select);
    //     if(is_array($linha)){
    //         $_SESSION["Email"]=$linha['email'];
    //         $_SESSION["Senha"]=$linha['senha'];
    //     }else{
    //         echo'<script type = "text/javascript">';
    //         echo'alert("Email ou senha inválidos!!!);';
    //         echo'window.location.href="login.php"';
    //         echo'</script>';
    //     }
    //  }if(isset($_SESSION["Email"])){
    //     header("Location:cliente.php");
    //  }
    $pdo = new PDO("mysql:host=localhost;dbname=rato", "root", ""); 

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
    
    // Inicia sessões
session_start();

// Verifica se existe os dados da sessão de login
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"]))
{
// Usuário não logado! Redireciona para a página de login
header("Location: login.phpl");
exit;
}
?>