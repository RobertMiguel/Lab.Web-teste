<?php
include('protect.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEEP Manoel Mano | Painel</title>
    <!-- Estilização da página -->
    <link rel="stylesheet" href="painel.css">
</head>
<body>
    <div class="header">
        <div class="container-main-menu">
            <div class="container">
                <div class="row">
                    <div class="col-0">
                        <a href="https://www.ceara.gov.br/"><img src="logo-governo.svg" alt="Logo do Governo do Ceará"></a>
                        <a href="https://www.instagram.com/eeepmanoelmano/"><img src="logo-mm.svg" alt="Logo da EEEP Manoel Mano"></a>
                    </div>
                    <div class="col-0">
                        <h3>Painel</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="area-messeger">
        <div class="messeger">
            <p>Seja bem-vindo ao painel, <?php echo $_SESSION['usuario']; ?></p>
            <button class="botton">
                <a href="logout.php" class="link">Sair</a>
            </button>
    </div>
    <footer>
            <img src="./ondas-governo-rodape.png" alt="Ondas rodape do governo">
    </footer>
</body>
</html>