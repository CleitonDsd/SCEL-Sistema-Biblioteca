<?php
// <>Para incluir uma vez a conexão com o Banco de Dados<>'
include_once './conecta.php';

// <>Recuperar o Rm que enviamos, para a variável nomeLivro<>'
// <> Filtra o Input - Informamos qual metódo 'Input_Get' da VAR nomeLivro - '<>
// <>E recebemos a variável como um String com FILTER_SANITIZE_STRING'<>
$nomeLivro = filter_input(INPUT_GET, 'nomeLivro', FILTER_SANITIZE_STRING);
// <>Só vai realizar a pesquisa quando a VAR $nomeLivro for != 0'<>
if(!empty($nomeLivro)){

    $limit = 1;
    // <>Query para consulta no Banco de Dados, onde nomeLivro seja igual ao link nomeLivro'<>
    $result_livro = "SELECT * FROM livros WHERE nomeLivro =:nomeLivro LIMIT :limit";
     // <>Preparar a Query atribuindo para uma VAR $resultado_livro'<>
    $resultado_livro = $conn->prepare($result_livro);
    // <>Vamos substituir o Link RM pela VAR (bindParam(informa que vamos substituir o link pela VAR)) '<>
    // <>PDO STR informa que é uma String'<>
    $resultado_livro->bindParam(':nomeLivro', $nomeLivro, PDO::PARAM_STR);
    // <>O limite como é um número usamos PDO::PARAM_INT'<>
    $resultado_livro->bindParam(':limit', $limit, PDO::PARAM_INT);
    // <>Executamos a Query'<>
    $resultado_livro->execute();

    // <>inicializa o array - como fizemos no script_getRm<>'
    $array_valores = array();
    
    // <>Verifica se encontramos algum resultado no BD, se o resultado for != 0 '<>
    if($resultado_livro->rowCount() != 0){
         // <>Se ele encontrou alguma linha acessa esse desvio de fluxo '<>
        // <>Vamos ler o resultado da VAR $resultado_livro usando "PDO::FETCH_ASSOC"'<>
        // <>E atribuimos o resultado para linha_aluno(row_aluno)'<>
        $row_aluno = $resultado_livro->fetch(PDO::FETCH_ASSOC);
         // <>Aqui imprimo o valor correspondente ao do Banco de Dados<>'
        $array_valores['editoraLivro'] = $row_aluno['editoraLivro'];         
    }else{
        // <>Se ele  não encontrou alguma linha acessa esse desvio de fluxo '<>
        // <>Quando não encontrar valores, na posição do array nomeEditora informar "Editora não encontrado!"'<>
        $array_valores['editoraLivro'] = 'Editora não encontrada!';        
    }
    // <> Retorna o valor do $array_valores '<>
    echo json_encode($array_valores);
}

/* PHP *//* Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)*/

/*<>Código para buscar nome do  Livro e trazer Nome da Editora<>'*/
/*<>Code to get name book and get name publisher <>'*/
