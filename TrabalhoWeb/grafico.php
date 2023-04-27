<html>
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/iconmm.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style/dados.css">
    <title>EEEP Manoel Mano | Relatório Sociecômico</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Cursos', 'Total de alunos', 'Porcentagem'],
            <?php
              include "conexao.php";

              // Verifica erros na conexão com o banco de dados
              if($mysqli->connect_errno) {
                die("Erro ao conectar com o banco de dados: " . $mysqli->connect_error);
              }

              // Consulta o total de alunos em cada curso
              $sql = "SELECT curso, COUNT(*) AS total_alunos, CONCAT(ROUND((COUNT(*) / (SELECT COUNT(*) FROM form3)) * 100, 2), '%') AS porcentagem_alunos FROM form3 WHERE curso IN ('comércio', 'administração', 'informática', 'enfermagem') GROUP BY curso";
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
            title: 'Total por Curso',
            subtitle: 'Porcentagem de cada curso na escola',
          }
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material01'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Mãe está empregada?');
        data.addColumn('number', 'Quantidade de alunos');
        data.addRows([
          <?php
            include "conexao.php";

            if($mysqli->connect_errno) {
              die("Erro ao conectar com o banco de dados" . $mysqli->connect_error);
            }

            $sql = "SELECT COUNT(CASE WHEN empregadoMae = 'Sim' THEN 1 END) AS sim, COUNT(CASE WHEN empregadoMae = 'Não' THEN 1 END) AS nao FROM form3 WHERE empregadoMae IN ('Sim', 'Não'); ";

            $my_query = mysqli_query($mysqli, $sql);

            if(!$my_query) {
              die("Erro ao executar a consulta: " . $mysqli->error);
            }+

            $result = mysqli_fetch_assoc($my_query);

            $mae_empregada_sim = $result['sim'];
            $mae_empregada_nao = $result['nao'];

            $mysqli->close();
          ?>
          ['Sim', <?php echo $mae_empregada_sim; ?>],
          ['Não', <?php echo $mae_empregada_nao; ?>]
        ]);

        var options = {
          title: 'Mãe está empregada?',
          subtitle: 'Porcentagem de alunos com mães empregadas ou não',
          chartArea: { width: '50%' },
          hAxis: {
            title: 'Quantidade de alunos',
            minValue: 0
          },
          vAxis: {
            title: 'Mãe está empregada?'
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material02'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <header>
        <div class="main-menu">
            <div class="bar"></div>
            <div class="col-0">
                <a href="https://www.ceara.gov.br/"><img src="img/logo-governo.svg" alt="Logo do Governo do Ceará"></a>
                <a href="https://www.instagram.com/eeepmanoelmano/"><img src="img/logo-mm.svg" alt="Logo da EEEP Manoel Mano"></a>
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            Relatórios
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./grafico.php">Relatório Socioeconômico</a></li>
                            <li><a class="dropdown-item" href="#">Relatório de Saúde</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
    <section class="bcgb">
            <span id="t"></span>
            <br>
            <p id="cnt2"></p>
            <h1 id="cnt">Visão geral dos alunos do 1ª Ano 2023  </h1>
            <br>
            <br>
            <br>
            <br>
            <div class="charts">
              <div id="columnchart_material01" style="height: 500px;"></div>
            </div>
    </section>
    <section class="bcgb">
            <span id="t"></span>
            <br>
            <p id="cnt2"></p>
            <h1 id="cnt">Visão geral dos alunos do 1ª Ano 2023  </h1>
            <br>
            <br>
            <br>
            <br>
            <div class="charts">
              <div id="columnchart_material02" style="height: 500px;"></div>
            </div>
    </section>
    </div>
  </body>
</html>
