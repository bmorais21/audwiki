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
        <div class="six wide column">
            <h2>Entrar</h2>
            <form action="processar/processar_login.php" method="post" class="ui form segment">
                <?php
                    if(isset($_GET['erro'])){ 
                        if($_GET['erro']==0){
                            echo("<div class='ui negative message'><strong>E-mail inválido!</strong></div>");
                        }else{
                            echo("<div class='ui negative message'><strong>Senha inválida!</strong></div>");
                        }
                    }
                    if(isset($_GET['login'])){
                        echo("<div class='ui positive message'><strong>Cadastro efetuado com sucesso! Agora você pode entrar no sistema!</strong></div>");
                    }
                ?>
                <div class="field">
                    <label>E-mail</label>
                    <input type="email" name="email" required="true" ><br/>
                </div>
                <div class="field">
                    <label>Senha:</label>
                    <input type="password" name="senha" required="true"><br/>
                </div>
                <br>
                <input type="submit" value="Entrar" class="ui button blue"/>
                <a href="cadastro_user.php" class="item">Não tem cadastro? <strong>Cadastre-se!</strong></a>
            </form>
        </div>
    </div>

    </div>
</article>

<?php
    require('footer.php');
?>
</body>
</html>

