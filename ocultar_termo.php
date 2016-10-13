<!DOCTYPE html>
<html>
<head>
    <title>AudWiki</title>
    <?php
        require('head.php');
        require('acesso_adm.php');
    ?> 
</head>
<body>
<?php
    require('header.php');
?>

<article>
    <div class="ui centered grid">
        <div class="row">
            <div class="ten wide column">
                <h2>Ocultar/Mostrar Termos</h2>
                <div class="ui segment">
                    <?php
                        require("processar/conectar.php");
                        if(isset($_GET['termo'])){
                            $id = $_GET['termo'];
                            $resultado = mysqli_query($conexao, "SELECT * FROM post WHERE idpost='$id'");
                            while($termo = mysqli_fetch_array($resultado)){
                                if($termo['oculto']==1){
                                    mysqli_query($conexao, "UPDATE post SET oculto=0 WHERE idpost = '$id'");
                                    echo("<div class='ui positive message'><strong>Termo ocultado com sucesso!</strong></div>");
                                }else{
                                    mysqli_query($conexao, "UPDATE post SET oculto=1 WHERE idpost = '$id'");
                                    echo("<div class='ui positive message'><strong>Termo mostrado com sucesso!</strong></div>");
                                }
                            }                            
                        }
                        $resultado = mysqli_query($conexao, "SELECT * FROM post");
                        while($termo = mysqli_fetch_array($resultado)){
                            if($termo['oculto']==1){
                                echo("<h3>".$termo['titulo'].": ".$termo['descricao'].". <a href='ocultar_termo.php?termo=".$termo['idpost']."'>Ocultar <i class='ban icon'></i> </a></h3> ");
                            }else{
                                echo("<h3>".$termo['titulo'].": ".$termo['descricao'].". <a href='ocultar_termo.php?termo=".$termo['idpost']."'>Mostrar <i class='unhide icon'></i> </a></h3> ");
                            }
                        }                        
                    ?>

                </div>
            </div>
        </div>
    </div>
</article>

<?php
    require('footer.php');
?>

</body>
</html>

