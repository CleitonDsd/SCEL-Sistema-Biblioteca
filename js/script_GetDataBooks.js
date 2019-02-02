
$(document).ready(function () {
	// <>pega o valor do campo com Livro do usuario. E quando clicar fora vai acessar a função<>'
    $("input[name='nomeLivro']").blur(function () {
    	// <> variáveis que vão receber os dados do campo<>'
        var $idlivro            = $("input[name='idlivro']");
        var $nomeLivro          = $("input[name='nomeLivro']");    
        var $autorLivro         = $("input[name='autorLivro']");    
        var $editoraLivro       = $("input[name='editoraLivro']");  
        var $edicaoLivro        = $("select[name='edicaoLivro']");  
        var $isbnLivro          = $("input[name='isbnLivro']");  
        var $publicacaoLivro    = $("input[name='publicacaoLivro']");  
        var $categoriaLivro     = $("select[name='categoriaLivro']");        
        var $estoqueLivro       = $("select[name='estoqueLivro']");        
        // recupera o Livro do input e coloca na váriavel
        var nomeLivro     = $(this).val();

        // <>Chama o arquivo responsável em buscar no Banco de Dados, e envia o Livro pesquisado<>'
        $.getJSON('processQueryDataBooks.php', {nomeLivro},
        	// <>Function vai recuperar o que esse arquivo retorna e colocar na variável 'retorno'<>'
            function(retorno){
            	// <>A váriavel $nomeLivro vai receber o que vier de retorno da posição nomeAluno(input)<>'
                $idlivro.val(retorno.idlivro);             
                $nomeLivro.val(retorno.nomeLivro);     
                $autorLivro.val(retorno.autorLivro);  
                $editoraLivro.val(retorno.editoraLivro);
                $edicaoLivro.val(retorno.edicaoLivro);
                $isbnLivro.val(retorno.isbnLivro);
                $publicacaoLivro.val(retorno.publicacaoLivro);
                $categoriaLivro.val(retorno.categoriaLivro);
                $estoqueLivro.val(retorno.estoqueLivro);
            }
        );        
    });
});

/* Java Script *//* Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)*/
/*Algumas funções serão comentadas, pois ainda não consigo manipular todas'*/

/*<>Função para buscar Rm e trazer Nome do Aluno<>'*/
/*<>functions to get Rm <>'*/
