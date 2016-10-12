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
                <div class="ui segment">
					<h2>Seja bem-vindo ao AudWiki<?php if(isset($_SESSION['nome'])){echo(", ".$_SESSION['nome']);} ?>!</h2>
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

