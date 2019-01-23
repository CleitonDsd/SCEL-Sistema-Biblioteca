$(document).ready(function () {
	// <>pega o valor do campo com nome 'nomeLivro'. E quando clicar fora vai acessar a função<>'
    $("input[name='nomeLivro']").blur(function () {
    	// <> variáveis que vão receber os dados do campo<>'
        var $editoraLivro  = $("input[name='editoraLivro']"); 
        // recupera o nome do Livro do input e coloca na váriavel       
        var nomeLivro     = $(this).val();
         // <>Chama o arquivo responsável em buscar no Banco de Dados, e envia o Livro pesquisado<>'
        $.getJSON('queryEditora.php', {nomeLivro},
        	// <>Function vai recuperar o que esse arquivo retorna e colocar na variável 'retorno'<>'
            function(retorno){
            	// <>A váriavel $nomeEditora vai receber o que vier de retorno da posição nomeEditora(input)<>'
                $editoraLivro.val(retorno.editoraLivro);             
            }
        );        
    });
});

/* JavaScript *//* Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)*/

/*<>Função para buscar nome do  Livro e trazer Nome da Editora<>'*/
/*<>Function to get name book and get name publisher <>'*/