
<?php 
  $hostname = "localhost";
  $bancodedados = "id22064214_root";
  $usuario = "id22064214_root";
  $senha = "Dw-4-PJ-27!";
  
  $conn = new mysqli($hostname , $usuario,  $senha, $bancodedados);

  $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if ($mysqli->connect_errno) {
        echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
    }
    else
    echo "";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedBull</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"></link>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="css/assents/img/redbull.ico" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>    

    <title>RedBull</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark ">
        <div class="container-fluid">
          <img class="nav-logo"src="./css/assents/img/logo.png" alt="Logotipo da Red Bull" height="80">
          <button class="navbar-toggler" type="button"  aria-controls="navbarNav" aria-expanded="false" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
            <span class="navbar-toggler-icon"></span>
            </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
              <ul>
                <li><a class="nav-link-lat" href="./index.html" >Home</a></li>
                <li><a class="nav-link-lat" href="./sobre.html" >Sobre</a></li>
                <li><a class="nav-link-lat" href="./produtos.php">Produtos </a></li>
                <li><a class="nav-link-lat" href="./novidades.php"> Novidades</a></li>
                <li><a class="nav-link-lat" href="./contato.html"> Contato</a></li>
              </ul>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="./index.html"> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./sobre.html"> Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./produtos.php">Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./novidades.php">Novidades</a>
              </li>
                <li class="nav-item">
                  <a class="nav-link" href="./contato.html"> Contato</a>
                </li>
              </li>
            </ul>   
          </div>
        </div>
      </nav>    
