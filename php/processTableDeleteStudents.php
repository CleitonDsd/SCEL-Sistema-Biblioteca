<?php
	include_once("conecta.php");
	// <>Id do campo hidden, é invisível'<>
	
	$id  = filter_input(INPUT_GET, 'idAluno', FILTER_SANITIZE_NUMBER_INT);

	echo "$id";

	if (!empty($id)) {
		
		$result_alunos = "DELETE FROM alunos WHERE idAluno = '$id'";
		
		$resultado_alunos = mysqli_query($conn, $result_alunos);	
	}
?>
<!-- <>Para mostra mensagem de Sucesso ou erro'<> -->
<!-- <>To show message of success or error'<> -->
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/php/Biblioteca_Git/php/tableQueryStudents.php'>
				<script type=\"text/javascript\"> 
					alert(\"Registro de Aluno Excluído com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/php/Biblioteca_Git/php/tableQueryStudents.php'>
				<script type=\"text/javascript\">
					alert(\"Erro ao Excluir Registro de Aluno.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>
