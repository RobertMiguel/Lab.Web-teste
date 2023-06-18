<?php
  include("conexaoHealth.php");
  include("listDataHealth.php");
  $total_restricao = "SELECT COUNT(restricaoAlN) AS total_restricao FROM Saude;";
  $sql_query = $connection->query($total_restricao);
  $resultado = $sql_query->fetch_assoc();
  $total_restricao = $resultado['total_restricao'];
  $total_alergias = "SELECT COUNT(alergiasN) AS total_alergias FROM Saude WHERE alergiasN = 'sim'; ";
  $sql_query = $connection->query($total_alergias);
  $resultado = $sql_query->fetch_assoc();
  $total_alergias = $resultado['total_alergias'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEEP Manoel Mano | Relatório de Saúde</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/iconmm.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Estilização da Página -->
    <link rel="stylesheet" href="styles/graph.css">
    <!-- Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawAllergyChart);
        function drawAllergyChart() {
            var container = document.getElementById('allergy');
            var chartWidth = container.offsetWidth;
            var chartHeight = 250; 
            var data = google.visualization.arrayToDataTable([
                ['Cursos', 'Total de Alergias por Curso'],
                <?php
                include("conexaoHealth.php");
                if($connection->connect_errno) {
                    die("Erro ao conectar com o banco de dados: " . $connection->connect_error);
                }
                $sql2 = mysqli_query($connection, "SELECT curso, count(alergiasInpN) as qtd FROM Saude WHERE curso LIKE '%enf%' GROUP BY curso UNION SELECT curso, count(alergiasInpN) as qtd FROM Saude WHERE curso LIKE '%info%' GROUP BY curso UNION SELECT curso, count(alergiasInpN) as qtd FROM Saude WHERE curso LIKE '%com%' GROUP BY curso UNION SELECT curso, count(alergiasInpN) as qtd FROM Saude WHERE curso LIKE '%adm%' GROUP BY curso ORDER BY qtd ASC;  ");                
                $result = mysqli_query($connection, $sql);
                if(!$result) {
                    die("Erro ao executar a consulta: " . $connection->error);
                }
                while ($dados = mysqli_fetch_array($sql2) ) {
                    $curso =  $dados['curso'];
                    $total =  $dados['qtd'];
                  ?>
        
                  ['<?php echo $curso ?>', '<?php echo $total ?>' ],
        
                <?php } ?>
            ]);
            var options = {
                chart: {
                    title: 'Alergias',
                    subtitle: 'Cursos e  Quantidade de Alergias',
                },
                width: chartWidth,
                height: chartHeight,
                colors: ['#00853B', '#00853B', '#00853B', '#00853B']
            };
            var chart = new google.charts.Bar(container);
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        window.addEventListener('resize', function() {
            drawAllergyChart();
        });
    </script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawFoodRestrictionChart);
    function drawFoodRestrictionChart() {
        var container = document.getElementById('food-restriction');
        var chartWidth = container.offsetWidth;
        var chartHeight = 250; 
        var data = google.visualization.arrayToDataTable([
            ['Cursos', 'Total de Alergias por Curso'],
            <?php
            include("conexaoHealth.php");
            if($connection->connect_errno) {
                die("Erro ao conectar com o banco de dados: " . $connection->connect_error);
            }
            $sql2 = mysqli_query($connection, "SELECT curso, count(restAlInpN) as qtd FROM Dados WHERE curso LIKE '%enf%' GROUP BY curso UNION SELECT curso, count(restAlInpN) as qtd FROM Dados WHERE curso LIKE '%info%' GROUP BY curso UNION SELECT curso, count(restAlInpN) as qtd FROM Dados WHERE curso LIKE '%com%' GROUP BY curso UNION SELECT curso, count(restAlInpN) as qtd FROM Dados WHERE curso LIKE '%adm%' GROUP BY curso ORDER BY qtd ASC;   ");            $result = mysqli_query($connection, $sql);
            if(!$result) {
                die("Erro ao executar a consulta: " . $connection->error);
            }
            while ($dados = mysqli_fetch_array($sql2) ) {
                $curso =  $dados['curso'];
                $total =  $dados['qtd'];
              ?>
    
              ['<?php echo $curso ?>', '<?php echo $total ?>' ],
    
            <?php } ?>
        ]);
        var options = {
            chart: {
                title: 'Restrições Alimentares',
                subtitle: 'Cursos e  Quantidade de Restrições Alimentares',
                colors: ['#00853B', '#00853B', '#00853B', '#00853B']
            },
            width: chartWidth,
            height: chartHeight,
        };
        var chart = new google.charts.Bar(container);
        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
    window.addEventListener('resize', function() {
        drawFoodRestrictionChart();
    });
</script>
</head>
<body style="overflow: auto;">

    <?php include("sidebar.php"); ?>

    <div class="container-fluid mt-4 text-center">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-success font-weight-light">Gráficos</h1>
            <a href="gerar_pdf.php" class="btn btn-sm">
                <button type="submit" class="btn btn-outline-success" name="relatorio">Baixar Relatórios</button>
            </a>
        </div>
        <div class="row justify-content-around">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card card-border-left shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                    Quantidade de Alergia
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php echo $total_alergias; ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-virus2 custom-icon"></i>
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
                                    Restrição Alimentar
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php echo $total_restricao; ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-egg-fried custom-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="card shadow mb-4 mx-auto ">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-success">Alergias</h6>
                        <button type="button" class="btn" data-bs-toggle="popover" data-bs-content="Quantidade de alunos com alergia em cada curso. Essas informações podem ser utilizadas para visualizar a distribuição dos alunos com alergia em relação ao total de registros">
                            <i class="bi bi-info-square-fill text-success"></i>
                        </button>
                    </div>
                    <div class="card-body align-items-start">
                        <div id="allergy" style="height: 250px; width: 100%;"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow mb-4 mx-auto ">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-success">Restrição Alimentar</h6>
                        <button type="button" class="btn" data-bs-toggle="popover" data-bs-content="Total de alergia causas pela a comida, juntamente com a quantidade de alunos. Essas informações permitem visualizar a distribuição da escolaridade dos pais em relação ao total de registros">
                            <i class="bi bi-info-square-fill text-success"></i>
                        </button>
                    </div>
                    <div class="card-body align-items-start">
                        <div id="food-restriction" style="height: 250px; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
        });
    });
    </script>
    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>