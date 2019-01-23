
$(document).ready(function () {
    $("input[name='rmAluno']").blur(function () {

        var $nomeAluno  = $("input[name='nomeAluno']");        
        var rmAluno     = $(this).val();
        
        $.getJSON('queryRm.php', {rmAluno},
            function(retorno){
                $nomeAluno.val(retorno.nomeAluno);             
            }
        );        
    });
});

/* Java Script *//* Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)*/
/*Algumas funções serão comentadas, pois ainda não consigo manipular todas'*/

/*<>Função para buscar Rm e trazer Nome do Aluno<>'*/
/*<>functions to get Rm <>'*/
