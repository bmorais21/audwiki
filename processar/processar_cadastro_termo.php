<?php
	require("conectar.php");
	
	session_start();
	$termo = $_POST['termo'];
	$significado = $_POST['significado'];
	$user = $_SESSION['id'];

	mysqli_query($conexao, "INSERT INTO post (titulo, descricao, usuario) VALUES ('$termo', '$significado', $user)");
	header("location: ../cadastro_termo.php?ok=ok");
?>