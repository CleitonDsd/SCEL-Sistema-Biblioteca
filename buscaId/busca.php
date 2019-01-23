<?php

include_once './conecta.php';

$rmAluno = filter_input(INPUT_GET, 'rmAluno', FILTER_SANITIZE_STRING);
if(!empty($rmAluno)){
    
    $limit = 1;
    $result_aluno = "SELECT * FROM alunos WHERE rmAluno =:rmAluno LIMIT :limit";
    
    $resultado_aluno = $conn->prepare($result_aluno);
    $resultado_aluno->bindParam(':rmAluno', $rmAluno, PDO::PARAM_STR);
    $resultado_aluno->bindParam(':limit', $limit, PDO::PARAM_INT);
    $resultado_aluno->execute();
    
    $array_valores = array();
    
    if($resultado_aluno->rowCount() != 0){
        $row_aluno = $resultado_aluno->fetch(PDO::FETCH_ASSOC);
        $array_valores['nomeAluno'] = $row_aluno['nomeAluno'];         
    }else{
        $array_valores['nomeAluno'] = 'Aluno não encontrado';        
    }
    echo json_encode($array_valores);
}