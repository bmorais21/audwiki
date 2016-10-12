<?php
	require('conectar.php');
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$nasc = $_POST['data'];
	$senha = $_POST['senha1'];
	$senha = md5($senha);
	mysqli_query($conexao, "INSERT INTO usuario (nome, email, senha, dt_nascimento, tipo_usuario) VALUES ('$nome', '$email', '$senha', '$nasc', 1)");
	header('location: ../login_user.php?login=ok');
?>