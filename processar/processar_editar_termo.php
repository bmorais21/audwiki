<?php
	require("conectar.php");
	$id = $_POST['id'];
	$termo = $_POST['termo'];
	$significado = $_POST['significado'];

	mysqli_query($conexao, "UPDATE post SET titulo='$termo', descricao='$significado' WHERE idpost='$id'");
	header("location: ../editar_termo.php?ok=ok");
?>