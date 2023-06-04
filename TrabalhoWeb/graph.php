<?php
include("conexao.php");

// Total de nomes

$total_nomes = "SELECT COUNT(nome) AS total_nomes FROM form3;";
$sql_query = $mysqli->query($total_nomes);

$resultado = $sql_query->fetch_assoc();

$total_nomes = $resultado['total_nomes'];

// Total de Familias

$total_familias = "SELECT COUNT(DISTINCT CONCAT(nome, nomePai, nomeMae, moradia)) AS total_familias FROM form3;";
$sql_query = $mysqli->query($total_familias);

$resultado = $sql_query->fetch_assoc();

$total_familias = $resultado['total_familias'];

// Resultado

$total_campos = 0;

if ($sql_query = $mysqli->query("SHOW COLUMNS FROM form3;")) {
    $total_campos = $sql_query->num_rows;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEEP Manoel Mano | Relatório</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/iconmm.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Estilização da Página -->
    <link rel="stylesheet" href="./style/graph.css">
</head>
<body>
    
    <?php include("sidebar.php"); ?>

    <div class="container-fluid mt-4 text-center">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Gráficos</h1>
            <a href="gerar_pdf.php" class="btn btn-sm shadow-sm">
                <button type="submit" class="btn btn-outline-success" name="relatorio">Baixar Relatórios</button>
            </a>
        </div>
        <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card card-border-left shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                    Alunos
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php echo $total_nomes; ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-person-fill custom-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card card-border-left shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                    Familias
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php echo $total_familias; ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-people-fill custom-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card card-border-left shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                    Total de Gráficos
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    9
                                </div>
                            </div>
                            <div class="col-auto">
                            <i class="bi bi-bar-chart-fill custom-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card card-border-left shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                    Resultados
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php echo $total_campos; ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-search custom-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

        </div>

        <div class="row">

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>