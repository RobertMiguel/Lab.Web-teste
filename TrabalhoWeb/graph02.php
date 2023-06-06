    <!-- Pais Empregados -->
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
              $sql = "SELECT empregado, COUNT(*) AS quantidade, CONCAT(FORMAT(COUNT(*) * 100 / SUM(COUNT(*)) OVER(), 2), '%') AS porcentagem FROM Dados GROUP BY empregado";
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
    <!-- Escolaridade do Pai -->
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var container = document.getElementById('fathers-schooling');
            var chartWidth = container.offsetWidth;
            var chartHeight = 250; // Altura desejada do gráfico

            var data = google.visualization.arrayToDataTable([
                ['Escolaridade', 'Quantidade de Pais', 'Porcentagem'],
                <?php
              include ("conexao.php");

              // Verifica erros na conexão com o banco de dados
              if($mysqli->connect_errno) {
                die("Erro ao conectar com o banco de dados: " . $mysqli->connect_error);
              }

              // Consulta o total de alunos em cada curso
              $sql = "SELECT escolaridadePai, COUNT(*) AS quantidade, CONCAT(FORMAT(COUNT(*) * 100 / SUM(COUNT(*)) OVER(), 2), '%') AS porcentagem FROM Dados GROUP BY escolaridadePai; ";
              $result = mysqli_query($mysqli, $sql);

              // Verifica erros na consulta
              if(!$result) {
                die("Erro ao executar a consulta: " . $mysqli->error);
              }

              // Monta o array de dados do gráfico
              while($dados = mysqli_fetch_array($result)) {
                echo "['" . $dados['escolaridadePai'] . "', " . $dados['quantidade'] . ", '" . $dados['porcentagem'] . "'],";
              }

              $mysqli->close();
            ?>
            ]);

            var options = {
                title: 'Quantidade por Escolaridade',
                subtitle: 'Escolaridade de cada pai, em toda a escola',
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

<div class="row">

<div class="col-xl-6 col-lg-6">
    <div class="card shadow mb-4 mx-auto ">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-success">Pais Empregados</h6>
            <button type="button" class="btn" data-bs-toggle="popover" data-bs-content="Quantidade de registros e a porcentagem para cada valor único do campo Conta quantos registros existem para cada status de emprego, calcula a porcentagem desses registros em relação ao total de registros e retorna o resultado com o valor da quantidade e a porcentagem">
                <i class="bi bi-info-square-fill text-success"></i>
            </button>
        </div>
        <div class="card-body align-items-start">
            <div id="employed-parents" style="height: 250px; width: 100%;"></div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-lg-6">
    <div class="card shadow mb-4 mx-auto ">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-success">Escolaridade do Pai</h6>
            <button type="button" class="btn" data-bs-toggle="popover" data-bs-content="Quantidade de registros e a porcentagem para cada nível de escolaridade do pai. Conta registros existem para cada nível de escolaridade, calcula a porcentagem desses registros em relação ao total de registros">
                <i class="bi bi-info-square-fill text-success"></i>
            </button>
        </div>
        <div class="card-body align-items-start">
            <div id="fathers-schooling" style="height: 250px; width: 100%;"></div>
        </div>
    </div>
</div>

</div>

</div>