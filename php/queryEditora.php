<?php

include_once './conecta.php';

$nomeLivro = filter_input(INPUT_GET, 'nomeLivro', FILTER_SANITIZE_STRING);
if(!empty($nomeLivro)){
    
    $limit = 1;
    $result_aluno = "SELECT * FROM livros WHERE nomeLivro =:nomeLivro LIMIT :limit";
    
    $resultado_aluno = $conn->prepare($result_aluno);
    $resultado_aluno->bindParam(':nomeLivro', $nomeLivro, PDO::PARAM_STR);
    $resultado_aluno->bindParam(':limit', $limit, PDO::PARAM_INT);
    $resultado_aluno->execute();
    
    $array_valores = array();
    
    if($resultado_aluno->rowCount() != 0){
        $row_aluno = $resultado_aluno->fetch(PDO::FETCH_ASSOC);
        $array_valores['editoraLivro'] = $row_aluno['editoraLivro'];         
    }else{
        $array_valores['editoraLivro'] = 'Editora não encontrada!';        
    }
    echo json_encode($array_valores);
}

/* PHP *//* Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)*/

/*<>Código para buscar nome do  Livro e trazer Nome da Editora<>'*/
/*<>Code to get name book and get name publisher <>'*/
