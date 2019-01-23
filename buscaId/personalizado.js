
$(document).ready(function () {
    $("input[name='rmAluno']").blur(function () {

        var $nomeAluno  = $("input[name='nomeAluno']");        
        var rmAluno     = $(this).val();
        
        $.getJSON('busca.php', {rmAluno},
            function(retorno){
                $nomeAluno.val(retorno.nomeAluno);             
            }
        );        
    });
});