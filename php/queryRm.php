<?php
// <>Para incluir uma vez a conexão com o Banco de Dados<>'
include_once './conecta2.php';

// <>Recuperar o Rm que enviamos, para a variável RM Aluno<>'
// <> Filtra o Input - Informamos qual metódo 'Input_Get' da VAR rmAluno - '<>
// <>E recebemos a variável como um String com FILTER_SANITIZE_STRING'<>
$rmAluno = filter_input(INPUT_GET, 'rmAluno', FILTER_SANITIZE_STRING);
// <>Só vai realizar a pesquisa quando a VAR $rmAluno for != 0'<>
if(!empty($rmAluno)){
    
    $limit = 1;
    // <>Query para consulta no Banco de Dados, onde rmAluno seja igual ao link rmAluno'<>
    $result_aluno = "SELECT * FROM alunos WHERE rmAluno =:rmAluno LIMIT :limit";
    // <>Preparar a Query atribuindo para uma VAR $resultado_aluno'<>
    $resultado_aluno = $conn->prepare($result_aluno);
    // <>Vamos substituir o Link RM pela VAR (bindParam(informa que vamos substituir o link pela VAR)) '<>
    // <>PDO STR informa que é uma String'<>
    $resultado_aluno->bindParam(':rmAluno', $rmAluno, PDO::PARAM_STR);
    // <>O limite como é um número usamos PDO::PARAM_INT'<>
    $resultado_aluno->bindParam(':limit', $limit, PDO::PARAM_INT);
    // <>Executamos a Query'<>
    $resultado_aluno->execute();
    
    // <>inicializa o array - como fizemos no script_getRm<>'
    $array_valores = array();
    
    // <>Verifica se encontramos algum resultado no BD, se o resultado for != 0 '<>
    if($resultado_aluno->rowCount() != 0){
        // <>Se ele encontrou alguma linha acessa esse desvio de fluxo '<>
        // <>Vamos ler o resultado da VAR $resultado_aluno usando "PDO::FETCH_ASSOC"'<>
        // <>E atribuimos o resultado para linha_aluno(row_aluno)'<>
        $row_aluno = $resultado_aluno->fetch(PDO::FETCH_ASSOC);
        // <>Aqui imprimo o valor correspondente ao do Banco de Dados<>'
        $array_valores['nomeAluno'] = $row_aluno['nomeAluno'];         
    }else{
        // <>Se ele  não encontrou alguma linha acessa esse desvio de fluxo '<>
        // <>Quando não encontrar valores, na posição do array nomeAluno informar "Aluno não encontrado!"'<>
        $array_valores['nomeAluno'] = 'Aluno não encontrado!';        
    }
    // <> Retorna o valor do $array_valores '<>
    echo json_encode($array_valores);
}

/* PHP *//* Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)*/

/*<>Código para buscar Rm e trazer Nome do Aluno<>'*/
/*<>Code to get Rm <>'*/
