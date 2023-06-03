<?php
  include("protect.php");
  include("conexao.php");

    $id_imagem = 1;

    $sql_code = "SELECT `profile` FROM `Admin` WHERE id = $id_imagem";
    $result = $mysqli->query($sql_code);
  
    if ($result && $result->num_rows > 0) {
        // Recupera o caminho da imagem
        $row = $result->fetch_assoc();
        $caminho_imagem = $row['./img/iconmm.png'];
  
        // Exibe a imagem
        echo "<img src='" . $caminho_imagem . "' alt='Minha Imagem'>";
    }
  
    $mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<style>
.modal {
  width: 300px;
}
.modal-content {
  width: 300px;
}
.list-group-item:hover {
  background-color: rgba(59, 57, 57, 0.164) !important;
}

.custom-padding-left {
  padding-left: 10px;
}

.nav-border-bottom {
  background: url(./img/base-ondas.svg) no-repeat -50px bottom !important;
  border-bottom: 5px solid #00bd19;
}

.icon-color {
  color: #4caf50;
}

img {
  width: 10rem;
  height: auto;
}

</style>

<body>
    

<nav class="navbar">
  <div class="container-fluid">
    <div class="d-flex align-items-center justify-content-start">
      <a class="navbar-brand" href="#">
        <img src="img/logo-governo.svg" class="img-fluid" alt="Logo 1">
      </a>
      <a class="navbar-brand" href="#">
        <img src="img/logo-mm.svg" class="img-fluid" alt="Logo 1">
      </a>
    </div>
    <div class="d-flex align-items-center justify-content-end">
      <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-list icon-color"></i>
      </button>
    </div>
  </div>
</nav>



<nav class="navbar navbar-light bg-light nav-border-bottom" style="height: 50px;">

</nav>

  
  <div class="modal true" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Olá, <?php echo $_SESSION['usuario'];?>
          </h5>
          <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi bi-x-lg icon-color"></i>
          </button>
        </div>
        <div class="modal-body">
  
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="bi bi-file-earmark-fill icon-color"></i><a href="#" class="link-offset-2 link-underline link-underline-opacity-0 custom-padding-left text-secondary">Formulário Socioeconômicos</a></li>
            <li class="list-group-item"><i class="bi bi-lungs-fill icon-color"></i><a href="#" class="link-offset-2 link-underline link-underline-opacity-0 custom-padding-left text-secondary">Formulário de Saúde</a></li>
            <li class="list-group-item"><i class="bi bi-bar-chart-fill icon-color"></i><a href="#" class="link-offset-2 link-underline link-underline-opacity-0 custom-padding-left text-secondary">Relatório</a></li>
          </ul>
  
        </div>
        <div class="modal-footer">
          <a href="logout.php">
            <button type="button" class="btn"  style="background-color: #fc662d;" data-bs-dismiss="modal">
              <i class="bi bi-box-arrow-right" style="color: #ffffff;"></i>
            </button>
          </a>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center">
  
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>