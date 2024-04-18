
<?php 
  $hostname = "localhost";
  $bancodedados = "redbull";
  $usuario = "root";
  $senha = "";
  
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
    <title>Nome da Empresa</title>

    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"></link>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Fontes-->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>    

    <title>Document</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark ">
        <div class="container-fluid">
          <img class="nav-logo"src="./css/assents/img/logo.png" alt="Logotipo da Red Bull" height="80">
          
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./home.html"> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./sobre.html"> Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./produtos.php">Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./novidades.php">Novidedades</a>
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
    <div class="product-container">
      <div class="product-item1">
      <?php
      // Consulta SQL para selecionar o ID do produto desejado
      $sql = "SELECT id_prod, nome, valor, qtdestoque FROM produtos WHERE nome = 'RedBull Tradicional'";
      $result = $conn->query($sql);

      // Verificar se encontrou o produto
      if ($result->num_rows > 0) {
      // Exibir os detalhes do produto
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
      // Consulta SQL para selecionar o ID do produto desejado
      $sql = "SELECT id_prod, nome, valor, qtdestoque FROM produtos WHERE nome = 'RedBull Sugar Free'";
      $result = $conn->query($sql);

      // Verificar se encontrou o produto
      if ($result->num_rows > 0) {
      // Exibir os detalhes do produto
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
      // Consulta SQL para selecionar o ID do produto desejado
      $sql = "SELECT id_prod, nome, valor, qtdestoque FROM produtos WHERE nome = 'RedBull - The Açai Edition'";
      $result = $conn->query($sql);

      // Verificar se encontrou o produto
      if ($result->num_rows > 0) {
      // Exibir os detalhes do produto
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
      // Consulta SQL para selecionar o ID do produto desejado
      $sql = "SELECT id_prod, nome, valor, qtdestoque FROM produtos WHERE nome = 'RedBull - The Açai & Coco Edition'";
      $result = $conn->query($sql);

      // Verificar se encontrou o produto
      if ($result->num_rows > 0) {
      // Exibir os detalhes do produto
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
      // Consulta SQL para selecionar o ID do produto desejado
      $sql = "SELECT id_prod, nome, valor, qtdestoque FROM produtos WHERE nome = 'RedBull - The Melancia Edition'";
      $result = $conn->query($sql);

      // Verificar se encontrou o produto
      if ($result->num_rows > 0) {
      // Exibir os detalhes do produto
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
      // Consulta SQL para selecionar o ID do produto desejado
      $sql = "SELECT id_prod, nome, valor, qtdestoque FROM produtos WHERE nome = 'RedBull - The Pitaya Edition'";
      $result = $conn->query($sql);

      // Verificar se encontrou o produto
      if ($result->num_rows > 0) {
      // Exibir os detalhes do produto
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
      // Consulta SQL para selecionar o ID do produto desejado
      
      $sql = "SELECT id_prod, nome, valor, qtdestoque FROM produtos WHERE nome = 'RedBull - The Tropical Edition'";
      $result = $conn->query($sql);

      // Verificar se encontrou o produto
      if ($result->num_rows > 0) {
      // Exibir os detalhes do produto
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
      // Consulta SQL para selecionar o ID do produto desejado
      $sql = "SELECT id_prod, nome, valor, qtdestoque FROM produtos WHERE nome = 'RedBull - The Winter Edition'";
      $result = $conn->query($sql);

      // Verificar se encontrou o produto
      if ($result->num_rows > 0) {
      // Exibir os detalhes do produto
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
    <footer></footer>
</body>
</html>
