<html>
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/iconmm.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/iconmm.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>EEEP Manoel Mano | Relatório Sociecômico</title>

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
              include ("../../../conexao.php");

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