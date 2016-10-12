<?php
    $conexao = mysqli_connect("localhost", "root", "", "audwiki");
    mysqli_set_charset($conexao,'utf8');
    if ($conexao == false) {
        $erro = mysqli_connect_errno();
        header("location:erro.php?erro=$erro");
    }
?>
