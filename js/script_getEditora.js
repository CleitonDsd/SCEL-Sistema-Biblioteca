$(document).ready(function () {
    $("input[name='nomeLivro']").blur(function () {

        var $editoraLivro  = $("input[name='editoraLivro']");        
        var nomeLivro     = $(this).val();
        
        $.getJSON('queryEditora.php', {nomeLivro},
            function(retorno){
                $editoraLivro.val(retorno.editoraLivro);             
            }
        );        
    });
});

/* JavaScript *//* Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)*/

/*<>Função para buscar nome do  Livro e trazer Nome da Editora<>'*/
/*<>Function to get name book and get name publisher <>'*/