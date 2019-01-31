<?php
include_once("conecta.php");

$result_alunos = "SELECT * FROM alunos ";
$resultado_alunos = mysqli_query($conn, $result_alunos);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Consulta de Alunos - Biblioteca</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../images/favicon.ico" >
	<link rel="stylesheet" type="text/css" href="../css/styleDefault.css">
	
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/script_GetDataStudents.js"></script>
	<script type="text/javascript" src="../js/sweetalert2.all.js"></script>

</head>
<body>
	<!-- Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter) -->
	<div class="topo" style=""> <!-- parte do topo do site, onde ficaram os menus -->
		<div class="menuu ">
			<ul class="menu ">
				<li>
					<a href="../html/mainMenu.html">Home</a>				
				</li>
				<li>
					<a href="http://www.etecuirapuru.com.br/" target="_blank">Site da Etec</a>
				</li>	
				<li>
					<a href="../html/pageInDevelopment.html">Manual de Uso</a>
				</li>
				<li><a href="../html/menuRegisters.html">Cadastros</a>
					<ul class="sub-menu">
						<!-- cria o sub menu do sub menu--> 
						<li><a href="../php/formRegisterStudents.php">Alunos</a></li>						
						<li><a href="../php/formRegisterLoans.php">Empréstimos</a></li>
						<li><a href="../php/formRegisterBooks.php">Livros</a></li>											
						<li><a href="../php/formRegisterUsers.php">Usuários</a></li>									
					</ul>
				</li>				
				<li><a href="../html/menuQueries.html">Consultas</a>
					<!-- cria o menu--> 	
					<ul class="sub-menu">
						<!-- cria o sub menu--> 
						<li><a href="../php/pageQueryStudents.php">Alunos</a></li>						
						<li><a href="../php/pageQueryLoans.php">Empréstimos</a></li>
						<li><a href="../php/pageQueryBooks.php">Livros</a></li>											
						<li><a href="../php/pageQueryUsers.php">Usuários</a></li>		
					</ul>
				</li>	
				<li><a href="../html/menuReports.html">Relatórios</a>
					<!-- cria o menu--> 	
					<ul class="sub-menu">
						<!-- cria o sub menu--> 
						<li><a href="../html/pageInDevelopment.html">Alunos</a></li>						
						<li><a href="../html/pageInDevelopment.html">Empréstimos</a></li>
						<li><a href="../html/pageInDevelopment.html">Livros</a></li>											
						<li><a href="../html/pageInDevelopment.html">Usuários</a></li>		
					</ul>
				</li>				
				<li>
					<li><a href="../html/menuAbout.html">Sobre</a>
						<!-- cria o menu--> 	
						<ul class="sub-menu">
							<!-- cria o sub menu--> 
							<li><a href="../html/aboutLibrary.html">Biblioteca</a></li>						
							<li><a href="../html/pageInDevelopment.html">Etec</a></li>
							<li><a href="../html/aboutDeveloper.html">Desenvolvedor</a></li>											
							<li><a href="../html/pageInDevelopment.html">Sistema</a></li>									
						</ul>
					</li>
				</li>
				<li>
					<a href="../php/login.php">Sair</a>				
				</li>		
			</div>
		</ul>

		<div class="ConteudoLogo">
			<a href="../html/mainMenu.html"><img src="../images/logoEtecForm.png" id="logoEtecForm"></a> <!-- Logo da Etec -->
			<img src="../images/Login.png" id="fotoUsuario"><br>					
		</div>

		<div class="tituloPrincipal"> <!-- Corresponde a div em que possui o titulo Principal -->
			<h1>Biblioteca</h1>
		</div>							
	</div>
