/* Java Script *//* Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)*/
/*Algumas funções serão comentadas, pois ainda não consigo manipular todas'*/

/*<>Função para Pegar o Rm do Aluno Trazer o nome Form de Empréstimos<>'*/
/*<>functions to get Rm<>'*/

$(document).ready(function () {
    $("input[name='rmAluno']").blur(function () {

        var $nomeAluno  = $("input[name='nomeAluno']");        
        var rmAluno     = $(this).val();
        
        $.getJSON('../php/buscaRm.php', {rmAluno},
            function(retorno){
                $nomeAluno.val(retorno.nomeAluno);             
            }
        );        
    });
});