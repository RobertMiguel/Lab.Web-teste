

<?php

	include 'conexaoHealth.php';
	$listarSQL = mysqli_query($connection, "SELECT * FROM dados LIMIT 25");

?>