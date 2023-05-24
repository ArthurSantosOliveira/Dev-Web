<?php
    include ('conexao.php');
    
    session_start(); // Inicia a sessão
    
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
            header("Location: cliente.php");
        }else{
            echo '<script type="text/javascript">';
            echo 'alert("Email ou senha inválidos!!!");';
            echo 'window.location.href = "./html/login.html";';
            echo '</script>';
        }
    } else {
        // Verifica se existe os dados da sessão de login
        if(!isset($_SESSION["Email"]) || !isset($_SESSION["Senha"])){
            // Usuário não logado! Redireciona para a página de login
            header("Location: ./html/login.html");
            exit;
        } else {
            // Usuário logado! Redireciona para a página de cliente
            header("Location: cliente.php");
            exit;
        }
    }
?>
