<?php
	include_once("conecta.php");
	// <>Id do campo hidden, é invisível'<>
	$id  	 	= mysqli_real_escape_string($conn, $_POST['idAluno']);
	$rm   		= mysqli_real_escape_string($conn, $_POST['rmAluno']);
	$nome 		= mysqli_real_escape_string($conn, $_POST['nomeAluno']);
	$email 		= mysqli_real_escape_string($conn, $_POST['emailAluno']);
	$modulo  	= mysqli_real_escape_string($conn, $_POST['moduloAluno']);
	$periodo  	= mysqli_real_escape_string($conn, $_POST['periodoAluno']);
	$curso 	  	= mysqli_real_escape_string($conn, $_POST['cursoAluno']);
	$telefone 	= mysqli_real_escape_string($conn, $_POST['telefoneAluno']);


	 echo "$id - $nome - $rm - $email - $modulo - $periodo - $curso - $telefone";

	 $result_alunos = "UPDATE alunos SET

	  nomeAluno 	= '$nome',
	  rmAluno	 	= '$rm',
	  emailAluno 	= '$email',
	  moduloAluno 	= '$modulo',
	  periodoAluno 	= '$periodo',
	  cursoAluno 	= '$curso',
	  telefoneAluno = '$telefone' 

	  WHERE idAluno = '$id'";
	
	  $resultado_alunos = mysqli_query($conn, $result_alunos);	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/php/Biblioteca_Git/php/pageQueryStudents.php'>
				<script type=\"text/javascript\"> 
					alert(\"Dados do Aluno Alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/php/Biblioteca_Git/php/pageQueryStudents.php'>
				<script type=\"text/javascript\">
					alert(\"O Aluno não teve os Dados Alterado.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>
