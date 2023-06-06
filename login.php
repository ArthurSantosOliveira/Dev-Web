<?php
    include ('conexao.php');
    
    session_start(); // Inicia a sessão
    
    if(isset($_POST['login'])){
        $emailLogin =($_POST['email']);
        $senha = ($_POST['senha']);
    
        $stmt = $pdo->prepare("SELECT * FROM clientes WHERE email = :email AND senha = :senha");
        $stmt->bindParam(':email', $emailLogin);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
    
        if($stmt->rowCount() > 0){
            $linha = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION["Email"] = $linha['email'];
            $_SESSION["Senha"] = $linha['senha'];
            header("Location: cliente.php");
            $_SESSION["logado"] = 'on';
        }elseif(isset($GET['erro'])){
            $erro ='É necessário logar para acessar a página';
        }
    } 

?>
