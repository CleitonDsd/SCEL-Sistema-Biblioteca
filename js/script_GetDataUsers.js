
$(document).ready(function () {
	// <>pega o valor do campo com email do usuario. E quando clicar fora vai acessar a função<>'
    $("input[name='emailUsuario']").blur(function () {
    	// <> variáveis que vão receber os dados do campo<>'
        var $nomeUsuario        = $("input[name='nomeUsuario']");    
        var $emailUsuario       =$ ("input[name='emailUsuario']");    
        var $loginUsuario       = $("input[name='loginUsuario']");  
        var $funcaoUsuario      = $("select[name='funcaoUsuario']");  
        var $senhaUsuario       = $("input[name='senhaUsuario']");  
        var $observacaoUsuario  = $("textarea[name='observacaoUsuario']");        
        // recupera o email do input e coloca na váriavel
        var emailUsuario     = $(this).val();

        // <>Chama o arquivo responsável em buscar no Banco de Dados, e envia o email pesquisado<>'
        $.getJSON('processQueryDataUsers.php', {emailUsuario},
        	// <>Function vai recuperar o que esse arquivo retorna e colocar na variável 'retorno'<>'
            function(retorno){
            	// <>A váriavel $emailusuario vai receber o que vier de retorno da posição nomeAluno(input)<>'
                $nomeUsuario.val(retorno.nomeUsuario);             
                $emailUsuario.val(retorno.emailUsuario);  
                $loginUsuario.val(retorno.loginUsuario);
                $funcaoUsuario.val(retorno.funcaoUsuario);
                $senhaUsuario.val(retorno.senhaUsuario);
                $observacaoUsuario.val(retorno.observacaoUsuario);
            }
        );        
    });
});

/* Java Script *//* Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)*/
/*Algumas funções serão comentadas, pois ainda não consigo manipular todas'*/

/*<>Função para buscar Rm e trazer Nome do Aluno<>'*/
/*<>functions to get Rm <>'*/
