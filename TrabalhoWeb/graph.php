<?php
include("conexao.php");

// Total de Nomes

$total_nomes = "SELECT COUNT(nome) AS total_nomes FROM Dados;";
$sql_query = $mysqli->query($total_nomes);

$resultado = $sql_query->fetch_assoc();

$total_nomes = $resultado['total_nomes'];

// Total de Familias

$total_familias = "SELECT COUNT(DISTINCT CONCAT(nome, nomePai, nomeMae, moradia)) AS total_familias FROM Dados;";
$sql_query = $mysqli->query($total_familias);

$resultado = $sql_query->fetch_assoc();

$total_familias = $resultado['total_familias'];

// Resultado

$total_campos = 0;

if ($sql_query = $mysqli->query("SHOW COLUMNS FROM Dados;")) {
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
    <link rel="icon" type="image/png" sizes="32x32" href="assets/iconmm.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Estilização da Página -->
    <link rel="stylesheet" href="styles/graph.css">
    <!-- Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Quantidade de Alunos, cada curso -->
    <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var container = document.getElementById('overview');
        var chartWidth = container.offsetWidth;
        var chartHeight = 250; // Altura desejada do gráfico

        var data = google.visualization.arrayToDataTable([
            ['Cursos', 'Quantidade de Alunos', 'Porcentagem'],
            <?php
            include ("conexao.php");

            // Verifica erros na conexão com o banco de dados
            if($mysqli->connect_errno) {
                die("Erro ao conectar com o banco de dados: " . $mysqli->connect_error);
            }

            // Consulta o total de alunos em cada curso
            $sql = "SELECT curso, COUNT(*) AS total_alunos, CONCAT(ROUND((COUNT(*) / (SELECT COUNT(*) FROM Dados)) * 100, 2), '%') AS porcentagem_alunos FROM Dados WHERE curso IN ('comércio', 'administração', 'informática', 'enfermagem') GROUP BY curso";
            $result = mysqli_query($mysqli, $sql);

            // Verifica erros na consulta
            if(!$result) {
                die("Erro ao executar a consulta: " . $mysqli->error);
            }

            // Monta o array de dados do gráfico
            while($dados = mysqli_fetch_array($result)) {
                echo "['" . $dados['curso'] . "', " . $dados['total_alunos'] . ", '" . $dados['porcentagem_alunos'] . "'],";
            }

            $mysqli->close();
            ?>
        ]);

        var options = {
            chart: {
                title: 'Quantidade por Curso',
                subtitle: 'Porcentagem de cada curso na escola',
            },
            width: chartWidth,
            height: chartHeight,
            series: {
                0: { color: '#808080' },
                1: { color: '#00bd19' },
            },
        };

        var chart = new google.charts.Bar(container);
        chart.draw(data, google.charts.Bar.convertOptions(options));
    }

    // Redimensionar o gráfico quando a janela for redimensionada
    window.addEventListener('resize', function() {
        drawChart();
    });
    </script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var container = document.getElementById('employed-parents');
            var chartWidth = container.offsetWidth;
            var chartHeight = 250; // Altura desejada do gráfico

            var data = google.visualization.arrayToDataTable([
                ['Pais Empregados', 'Quantidade de Pais', 'Porcentagem'],
                <?php
              include ("conexao.php");

              // Verifica erros na conexão com o banco de dados
              if($mysqli->connect_errno) {
                die("Erro ao conectar com o banco de dados: " . $mysqli->connect_error);
              }

              // Consulta o total de alunos em cada curso
              $sql = "SELECT empregado, COUNT(*) AS quantidade, CONCAT(FORMAT(COUNT(*) * 100 / SUM(COUNT(*)) OVER(), 2), '%') AS porcentagem FROM Dados GROUP BY empregado; ";
              $result = mysqli_query($mysqli, $sql);

              // Verifica erros na consulta
              if(!$result) {
                die("Erro ao executar a consulta: " . $mysqli->error);
              }

              // Monta o array de dados do gráfico
              while($dados = mysqli_fetch_array($result)) {
                echo "['" . $dados['empregado'] . "', " . $dados['quantidade'] . ", '" . $dados['porcentagem'] . "'],";
              }

              $mysqli->close();
            ?>
            ]);

            var options = {
                title: 'Quantidade de Pais Empregados',
                subtitle: 'Porcentagem de cada pai por aluno',
                width: chartWidth,
                height: chartHeight,
                pieHole: 0.4, // Define o tamanho do furo no gráfico de pizza (0 - 1)
            };

            var chart = new google.visualization.PieChart(container);
            chart.draw(data, options);
        }

        // Redimensionar o gráfico quando a janela for redimensionada
        window.addEventListener('resize', function() {
            drawChart();
        });
    </script>
</head>
<body>
    
    <?php include("sidebar.php"); ?>

    <div class="container-fluid mt-4 text-center">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-success font-weight-light">Gráficos</h1>
            <a href="gerar_pdf.php" class="btn btn-sm">
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
            <div class="col">
                <div class="card shadow mb-4 mx-auto ">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-success">Visão Geral</h6>
                        <button type="button" class="btn" data-bs-toggle="popover" data-bs-content="Número total de alunos em cada curso especificado no filtro e a porcentagem de cada curso em relação ao número total de alunos">
                            <i class="bi bi-info-square-fill text-success"></i>
                        </button>
                    </div>
                    <div class="card-body align-items-start">
                        <div id="overview" style="height: 250px; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card shadow mb-4 mx-auto ">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-success">Visão Geral</h6>
                        <button type="button" class="btn" data-bs-toggle="popover" data-bs-content="Número total de alunos em cada curso especificado no filtro e a porcentagem de cada curso em relação ao número total de alunos">
                            <i class="bi bi-info-square-fill text-success"></i>
                        </button>
                    </div>
                    <div class="card-body align-items-start">
                        <div id="employed-parents" style="height: 250px; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Popovers -->
    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>