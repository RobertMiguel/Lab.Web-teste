<?php
include('conexao.php');

if(isset($_POST['usuario']) || isset($_POST['senha'])) {
    if(strlen($_POST['usuario']) == 0) {
        echo "Preencha o campo usuário";
    }
    else if(strlen($_POST['senha']) == 0) { 
        echo "Preencha sua senha";
    }
    else {
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM `Trabalho Web` WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL");

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    } 
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEEP Manoel Mano | Login</title>
    <!-- Estilização de Login -->
    <link rel="stylesheet" href="login.style.css">
    <!-- Favicon da página -->
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
                        <h3>Faça seu Login</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="area-formulario">
            <div class="formulario">
                <form action=""method="POST">
                    <label for=""><span><img src="icon-email.png" alt="Usuario"></span> Usuário</label>
                    <input type="text" name="usuario" placeholder="Digite o nome de usuário">
                    <label for=""><span><img src="icon-password.png" alt="Senha"></span> Senha</label>
                    <input type="password" name="senha" placeholder="Digite a senha">
                    <div class="submit">
                        <input type="submit" value="Entrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
        <footer>
            <img src="ondas-governo-rodape.png" alt="Ondas rodape do governo">
        </footer>
</body>
</html>