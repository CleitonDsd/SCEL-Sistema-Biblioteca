<?php
// <>Para incluir uma vez a conexão com o Banco de Dados<>'
include_once './conecta2.php';

// <>Recuperar o dado que enviamos, para a variável<>'
// <> Filtra o Input - Informamos qual metódo 'Input_Get' da VAR rmAluno - '<>
// <>E recebemos a variável como um String com FILTER_SANITIZE_STRING'<>
$nomeLivro = filter_input(INPUT_GET, 'nomeLivro', FILTER_SANITIZE_STRING);
// <>Só vai realizar a pesquisa quando a VAR $variável for != 0'<>
if(!empty($nomeLivro)){

    $limit = 1;
    // <>Query para consulta no Banco de Dados, onde o Dado seja igual ao do link'<>
    $result = "SELECT * FROM livros WHERE nomeLivro =:nomeLivro LIMIT :limit";
    // <>Preparar a Query atribuindo para uma VAR $resultado'<>
    $resultado = $conn->prepare($result);
    // <>Vamos substituir o Link do Dado pela VAR (bindParam(informa que vamos substituir o link pela VAR)) '<>
    // <>PDO STR informa que é uma String'<>
    $resultado->bindParam(':nomeLivro', $nomeLivro, PDO::PARAM_STR);
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
        $array_valores['nomeLivro']         = $row_aluno['nomeLivro'];         
        $array_valores['autorLivro']        = $row_aluno['autorLivro'];         
        $array_valores['editoraLivro']      = $row_aluno['editoraLivro'];         
        $array_valores['edicaoLivro']       = $row_aluno['edicaoLivro'];         
        $array_valores['isbnLivro']         = $row_aluno['isbnLivro'];         
        $array_valores['publicacaoLivro']   = $row_aluno['publicacaoLivro'];         
        $array_valores['categoriaLivro']    = $row_aluno['categoriaLivro'];         
        $array_valores['estoqueLivro']      = $row_aluno['estoqueLivro'];         

    }else{
        // <>Se ele  não encontrou alguma linha acessa esse desvio de fluxo '<>
        // <>Quando não encontrar valores, na posição do array nomeAluno informar "Aluno não encontrado!"'<>        
        $array_valores['nomeLivro'] = 'Livro não encontrado!';        
        $array_valores['autorLivro'] = 'Autor não encontrado!';        
        // echo "<script>swal('Epaaa!', 'Verifique se o e-mail inserido está cadastrado!', 'error');</script>";               
    }
    // <> Retorna o valor do $array_valores '<>
    echo json_encode($array_valores);
}
    
/* PHP *//* Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)*/

/*<>Código para buscar Rm e trazer Nome do Aluno<>'*/
/*<>Code to get Rm <>'*/
