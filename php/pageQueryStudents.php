<!DOCTYPE html>
<html>
<head>
	<title>Consulta de Alunos - Biblioteca</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../images/favicon.ico" >
	<link rel="stylesheet" type="text/css" href="../css/styleDefault.css">
	<link rel="stylesheet" type="text/javascript" href="../js/menuDropDown.js">
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
						<input type="search" placeholder="Pesquisar..." class="pesquisar" name="pesquisa">
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
					<p>Nome:</p>
					<input type="text" name="nome" size="35" placeholder="Fulano da Silva" maxlength="100">

					<p>E-mail:</p>
					<input type="email" name="email" size="35" placeholder="fulano@email" maxlength="100">

					<p>Nasc.:</p>
					<input type="text" name="nasc" size="10" placeholder="dd/mm/aaaa" maxlength="10">

					<p>RM:</p>
					<input type="text" name="rm" size="10" placeholder="" maxlength="10">

					<p>Modulo:</p>
					<select name="modulo">						
						<option value="1 modulo">1° Módulo</option>
						<option value="2 modulo">2° Módulo</option>
						<option value="3 modulo">3° Módulo</option>
						<option value="4 modulo">4° Módulo</option>
						<option value="5 modulo">5° Módulo</option>
						<option value="6 modulo">6° Módulo</option>								
					</select>							

					<p>Periodo:</p>
					<select name="periodo">						
						<option value="etim">ETIM</option>
						<option value="noturno">Noturno</option>								
					</select>														
					<p>Curso:</p>
					<input type="text" name="" size="20" maxlength="45">
					<p>Telefone:</p>
					<input type="text" name="" size="15" placeholder="(xx)x xxxx-xxxx">							
				</div>	
				<div class="botoesCon botoes" id="botoesConsulta">
					<button type="voltar" ><a href="">Voltar</a></button>	
					<input type="reset" name="limpar" value="Limpar">
					<input type="submit" name="cadastrar" value="Consultar">						
					<button type="editar"><a href="">Editar</a></button>
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

  // Aqui eu insiro meu arquivo config, pra nao ter de digitar novamente

require 'config.php';
/*abaixo eu testo para ver se existe o campo com nome POST e ele nao esta vazio...Significa que preencheu e clicou no enviar*/

if (isset ($_POST['nomeAluno']) && !empty($_POST['nomeAluno'])) {

	/*aqui eu pego os dados que o usuario digitou la no meu formulario*/  
	$nome 	  = addslashes($_POST['nomeAluno']);
	$email 	  = addslashes($_POST['emailAluno']);
	$rmAluno  = addslashes($_POST['rmAluno']);
	$modulo   = addslashes($_POST['moduloAluno']);    
	$periodo  = addslashes($_POST['periodoAluno']);
	$curso    = addslashes($_POST['cursoAluno']);
	$telefone = addslashes($_POST['telefoneAluno']);
	$foto 	  = addslashes($_POST['fotoAluno']);

	/*aqui eu monto a query*/
	$sql ="SELECT * FROM alunos WHERE pesquisa = '$rmAluno'";

	// nomeAluno 		= '$nome', 
	// emailAluno	    = '$email', 
	// rmAluno 		= '$rmAluno',
	// moduloAluno	    = '$modulo', 
	// periodoAluno    = '$periodo', 
	// cursoAluno 		= '$curso',
	// telefoneAluno 	= '$telefone'; 
	// fotoAluno  		= '$foto'";

	/*aqui eu executo a query*/
	$pdo->query($sql); /*posso usar a variavel $pdo sem declarar porque ela foi declarada em config.php*/

	/*voltar para a pagina principal*/  
	header("Location:../php/formRegisterStudents.php");
}

?>