</div>
<div class="margem">				
	<div class = "data verde" > <!-- Script em JS para pegar dd/mm/yyyy - hh:mm:ss -->
		<script> 
			var data  = new Date()
			var dias  = data.getDay()
			var mes  = data.getMonth()
			var ano   = data.getFullYear()
			var meses = new Array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho',
				'Agosto','Setembro','Outubro','Novembro','Dezembro');
			var diaSemana = new Array(
				'Domingo','Segunda Feira','Terça Feira','Quarta Feira','Quinta Feira','Sexta Feira','Sábado');
			var hoje = data.getDate();
			var hora = data.getHours();
			var min  = data.getMinutes();
			var sec  = data.getSeconds(); 
			var strHora = hora + ':' + min + ':' + sec;
			var strData  = diaSemana[dias] + ", " + hoje + " de " + meses[mes] + " de " + ano + ", " + strHora
			document.write(strData)
		</script>			
	</div>										
	<div class="posicaoForm" id="formConsulta">
		<fieldset class="fieldForm" id="fieldConsultaAluno">
			<legend>
				<div class="Busca">
					<form class="pesquisa">
						<input type="search" name="rmAluno" placeholder="Pesquisar..." class="pesquisar" name="pesquisa">
					</form>
				</div>	
			</legend>					
			<h3 id="h3Con">Consulta de Alunos</h3>
			<div class="itensForm">
				<div class="fotoCadastro">
					<img src="../images/aluno.png">
					<a href=""><input type="file" name=""></a>
				</div>					
				<form class="formulario" method="post" action="">							
					<div class="row">					
						<p>ID:</p>
						<input type="number" name="idAluno" placeholder="Id não pode ser Alterado">
					</div>
					<div class="row">					
						<p>RM:</p>
						<input type="number" name="rmAluno" id="rmAluno" size="5"  placeholder= "Rm do Aluno"  maxlength="10">
					</div>

					<div class="row">
						<p id="">Nome:</p>
						<input type="text" name="nomeAluno" size="35" placeholder="Fulano da Silva" id="nomeAluno">
					</div>

					<div class="row">
						<p>E-mail:</p>
						<input type="email" name="emailAluno" size="35" placeholder="fulano@email">
					</div>					

					<div class="row">
						<p>Modulo:</p>
						<input  type="text"  name="moduloAluno"  size="20"  maxlength="45">
						<!-- <select name="moduloAluno" >	
							<option>selecione...</option>
							<option>1°</option>
							<option>2°</option>
							<option>3°</option>
							<option>4°</option>
							<option>5°</option>
							<option>6°</option>								
						</select>		 -->					
					</div>

					<div class="row">
						<p>Periodo:</p>
						<input  type="text"  name="periodoAluno"  size="20"  maxlength="45">							
						<!-- <select name="periodoAluno" >	
							<option>selecione...</option>
							<option>ETIM</option>
							<option>Manhã</option>
							<option>Noturno</option>								
						</select>				 -->
					</div>

					<div class="row">
						<p>Curso:</p>
						<input  type="text"  name="cursoAluno"  size="20"  maxlength="45">
						<!-- <select name="cursoAluno" >	
							<option>selecione...</option>
							<option>Administração </option>
							<option>Cozinha</option>
							<option>Nutrição</option>
							<option>Enfermagem</option>
							<option>Informática</option>
							<option>Segurança do Trabalho</option>							
						</select>		 -->

					</div>

					<div class="row">
						<p>Telefone:</p>
						<input type="text"  name="telefoneAluno"  id="telefoneAluno"   size="15"  placeholder="ex.: (xx)x xxxx-xxxx">							
					</div>
					<div class="botoesCon botoes" id="botoesConsulta">
						<button type="voltar" ><a href="">Voltar</a></button>	
						<input type="reset" name="limpar" value="Limpar">											
						<button type="submit"><a href="">Editar</a></button>
					</div>							
				</form> 					
			</fieldset>
		</div>
		<div class="hr">
			<hr>
		</div>
		<div class="rodape preto">					
			<center><p>Cleiton Dsd | Etec Uirapuru</p></center>
			<center><span>Copyright ©2000 -2019 www.etecuirapuru.com.br, TODOS OS DIREITOS RESERVADOS. Todo o conteúdo do site é de propriedade exclusiva da Etec Uirapuru. É vedada qualquer reprodução, total ou parcial, de qualquer elemento sem expressa autorização.A violação de qualquer direito mencionado implicará na responsabilização cível e criminal nos termos da Lei. Etec Uirapuru: São Paulo, SP - SP05570-30, (11) 3782-5376.</center></span><br><p> Desenvolvido por <cite>Cleiton Dias | &copy; Dsd Soluções Tecnológicas </p></cite>
			<center>
				<ul class="social">
					<li>
						<a href="http://www.etecuirapuru.com.br/" title="etec" target="_blank">
							<img src="../images/logoEtec.png" title="Etec" alt="Etec">
						</a>	
					</li>
					<li>
						<a href="https://twitter.com/Cleiton_Dsd" title="twitter" target="_blank">
							<img src="../images/twitter.png" title="Twitter" alt="Twitter">
						</a>	
					</li>

					<li>
						<a href="https://facebook.com/CleitonDsd" title="facebook" target="_blank">
							<img src="../images/facebook.png" title="facebook" alt="facebook">
						</a>	
					</li>
					<li>
						<a href="https://www.youtube.com/channel/UCNPh1Tx4VLyf7rRs6iyBxSA?view_as=subscriber" title="youtube" target="_blank">
							<img src="../images/youtube.png" title="youtube" alt="youtube">
						</a>	
					</li>
					<li>
						<a href="https://www.github.com/CleitonDsd" title="Github" target="_blank">
							<img src="../images/github.png" title="github" alt="github">
						</a>	
					</li>
				</ul>
			</center>				
		</div>				
	</div>
</body>
</html>

<?php 

	include("conecta.php");
	if (isset ($_POST['emailAluno']) && !empty($_POST['emailAluno'])) {

		
		$id  	 	= mysqli_real_escape_string($conn, $_POST['idAluno']);
		$rm   		= mysqli_real_escape_string($conn, $_POST['rmAluno']);
		$nome 		= mysqli_real_escape_string($conn, $_POST['nomeAluno']);
		$email 		= mysqli_real_escape_string($conn, $_POST['emailAluno']);
		$modulo  	= mysqli_real_escape_string($conn, $_POST['moduloAluno']);
		$periodo  	= mysqli_real_escape_string($conn, $_POST['periodoAluno']);
		$curso 	  	= mysqli_real_escape_string($conn, $_POST['cursoAluno']);
		$telefone 	= mysqli_real_escape_string($conn, $_POST['telefoneAluno']);

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

	  	echo "<script> window.location = '../php/pageQueryStudents.php</script>";

		echo "<script>swal('Boa!', 'Alterado com Sucesso!', 'success');</script>";	
	}
 ?>