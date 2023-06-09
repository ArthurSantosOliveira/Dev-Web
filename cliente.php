<?php
include('conexao.php');
session_start();
setcookie("ck_authorized", "true", 0);

echo 'Bem vindo ',$_SESSION['Email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/styleIndex.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/github?f=brands&s=solid&sz=xl">
    <link href="https://fonts.cdnfonts.com/css/intro" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/ultramoire" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/albertus-mt-std" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sofachrome" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/eboracum" rel="stylesheet">



    <link rel="shortcut icon" href="./imagens/bikeico.ico" type="image/x-icon">
    <title>RatoBikeStore</title>
</head>
<body>
    <nav>
      <input type="checkbox" name="" id="check">
      <label for="check" class="checkbtn">
        <i class="fa fa-bars"></i>
      </label>

      <ul>
        <li><a class="active" href="./html/index.html">Home</a></li>
        <li><a href="./html/produtos.html">Bicicletas</a></li>
        <li><a href="./html/acessorios.html">Acessórios</a></li>

        <?php 
            if($_SESSION['Logado'] = 'On'){
              echo '            <li>
              <a class="icon" href="./html/cart.html">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </li>';
              echo '<li><a href="perfil.php">Perfil</a></li>';
              echo '<li><a href="logout.php">Sair</a></li>';

            }else{
              echo '<li><a href="./html/login.html">Login</a></li>';
            }
        ?>


      </ul>
      <img class="imagem" src="./imagens/logo-fundo-transparente_resized.png" alt="">
    </nav>



  <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="./imagens/1.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="./imagens/2.jpg" style="width:100%">

    </div>

    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="./imagens/335.jpg" style="width:100%">
    </div>


    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <div class="ponto" style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

<div class="container">
  <div class="card">
    <div class="move">
      <div class="card2">
        <h3>Quem somos</h3>
        <p>Uma loja especializada em bicicletas de alta qualidade para uso recreativo e competitivo, oferecendo uma ampla variedade de modelos, acessórios e equipamentos para atender às necessidades de ciclistas de todos os níveis de habilidade e preferências de estilo.</p>
      </div>
    </div>
    <div class="move">
      <div class="card2">
        <h3>Nossa filosofia</h3>
        <p>Uma loja de bicicletas moderna e inovadora, acreditamos que as bikes são muito mais do que meros meios de transporte ou ferramentas de exercício físico. Procuramos oferecer aos nossos clientes a oportunidade de vivenciar essa paixão e se conectar com a comunidade ciclística.</p>
      </div>
    </div>
    <div class="move">
      <div class="card2">
        <h3>Nossos produtos</h3>
        <p>Qualidade com custo-benefício é na RatoBikeStore, oferecendo diversos produtos, do esporte ao lazer, para satisfazer você. Trabalhamos com marcas renomadas no mercado e oferecemos uma ampla variedade de produtos para atender às suas necessidades. </p>
      </div>
    </div>
  </div>
</div> 
  <footer>
    <div class="rodape-info-contatos">
      <div class="info-item">
        <h3 class="heading">Endereço</h3>
        <p>Rua Ratatouille, Nº 0004
          Salvador, Bahia </p>
      </div>
      <div class="info-item">
        <h3 class="heading">Contato</h3>
        <p> +55 (71)4402-8922</p>
      </div>
      <div class="info-item">
        <h3 class="heading">E-mail</h3>
        <p>ratobikestore@gmail.com</p>
      </div>
      <div class="copy">
        <p>Copyright ©2023 <br>All rights reserved 
          | Equipe 07</p>
      </div>
     <!-- <div class="logo-item">
        <a class="logo-item">
          <img src="./imagens/logo-fundo-transparente.png" alt="">
        </a>
      </div>  -->

      <div class="social-item">
        <a class="icon" href="https://web.whatsapp.com/">
          <i class="fa fa-whatsapp" aria-hidden="true"></i>
        </a>
        <a class="icon" href="https://www.instagram.com/">
          <i class="fa fa-instagram" aria-hidden="true"></i>        
        </a>
        <a class="icon" href="">
          <i class=" fa fa-linkedin aria-hidden"></i>
        </a>
      </div>
    </div>
    </div>
  </footer>
</body>
  <script src="./app/carrosesl.js"></script>
  <script src="./app/menuHamburguer.js"></script>

</html>

