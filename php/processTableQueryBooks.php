<?php
	include_once("conecta.php");
	// <>Id do campo hidden, é invisível'<>
	$id  	 	= mysqli_real_escape_string($conn, $_POST['idlivro']);	
	$nome 		= mysqli_real_escape_string($conn, $_POST['nomeLivro']);
	$autor 		= mysqli_real_escape_string($conn, $_POST['autorLivro']);
	$editora  	= mysqli_real_escape_string($conn, $_POST['editoraLivro']);
	$edicao  	= mysqli_real_escape_string($conn, $_POST['edicaoLivro']);
	$isbn 	  	= mysqli_real_escape_string($conn, $_POST['isbnLivro']);
	$publicacao	= mysqli_real_escape_string($conn, $_POST['publicacaoLivro']);
	$categoria	= mysqli_real_escape_string($conn, $_POST['categoriaLivro']);
	$estoque	= mysqli_real_escape_string($conn, $_POST['estoqueLivro']);


	 echo "$id - $nome -  $autor - $editora - $edicao - $isbn - $publicacao - $categoria - $estoque";

 	 $result = "UPDATE livros SET

 	  nomeLivro 		= '$nome',
 	  autorLivro 		= '$autor',
 	  editoraLivro 		= '$editora',
 	  edicaoLivro 		= '$edicao',
 	  isbnLivro 		= '$isbn',
 	  publicacaoLivro 	= '$publicacao', 
 	  categoriaLivro 	= '$categoria',
 	  estoqueLivro 		= '$estoque'

 	  WHERE idlivro 		= '$id'";
	
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
 				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/php/Biblioteca_Git/php/tableQueryBooks.php'>
				<script type=\"text/javascript\"> 
					alert(\"Dados do Livro Alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/php/Biblioteca_Git/php/tableQueryBooks.php'>
				<script type=\"text/javascript\">
					alert(\"O Livro não teve os Dados Alterado.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>
