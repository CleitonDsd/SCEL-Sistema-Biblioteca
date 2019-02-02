/* Java Script *//* Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)*/

/*<>Script Que Pega Os dos Campos do Formulário<>'*/
/*<>File to validate fields in form<>'*/
$(document).ready(function () {
    // <>pega o valor do campo com nome RM aluno. E quando clicar fora vai acessar a função<>'
    $("input[name='rmAluno']").blur(function () {
        // <> variáveis que vão receber os dados do campo<>'
        var $idAluno        = $("input[name='idAluno']");        
        var $rmAluno        = $("input[name='rmAluno']");        
        var $nomeAluno      = $("input[name='nomeAluno']");
        var $emailAluno     = $("input[name='emailAluno']"); 
        var $moduloAluno    = $("select[name='moduloAluno']"); 
        var $periodoAluno   = $("select[name='periodoAluno']"); 
        var $cursoAluno     = $("select[name='cursoAluno']"); 
        var $telefoneAluno  = $("input[name='telefoneAluno']"); 
        // recupera o RM do input e coloca na váriavel
        var rmAluno     = $(this).val();

        // <>Chama o arquivo responsável em buscar no Banco de Dados, e envia o RM pesquisado<>'
        $.getJSON('processQueryDataStudents.php', {rmAluno},
            // <>Function vai recuperar o que esse arquivo retorna e colocar na variável 'retorno'<>'
            function(retorno){
                // <>A váriavel $nomeAluno vai receber o que vier de retorno da posição nomeAluno(input)<>'
                $idAluno.val(retorno.idAluno);                             
                $rmAluno.val(retorno.rmAluno);                             
                $nomeAluno.val(retorno.nomeAluno);             
                $emailAluno.val(retorno.emailAluno);             
                $moduloAluno.val(retorno.moduloAluno);             
                $periodoAluno.val(retorno.periodoAluno);             
                $cursoAluno.val(retorno.cursoAluno);             
                $telefoneAluno.val(retorno.telefoneAluno);             
            }
        );        
    });
});