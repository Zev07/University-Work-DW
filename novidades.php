<?php 
  $hostname = "localhost";
  $bancodedados = "empresa_redbull";
  $usuario = "root";
  $senha = "root";
  
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
    <div class="parallax-seventh"></div>
    <h1 id="sb-title-7">Trazendo um sabor novo a cada estação!</h1>
      <div class="product-container-nov">
       <div class="product-DB">
       <?php
      
       $sql = "SELECT id_nov, resumo, descricao FROM novidades WHERE resumo = 'RedBull Winter Edition'";
        $result = $conn->query($sql);

      
        if ($result->num_rows > 0) {
      
       $row = $result->fetch_assoc();

        $caminhoimagem9 = "css/assents/img/RNW.jpeg";  
       echo "<img src='$caminhoimagem9' class='product-item-nv'>";
        echo "<h1 class='product-tt'>" . $row["resumo"] . "</h1>";
       echo "<h3> Para este inverno </h3>";
       echo"<h6>". $row["descricao"] . "</h6>";
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
