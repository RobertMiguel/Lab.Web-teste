<html>
  <head>

    <!-- Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Quantidade de Alunos, cada curso -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Cursos', 'Quantidade de Alunos', 'Porcentagem'],
            <?php
              include ("../../conexao.php");

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
          }
        };
        var chart = new google.charts.Bar(document.getElementById('overview'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</head>
<body>
    <div class="charts">
        <div id="overview" style="height: 500px;"></div>
    </div>
</body>
</html>