</header>
    <main>
    <div class="parallax-sixth"></div>
    <h1 id="sb-title-6">Sabores para todos paladares!</h1>
    <div class="product-bg">
     <video autoplay muted loop>
        <source src="./css/assents/videos/Product-Bg.mp4" type="video/mp4">
      </video>
      <div class="product-text">
        <h1 id="product-tt">Dar asas a pessoas e ideias</h1>
        <p>Inspirado pelas bebidas funcionais do Extremo Oriente, Dietrich Mateschitz fundou a Red Bull em meados dos anos 80. Ele desenvolveu não apenas um novo produto, mas também um conceito de marketing único e lançou Red Bull Energy Drink na Áustria em 1º de abril de 1987. Nascia, assim, uma categoria de produto completamente nova a das bebidas energéticas.</p>
      </div>
  </div>
    <div class="product-container">
      <div class="product-item1">
      <?php
      
      $sql = "SELECT id_prod, nome, valor, qtdestoque FROM produtos WHERE nome = 'RedBull Tradicional'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {

      $row = $result->fetch_assoc();

      $caminhoimagem1 = "css/assents/img/R-T.png";
      
      echo "<img src='$caminhoimagem1' class='product-item-sb-1'>";
      echo "<h4>" . $row["nome"] . "</h4>";
      echo "<p>Valor: R$ " . number_format($row["valor"], 2, ',', '.') . "</p>";
      echo "<p>Disponibilidade: " . ($row["qtdestoque"] > 0 ? "Disponível" : "Indisponível") . "</p>";
      echo "<p>ID do Produto: " . $row["id_prod"] . "</p>";
      } else {
      echo "Produto não encontrado.";
      }
      ?>
      </div>

      <div class="product-item2">
      <?php
      
      $sql = "SELECT id_prod, nome, valor, qtdestoque FROM produtos WHERE nome = 'RedBull Sugar Free'";
      $result = $conn->query($sql);

      
      if ($result->num_rows > 0) {
  
      $row = $result->fetch_assoc();

      $caminhoimagem2 = "css/assents/img/R-S.png";
      
      echo "<img src='$caminhoimagem2' class='product-item-sb-2'>";
      echo "<h4>" . $row["nome"] . "</h4>";
      echo "<p>Valor: R$ " . number_format($row["valor"], 2, ',', '.') . "</p>";
      echo "<p>Disponibilidade: " . ($row["qtdestoque"] > 0 ? "Disponível" : "Indisponível") . "</p>";
      echo "<p>ID do Produto: " . $row["id_prod"] . "</p>";
      } else {
      echo "Produto não encontrado.";
      }
      ?>
      </div>

      <div class="product-item3">
      <?php
      
      $sql = "SELECT id_prod, nome, valor, qtdestoque FROM produtos WHERE nome = 'RedBull - The Açai Edition'";
      $result = $conn->query($sql);

      
      if ($result->num_rows > 0) {
      
      $row = $result->fetch_assoc();

      $caminhoimagem3 = "css/assents/img/R-A.png";
      
      echo "<img src='$caminhoimagem3' class='product-item-sb-3'>";
      echo "<h4>" . $row["nome"] . "</h4>";
      echo "<p>Valor: R$ " . number_format($row["valor"], 2, ',', '.') . "</p>";
      echo "<p>Disponibilidade: " . ($row["qtdestoque"] > 0 ? "Disponível" : "Indisponível") . "</p>";
      echo "<p>ID do Produto: " . $row["id_prod"] . "</p>";
      } else {
      echo "Produto não encontrado.";
      }
      ?>
      </div>
      <div class="product-item4">
      <?php
      
      $sql = "SELECT id_prod, nome, valor, qtdestoque FROM produtos WHERE nome = 'RedBull - The Açai & Coco Edition'";
      $result = $conn->query($sql);

     
      if ($result->num_rows > 0) {
      
      $row = $result->fetch_assoc();

      $caminhoimagem4 = "css/assents/img/R-C.png";
      
      echo "<img src='$caminhoimagem4' class='product-item-sb-4'>";
      echo "<h4>" . $row["nome"] . "</h4>";
      echo "<p>Valor: R$ " . number_format($row["valor"], 2, ',', '.') . "</p>";
      echo "<p>Disponibilidade: " . ($row["qtdestoque"] > 0 ? "Disponível" : "Indisponível") . "</p>";
      echo "<p>ID do Produto: " . $row["id_prod"] . "</p>";
      } else {
      echo "Produto não encontrado.";
      }
      ?>
      </div>

      <div class="product-item5">
      <?php

      $sql = "SELECT id_prod, nome, valor, qtdestoque FROM produtos WHERE nome = 'RedBull - The Melancia Edition'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {

      $row = $result->fetch_assoc();

      $caminhoimagem5 = "css/assents/img/R-M.png";
      
      echo "<img src='$caminhoimagem5' class='product-item-sb-5'>";
      echo "<h4>" . $row["nome"] . "</h4>";
      echo "<p>Valor: R$ " . number_format($row["valor"], 2, ',', '.') . "</p>";
      echo "<p>Disponibilidade: " . ($row["qtdestoque"] > 0 ? "Disponível" : "Indisponível") . "</p>";
      echo "<p>ID do Produto: " . $row["id_prod"] . "</p>";
      } else {
      echo "Produto não encontrado.";
      }
      ?>
      </div>

      <div class="product-item6">
      <?php

      $sql = "SELECT id_prod, nome, valor, qtdestoque FROM produtos WHERE nome = 'RedBull - The Pitaya Edition'";
      $result = $conn->query($sql);


      if ($result->num_rows > 0) {

      $row = $result->fetch_assoc();

      $caminhoimagem6 = "css/assents/img/R-P.png";
      
      echo "<img src='$caminhoimagem6' class='product-item-sb-6'>";
      echo "<h4>" . $row["nome"] . "</h4>";
      echo "<p>Valor: R$ " . number_format($row["valor"], 2, ',', '.') . "</p>";
      echo "<p>Disponibilidade: " . ($row["qtdestoque"] > 0 ? "Disponível" : "Indisponível") . "</p>";
      echo "<p>ID do Produto: " . $row["id_prod"] . "</p>";
      } else {
      echo "Produto não encontrado.";
      }
      ?>
      </div>

      <div class="product-item7">
     
      <?php

      
      $sql = "SELECT id_prod, nome, valor, qtdestoque FROM produtos WHERE nome = 'RedBull - The Tropical Edition'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {

      $row = $result->fetch_assoc();

      $caminhoimagem1 = "css/assents/img/R-TR.png";
      
      echo "<img src='$caminhoimagem1'class='product-item-sb-7'>";
      echo "<h4>" . $row["nome"] . "</h4>";
      echo "<p>Valor: R$ " . number_format($row["valor"], 2, ',', '.') . "</p>";
      echo "<p>Disponibilidade: " . ($row["qtdestoque"] > 0 ? "Disponível" : "Indisponível") . "</p>";
      echo "<p>ID do Produto: " . $row["id_prod"] . "</p>";
      } else {
      echo "Produto não encontrado.";
      }
      ?>
      </div>

      <div class="product-item8">
      <?php

      $sql = "SELECT id_prod, nome, valor, qtdestoque FROM produtos WHERE nome = 'RedBull - The Winter Edition'";
      $result = $conn->query($sql);


      if ($result->num_rows > 0) {

      $row = $result->fetch_assoc();

      $caminhoimagem8 = "css/assents/img/R-W.png";
      
      echo "<img src='$caminhoimagem8' class='product-item-sb-8'>";
      echo "<h4>" . $row["nome"] . "</h4>";
      echo "<p>Valor: R$ " . number_format($row["valor"], 2, ',', '.') . "</p>";
      echo "<p>Disponibilidade: " . ($row["qtdestoque"] > 0 ? "Disponível" : "Indisponível") . "</p>";
      echo "<p>ID do Produto: " . $row["id_prod"] . "</p>";
      } else {
      echo "Produto não encontrado.";
      }
      ?>
      </div>
    </div>
    </main>
        <section class="rodape">
      <footer class="bg-body-tertiary text-center">
        <div class="container p-4">
          <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">Site Desenvolvido Em Grupo</h5>
    
              <p>
                Esse site foi feito com o propósito em testar conhecimentos e sua intenção é totalmente estudantil.
              </p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Desenvolvedores</h5>
    
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="https://www.instagram.com/zev.vk/" class="text-body">José Victor</a>
                </li>
                <li>
                  <a href="https://www.instagram.com/jhonatan.brum.1/" class="text-body">Jhonatan Brum</a>
                </li>
                <li>
                  <a href="https://www.instagram.com/molinaro.11/" class="text-body">Cauã Molinaro</a>
                </li>
                <li>
                  <a href="https://www.instagram.com/raph_samp/" class="text-body">Raphael Sampaio</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
          © 2024 Site inspirado na
          <a class="text-body" href="https://www.redbull.com/br-pt/energydrink">Redbull</a> 
        </div>
      </footer>
    </section>
</body>
</html>
