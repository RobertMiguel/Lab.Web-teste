<?php
  include("protect.php");
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

</style>

<body>
    

<nav class="navbar navbar-light bg-light shadow">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  
  <div class="modal true" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Olá, <?php echo $_SESSION['nome'];?>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="bi bi-file-earmark-fill" style="color: #4caf50;"></i><a href="#" class="link-offset-2 link-underline link-underline-opacity-0 custom-padding-left text-secondary">Formulário Socioeconômicos</a></li>
            <li class="list-group-item"><i class="bi bi-lungs-fill" style="color: #4caf50;"></i><a href="#" class="link-offset-2 link-underline link-underline-opacity-0 custom-padding-left text-secondary">Formulário de Saúde</a></li>
            <li class="list-group-item"><i class="bi bi-bar-chart-fill" style="color: #4caf50;"></i><a href="#" class="link-offset-2 link-underline link-underline-opacity-0 custom-padding-left text-secondary">Relatório</a></li>
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