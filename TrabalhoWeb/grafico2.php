<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Resposta', 'Porcentagem'],
        <?php
            include "conexao.php";

            // Verifica erros na conexão com o banco de dados
            if($mysqli->connect_errno) {
                die("Erro ao conectar com o banco de dados: " . $mysqli->connect_error);
            }

            // Consulta a quantidade de respostas para cada opção
            $sql = "SELECT COUNT(*) AS total, empregadoMae FROM form3 GROUP BY empregadoMae";
            $result = mysqli_query($mysqli, $sql);

            // Verifica erros na consulta
            if(!$result) {
                die("Erro ao executar a consulta: " . $mysqli->error);
            }

            // Monta o array de dados do gráfico
            while($dados = mysqli_fetch_array($result)) {
                $resposta = $dados['empregadoMae'] ? $dados['empregadoMae'] : "Não informado";
                $porcentagem = round(($dados['total'] / mysqli_num_rows($result)) * 100, 2);
                echo "['" . $resposta . "', " . $porcentagem . "],";
            }

            $mysqli->close();
        ?>

    ]);

    var options = {
        chart: {
            title: 'Mãe está empregada?',
            subtitle: 'Porcentagem de respostas'
        }
    };

    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}
</script>
  </head>
  <body>
    <div id="chart_div" style="width: 800px; height: 500px;"></div>
  </body>
</html>
