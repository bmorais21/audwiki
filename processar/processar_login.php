<?php
	require('conectar.php');
	$email = $_POST['email'];
	$senha = $_POST['senha'];
 	$senha = md5($senha);
    require("conectar.php");
    $resultado = mysqli_query($conexao,"SELECT * FROM usuario WHERE email='$email'");
    $quantidadelinhas = mysqli_num_rows($resultado);
    if($quantidadelinhas == 1){
    	$resultado = mysqli_query($conexao,"SELECT * FROM usuario WHERE email='$email' AND senha = '$senha'");
    	$quantidadelinhas = mysqli_num_rows($resultado);
    	if($quantidadelinhas == 1){
	    	while($linhas = mysqli_fetch_array($resultado)){
	        $tipo_usuario = $linhas['tipo_usuario'];
	        $nome = $linhas['nome'];
	        $id = $linhas['idusuario'];
	    	}
	    	session_start();
	    	$_SESSION['nome'] = $nome;
	    	$_SESSION['id'] = $id;
	        if($tipo_usuario == 1){
	            $_SESSION['tipo_usuario'] = 1;
	        }else{
	        	$_SESSION['tipo_usuario'] = 2;            
	        }
	        header("location:../index.php");
	    }else{
	    	header("location:../login_user.php?erro=1");
	    }
    }else{
    	header("location:../login_user.php?erro=0");
    }
?>