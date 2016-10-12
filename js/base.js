$(document).ready(function () {
    $('.ui.dropdown').dropdown({on: 'hover'});
});

function verificarSenha(sen1, sen2){
    if(sen1 != sen2){
    		document.getElementById("campo_senha").innerHTML = "<div class='ui negative message'><strong>As senhas não são iguais.</strong></div>";
    	}
    }
