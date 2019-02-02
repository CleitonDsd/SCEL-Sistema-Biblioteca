<?php
// <>Para incluir uma vez a conexão com o Banco de Dados<>'
include_once './conecta2.php';

// <>Recuperar o dado que enviamos, para a variável<>'
// <> Filtra o Input - Informamos qual metódo 'Input_Get' da VAR rmAluno - '<>
// <>E recebemos a variável como um String com FILTER_SANITIZE_STRING'<>
$emailUsuario = filter_input(INPUT_GET, 'emailUsuario', FILTER_SANITIZE_STRING);
// <>Só vai realizar a pesquisa quando a VAR $variável for != 0'<>
if(!empty($emailUsuario)){

    $limit = 1;
    // <>Query para consulta no Banco de Dados, onde o Dado seja igual ao do link'<>
    $result = "SELECT * FROM usuarios WHERE emailUsuario =:emailUsuario LIMIT :limit";
    // <>Preparar a Query atribuindo para uma VAR $resultado'<>
    $resultado = $conn->prepare($result);
    // <>Vamos substituir o Link do Dado pela VAR (bindParam(informa que vamos substituir o link pela VAR)) '<>
    // <>PDO STR informa que é uma String'<>
    $resultado->bindParam(':emailUsuario', $emailUsuario, PDO::PARAM_STR);
    // <>O limite como é um número usamos PDO::PARAM_INT'<>
    $resultado->bindParam(':limit', $limit, PDO::PARAM_INT);
    // <>Executamos a Query'<>
    $resultado->execute();
    
    // <>inicializa o array - como fizemos no script_getRm<>'
    $array_valores = array();
    
    // <>Verifica se encontramos algum resultado no BD, se o resultado for != 0 '<>
    if($resultado->rowCount() != 0){
        // <>Se ele encontrou alguma linha acessa esse desvio de fluxo '<>
        // <>Vamos ler o resultado da VAR $resultado usando "PDO::FETCH_ASSOC"'<>
        // <>E atribuimos o resultado para linha_aluno(row_aluno)'<>
        $row_aluno = $resultado->fetch(PDO::FETCH_ASSOC);
        // <>Aqui imprimo o valor correspondente ao do Banco de Dados<>'
        $array_valores['nomeUsuario'] = $row_aluno['nomeUsuario'];         
        $array_valores['emailUsuario'] = $row_aluno['emailUsuario'];         
        $array_valores['loginUsuario'] = $row_aluno['loginUsuario'];         
        $array_valores['senhaUsuario'] = $row_aluno['senhaUsuario'];         
        $array_valores['observacaoUsuario'] = $row_aluno['observacaoUsuario'];         

    }else{
        // <>Se ele  não encontrou alguma linha acessa esse desvio de fluxo '<>
        // <>Quando não encontrar valores, na posição do array nomeAluno informar "Aluno não encontrado!"'<>        
        $array_valores['nomeUsuario'] = 'Usuário não encontrado!';        
        $array_valores['observacaoUsuario'] = 'Digite um e-mail válido no campo de pesquisa!';   
        // echo "<script>swal('Epaaa!', 'Verifique se o e-mail inserido está cadastrado!', 'error');</script>";               
    }
    // <> Retorna o valor do $array_valores '<>
    echo json_encode($array_valores);
}
    
/* PHP *//* Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)*/

/*<>Código para buscar Rm e trazer Nome do Aluno<>'*/
/*<>Code to get Rm <>'*/
