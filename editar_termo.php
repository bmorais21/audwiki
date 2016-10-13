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
                <h2>Editar Termos</h2>
                <div class="ui segment">
                    <?php
                        require("processar/conectar.php");
                        if(isset($_GET['ok'])){
                            echo("<div class='ui positive message'><strong>Termo editado com sucesso!</strong></div>");
                        }
                        if(isset($_GET['termo'])){
                            $id = $_GET['termo'];
                            $resultado = mysqli_query($conexao, "SELECT * FROM post WHERE idpost = $id AND oculto=1");
                            while($termo = mysqli_fetch_array($resultado)){
                                $titulo = $termo['titulo'];
                                $significado = $termo['descricao'];
                                echo("
                                    <form action='processar/processar_editar_termo.php' method='post' class='ui form segment'>
                                        <div class='field'>
                                            <label>Termo</label>
                                            <input type='text' name='termo' value='$titulo' required='true' maxlength='15'><br/>
                                        </div>
                                        <div class='field'>
                                            <label>Significado</label>
                                            <textarea type='text' name='significado' required='true'>$significado</textarea><br/>
                                        </div>
                                        <br>
                                        <input type='hidden' value='$id' name='id'/>
                                        <input type='submit' value='Editar termo' class='ui button blue'/>
                                    </form>
                                ");
                            }
                        }else{
                            $resultado = mysqli_query($conexao, "SELECT * FROM post WHERE oculto=1");
                            while($termo = mysqli_fetch_array($resultado)){
                            echo("<h3>".$termo['titulo'].": ".$termo['descricao'].". <a href='editar_termo.php?termo=".$termo['idpost']."'>Editar <i class='write square icon'></i> </a></h3> ");
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

