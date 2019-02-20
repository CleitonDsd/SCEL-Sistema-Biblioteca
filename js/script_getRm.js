
$(document).ready(function () {
	// <>pega o valor do campo com nome Id aluno. E quando clicar fora vai acessar a função<>'
    $("input[name='rmAluno']").blur(function () {
    	// <> variáveis que vão receber os dados do campo<>'
        var $idAluno  = $("input[name='idAluno']");        
        var $nomeAluno  = $("input[name='nomeAluno']");        
        // recupera o ID do input e coloca na váriavel
        var rmAluno     = $(this).val();
        // <>Chama o arquivo responsável em buscar no Banco de Dados, e envia o Id pesquisado<>'
        $.getJSON('queryRm.php', {rmAluno},
        	// <>Function vai recuperar o que esse arquivo retorna e colocar na variável 'retorno'<>'
            function(retorno){
            	// <>A váriavel $nomeAluno vai receber o que vier de retorno da posição nomeAluno(input)<>'
                $idAluno.val(retorno.idAluno);  
                $nomeAluno.val(retorno.nomeAluno);             
            }
        );        
    });
});

/* Java Script *//* Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)*/
/*Algumas funções serão comentadas, pois ainda não consigo manipular todas'*/

/*<>Função para buscar Rm e trazer Nome do Aluno<>'*/
/*<>functions to get Rm <>'*/
