<?php
	$servidor = "localhost";
	$username = "root";
	$password = "";
	$database = "Trabalho Web";

	$connection = mysqli_connect($servidor, $username, $password, $database);
	if (!$connection) {
		echo "Não conectado ";	
	}
?>
