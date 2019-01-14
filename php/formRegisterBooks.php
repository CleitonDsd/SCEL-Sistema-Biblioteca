<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Livros - Biblioteca</title>
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
	<div class = "data " > <!-- Script em JS para pegar dd/mm/yyyy - hh:mm:ss -->
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
	<div class="posicaoForm" id="formLivros">
		<fieldset class="fieldForm" id="fieldLivros">
			<legend>Livros</legend>
			<h3>Cadastro de Livros</h3>
			<div class="itensForm">
				<div class="fotoCadastro">
					<img src="../images/livros.png">
					<a href=""><input type="file" name=""></a>
				</div>					
				<form class="formulario" method="post" action="">							
					<p>Livro:</p>
					<input type="text" name="nomeLivro" size="35" placeholder="Nome do Livro" maxlength="150">

					<p>Autor:</p>
					<input type="email" name="autorLivro" size="35" placeholder="Nome(s) do(s) Autor(es)" maxlength="250">

					<p>Editora:</p>
					<input type="text" name="editoraLivro" size="35" placeholder="Nome(s) da(s) editora(s)" maxlength="250">

					<p>Edição</p>
					<select name="edicaoLivro">											 		
						<option value="">1° Edição</option>
						<option value="">2° Edição</option>
						<option value="">3° Edição</option>
						<option value="">4° Edição</option>
						<option value="">5° Edição</option>
						<option value="">6° Edição</option>
						<option value="">7° Edição</option>
						<option value="">8° Edição</option>
						<option value="">9° Edição</option>
						<option value="">10° Edição</option>
						<option value="">11° Edição</option>
						<option value="">12° Edição</option>
						<option value="">12° Edição</option>
						<option value="">13° Edição</option>
						<option value="">14° Edição</option>
						<option value="">15° Edição</option>
						<option value="">16° Edição</option>
						<option value="">17° Edição</option>
						<option value="">18° Edição</option>
						<option value="">19° Edição</option>
						<option value="">20° Edição</option>
						<option value="">21° Edição</option>
						<option value="">22° Edição</option>
						<option value="">23° Edição</option>
						<option value="">24° Edição</option>
						<option value="">25° Edição</option>
						<option value="">26° Edição</option>
						<option value="">27° Edição</option>
						<option value="">28° Edição</option>
						<option value="">29° Edição</option>
						<option value="">30° Edição</option>								
					</select>																
					<p>Categ.:</p>
					<select name="categoriaLivro">											 		
						<option value="">Tecnologia</option>
						<option value="">Medicina</option>
						<option value="">Gastronomia</option>
						<option value="">Nutrição</option>
						<option value="">Seg. Trabalho</option>
						<option value="">Artes</option>
						<option value="">Biografias</option>
						<option value="">Contos</option>
						<option value="">L. Brasileira</option>
						<option value="">L. Estrangeira</option>
						<option value="">Ficção</option>
						<option value="">Romance</option>
						<option value="">Religião</option>
						<option value="">Outro Assunto</option>								
					</select>																			
					<p>ISBN:</p>
					<input type="text" name="isbnLivro" size="10" maxlength="150">

					<p>Public.:</p>
					<input type="date" name="publicacaoLivro" size="10">

					<p  class="">Estoque:</p>
					<select id ="estoqueLivro">
						<option value="">1</option>
						<option value="">2</option>
						<option value="">3</option>
						<option value="">4</option>
						<option value="">5</option>
						<option value="">6</option>
						<option value="">7</option>
						<option value="">8</option>
						<option value="">9</option>
						<option value="">10</option>
						<option value="">11</option>
						<option value="">12</option>
						<option value="">12</option>
						<option value="">13</option>
						<option value="">14</option>
						<option value="">15</option>
						<option value="">16</option>
						<option value="">17</option>
						<option value="">18</option>
						<option value="">19</option>
						<option value="">20</option>
						<option value="">21</option>
						<option value="">22</option>
						<option value="">23</option>
						<option value="">24</option>
						<option value="">25</option>
						<option value="">26</option>
						<option value="">27</option>
						<option value="">28</option>
						<option value="">29</option>
						<option value="">30</option>
						<option value="">+ de 30</option>
					</select>				
				</div>	

				<div class="botoes" id="botoesLivro">
					<input type="reset" name="voltar" value="Limpar">
					<input type="submit" name="cadastrar" value="Cadastrar">
					<button id="botoesLivro"><a href="../html/paginaConstrucao.html">Voltar</a></button>							
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

