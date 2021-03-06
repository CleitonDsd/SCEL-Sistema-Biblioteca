<!DOCTYPE html>
<html>
<head>
	<title>Consulta de Empréstimos - Biblioteca</title>
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
					<!--<>Cria o sub menu do sub menu<>`--> 
					<!-- <>Creates the sub-menus<>` -->
					<ul class="sub-menu">
						<li><a href="../php/formRegisterStudents.php">Alunos</a></li>						
						<li><a href="../php/formRegisterLoans.php">Empréstimos</a></li>
						<li><a href="../php/formRegisterBooks.php">Livros</a></li>											
						<li><a href="../php/formRegisterUsers.php">Usuários</a></li>									
					</ul>
				</li>				
				<li><a href="../html/menuQueries.html">Consultas</a>					
					<ul class="sub-menu">					
						<li><a href="../php/tableQueryStudents.php">Alunos</a></li>						
						<li><a href="../php/tableQueryLoans.php">Empréstimos</a></li>
						<li><a href="../php/tableQueryBooks.php">Livros</a></li>											
						<li><a href="../php/tableQueryUsers.php">Usuários</a></li>		
					</ul>
				</li>	
				<li><a href="../html/menuReports.html">Relatórios</a>
					<ul class="sub-menu">
						<li><a target="_blank" href="../pdf/reportTotalStudents.php">Alunos</a></li>						
						<li><a target="_blank" href="../pdf/reportTotalLoans.php">Empréstimos</a></li>
						<li><a target="_blank" href="../pdf/reportTotalBooks.php">Livros</a></li>											
						<li><a target="_blank" href="../pdf/reportTotalUsers.php">Usuários</a></li>		
					</ul>
				</li>				
				<li>
					<li><a href="../html/menuAbout.html">Sobre</a>
						<ul class="sub-menu">
							<li><a href="../html/pageInDevelopment.html">Biblioteca</a></li>													
							<li><a href="../html/aboutDeveloper.html">Desenvolvedor</a></li>											
						</ul>
					</li>
				</li>				
				<button id="menuTopoSair"> Sair </button> 									
				<!-- Script do botão sair  -->
				<script type="text/javascript">
					document.getElementById('menuTopoSair').onclick = function(){
						swal({
							title: 'Você  tem certeza que deseja Sair?',
							text: '!!!',
							type: 'warning',
							showCancelButton: true,
							confirmButtonColor: '#3085d6',
							cancelButtonColor: '#d33',
							confirmButtonText: 'Continuar',
							cancelButtonText: 'Cancelar'
						}).then((result) => {
							if (result.value) {
								window.location = '../logout.php';	
							}
						})
					};
				</script>			
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
	<div class="posicaoForm" id="formEmprestimo">
		<fieldset class="fieldForm" id="fieldEmprestimos">
			<legend>
				<div class="Busca">
					<form class="pesquisa">
						<input type="search" placeholder="Pesquisar..." class="pesquisar">
					</form>
				</div>	
			</legend>					
			<h3 id="">Consulta de Empréstimos</h3>
			<div class="itensForm">
				<div class="fotoCadastro">
					<img src="../images/aluno.png">
					<a href=""><input type="file" name=""></a>
				</div>					
				<form class="formulario" method="post" action="">							
					<p>Data:</p>
					<input type="date" name="nome" size="35" placeholder="Data do Empréstimo" maxlength="100">

					<p>Entrega:</p>
					<input type="date" name="nome" size="35" placeholder="Data do Empréstimo" maxlength="100">	
					<p>Id Livro:</p>
					<input type="text" name="id" size="10" placeholder="id do Livro" maxlength="100">	
					<p>Livro:</p>
					<input type="text" name="livro" size="35" placeholder="Nome do Livro" maxlength="100">		
					<p>RM:</p>
					<input type="text" name="rm" size="10" placeholder="Rm do Aluno" maxlength="10">	
					<p>Aluno:</p>
					<input type="text" name="nome" size="35" placeholder="Nome do Aluno" maxlength="100">					
					<p> Quant.:</p>
					<select name="modulo" class="">						
						<option value="1 modulo">1</option>
						<option value="2 modulo">2</option>
						<option value="3 modulo">3</option>
						<option value="3 modulo">4</option>
						<option value="3 modulo">5</option>																	
					</select>																			

					<p>Obs.:</p>
					<textarea placeholder="Escreva alguma observação"></textarea>
				</div>	
				<div class="botoes" id="botoesConsultaEmp">
					<button type="voltar" ><a href="">Voltar</a></button>	
					<input type="reset" name="limpar" value="Limpar">
					<input type="submit" name="cadastrar" value="Cadastrar">						
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



?>