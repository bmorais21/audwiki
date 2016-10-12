<!DOCTYPE html>
<html>
<head>
    <title>AudWiki</title>
    <?php
        require('head.php');
        require("acesso.php");
    ?> 
</head>
<body>
    <?php
        require('header.php');
    ?>

    <article>
        <div class="ui centered grid">
            <div class="ten wide column">
                <h2>Cadastro de novo termo</h2>
                <?php
                    if(isset($_GET['ok'])){
                        echo("<div class='ui positive message'><strong>Termo cadastrado com sucesso!</strong></div>");
                    }
                ?>
                <form action="processar/processar_cadastro_termo.php" method="post" class="ui form segment">
                    <div class="field">
                        <label>Termo</label>
                        <input type="text" name="termo" required="true" maxlength="15"><br/>
                    </div>
                    <div class="field">
                        <label>Significado</label>
                        <textarea type="text" name="significado" required="true"></textarea><br/>
                    </div>
                    <br>
                    <input type="submit" value="Cadastrar termo" class="ui button blue"/>
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

