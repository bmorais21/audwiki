<header>
    <div class="ui fluid">
        <div class="ui container">
            <a href="/audwiki">
                    <img src="img/logo.png" />
            </a>
        </div>
    </div>
</header>

<nav class="ui menu large" style="margin-top: 0; border-top: 0">
    <div class="ui container">
        <a href="index.php" class="item">Início</a>
        <div class="ui pointing dropdown link item">
            <span class="text">Termos</span>
            <i class="dropdown icon"></i>
            <div class="menu">
                <a href='procurar_termos.php' class='item'>Procurar por termos</a>
                <?php
                    if(isset($_SESSION['tipo_usuario'])){
                        echo("
                            <div class='divider'></div>
                            <a href='cadastro_termo.php' class='item'>Cadastrar novos termos</a>
                        ");
                        /*if($_SESSION['tipo_usuario']==2){
                            echo("
                                <a href='editar_termo.php' class='item'>Editar termos cadastrados</a>
                                <a href='aceitar_termo.php' class='item'>Aceitar novos termos</a>
                            ");
                        }*/
                    }
                ?>
                
            </div>
        </div>
        <a href="sobre.php" class="item">Sobre nós</a>
        <div class="right menu">
            <?php
                if(isset($_SESSION['tipo_usuario'])){
                    echo("<a href='processar/sair_user.php' class='item'>Sair <i class='sign out icon'></i></a>");
                }else{
                    echo("<a href='login_user.php' class='item'>Entrar <i class='user icon'></i></a>");
                }
            ?>
        </div>
    </div>
</nav>