<?php
include('conexao.php');
session_start();
setcookie("ck_authorized", "true", 0);

if($_SESSION['Logado'] = 'On'){
  echo '<li>
  <a class="icon" href="./html/cart.html">
  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    </li>';
  echo '<li><a href="logout.php">Sair</a></li>';

}else{
  echo '<li><a href="./html/login.html">Login</a></li>';
}

echo "futuramente aqui estarão os seus dados"
?>