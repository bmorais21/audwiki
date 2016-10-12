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
            <h2>Cadastro de usuário</h2>
            <form action="processar/processar_cadastro.php" method="post" class="ui form segment">
                <h3 class="ui header"></h3>
                <div class="field">
                    <label>Nome Completo</label>
                    <input type="text" name="nome" required="true"><br/>
                </div>
                <div class="field">
                    <label>E-mail</label>
                    <input type="email" name="email" required="true"><br/>
                </div>
                <div class="field">
                    <label>Data de nascimento</label>
                    <input type="date" name="data"><br/>
                </div>
                <div class="field">
                    <label>Digite sua senha</label>
                    <input type="password" name="senha1" id="senha1" required="true"><br/>
                </div>
                <div class="field">
                    <label>Digite a senha novamente</label>
                    <input type="password" name="senha2" id="senha2" required="true" onblur="verificarSenha(document.getElementById('senha1').value, document.getElementById('senha2').value);"><br/>
                </div>
                <div id="campo_senha"></div>
                <br>
                <input type="submit" id="bla" value="Cadastrar" class="ui button blue"/>
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

