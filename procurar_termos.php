<!DOCTYPE html>
<html>
<head>
    <title>AudWiki</title>
    <?php
        require('head.php');
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
                <h2>Termos</h2>
                <div class="ui segment">
					<form action="procurar_termos.php" method="post" class="ui form segment">
                        <div class="field">
                            <label>Procure o termo desejado: </label>
                            <input type="text" name="termo"/> 
                        </div>
                        <input type="submit" value="Procurar" class="ui button blue"/>
                    </form>
                    <?php
                        require("processar/conectar.php");
                        if(isset($_POST['termo'])){
                            $termo = $_POST['termo'];
                            $termo = '%'.$termo.'%';
                            $resultado = mysqli_query($conexao, "SELECT * FROM post WHERE titulo LIKE '$termo'");
                            while($termo = mysqli_fetch_array($resultado)){
                            echo("<h3>".$termo['titulo'].": ".$termo['descricao'].".</h3>");
                            }
                        }else{
                            $resultado = mysqli_query($conexao, "SELECT * FROM post");
                            while($termo = mysqli_fetch_array($resultado)){
                            echo("<h3>".$termo['titulo'].": ".$termo['descricao'].".</h3>");
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

