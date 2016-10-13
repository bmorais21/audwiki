<?php
	require("conectar.php");
	
	session_start();
	$termo = $_POST['termo'];
	$significado = $_POST['significado'];
	$user = $_SESSION['id'];

	mysqli_query($conexao, "INSERT INTO post (titulo, descricao, oculto, usuario) VALUES ('$termo', '$significado', 1, $user)");
	header("location: ../cadastro_termo.php?ok=ok");
?>