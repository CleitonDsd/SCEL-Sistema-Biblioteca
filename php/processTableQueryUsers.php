<?php
	include_once("conecta.php");
	// <>Id do campo hidden, é invisível'<>
	$id  	 	= mysqli_real_escape_string($conn, $_POST['idlLogin']);	
	$nome 		= mysqli_real_escape_string($conn, $_POST['nomeUsuario']);
	$email 		= mysqli_real_escape_string($conn, $_POST['emailUsuario']);
	$login  	= mysqli_real_escape_string($conn, $_POST['loginUsuario']);
	$funcao  	= mysqli_real_escape_string($conn, $_POST['funcaoUsuario']);
	$senha 	  	= mysqli_real_escape_string($conn, md5($_POST['senhaUsuario']));
	$observacao	= mysqli_real_escape_string($conn, $_POST['observacaoUsuario']);


	 echo "$id - $nome -  $email - $login - $funcao - $senha - $observacao";

 	 $result = "UPDATE usuarios SET

 	  nomeUsuario 			= '$nome',
 	  emailUsuario 			= '$email',
 	  loginUsuario 			= '$login',
 	  funcaoUsuario 		= '$funcao',
 	  senhaUsuario 			= '$senha',
 	  observacaoUsuario 	= '$observacao' 

 	  WHERE idlLogin 		= '$id'";
	
 	  $resultado = mysqli_query($conn, $result);	
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
 				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/php/Biblioteca_Git/php/tableQueryUsers.php'>
				<script type=\"text/javascript\"> 
					alert(\"Dados do Usuário Alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/php/Biblioteca_Git/php/tableQueryUsers.php'>
				<script type=\"text/javascript\">
					alert(\"O Usuário não teve os Dados Alterado.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>
