<?php

$usuario = 'root';
$senha = '';
$database = 'Trabalho Web';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar com banco de dados" . $mysqli->error);
};

?>
