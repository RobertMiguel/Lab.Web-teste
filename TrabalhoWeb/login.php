<?php

include('conexao.php');

if(isset($_POST['usuario']) || isset($_POST['senha'])) {
    
    if(strlen($_POST['usuario']) == 0){
        echo "Preencha seu campo de um usuário";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha seu campo de senha";
    } else {
        
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM `Admin` WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['usuario'] = $usuario['usuario'];


            header("Location: dados.php");

        } else {
            echo "Falha ao logar! Usuário ou senha incorretos";
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
    <!-- Favicon EEEP Manoel Mano -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/iconmm.png">
    <!-- Estilização de Login -->
    <link rel="stylesheet" href="styles/login.css">
    <!-- Favicon da página -->
</head>
<body>

    <?php 
        include("header.php");
    ?>

    <div class="container"> 
        <div class="area-formulario">
            <div class="formulario">
                <form action=""method="POST">
                    <label for="usuario"><span><img src="assets/icon-email.png" alt="Usuario"></span> Usuário</label>
                    <input type="text" id="nu" name="usuario" placeholder="Digite o nome de usuário"> 
                    <label for="senha"><span><img src="assets/icon-password.png" alt="Senha"></span> Senha</label> 
                    <input type="password" name="senha" placeholder="Digite a senha">
                    <div class="submit">
                        <input type="submit" value="Entrar">
                    </div>
                </form>
            </div>
        </div>
<!--  </div> -->
        <footer>
        <img src="./assets/ondas-governo-rodape.png">
        </footer>
    </body>
    </html>

