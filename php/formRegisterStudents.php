<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Alunos - Biblioteca</title>

	<meta charset="utf-8">

	<link rel="shortcut icon" href="../images/favicon.ico" >

	<!-- <>Link do Arquivo padrão de Css para os Menus<>' -->
	<!-- <>file link to default CSS sheet<>'' -->
	<link rel="stylesheet" type="text/css" href="../css/styleDefault.css">
	
	<!-- <>Link da biblioeteca de temas do Bootstrap, utilizada para confirmar o cadastro<>' -->
	<!-- <>Bootstrap theme library link, used to confirm registration<>' -->
	<link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />

	<!-- <>Arquivos das bibliotecas utilizadas para os Scripts'<> -->
	<!-- <>Library Files Used for Scripts'<> -->
	<script type="text/javascript" src="../js/bootstrap.min.js"></script> 
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap-notify.min.js"></script>
	<script type="text/javascript" src="../js/jquery.mask.min.js"></script>
	<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../js/additional-methods.min.js"></script>
	<script type="text/javascript" src="../js/messages_pt_BR.js"></script>

	<!-- <>scripts de validação, confirmação de cadastro, máscara de campos, janela de confirmação<>' -->
	<!-- <>validation scripts, registration confirmation, fields mask, window confirmation<>' -->
	<script type="text/javascript" src="../js/script_validate.js"></script>
	<script type="text/javascript" src="../js/script_confirmRegister.js"></script>
	<script type="text/javascript" src="../js/script_maskField.js"></script>
	<script type="text/javascript" src="../js/buttonConfirm.js"></script>

	<!-- <>Estilo em Css para arrumar a posição das mensagens obrigátorias, da validação de campos (script_validate.js)<>' -->
	<!-- <>Style in Css to sort the position of mandatory messages, fields validation (script_validate.js)<>' -->
	<style> #nomeAluno-error, #rmAluno-error, #moduloAluno-error, #periodoAluno-error, #cursoAluno-error, #telefoneAluno-error {
		position: absolute;
		color: red;
		right: 260px;
		font-size: 15px;
		text-align: center;			
	}
	#emailAluno-error{
		position: absolute;
		color: red;
		text-align: center;
		width: 350px;
		right: 165px;
	}
</style>
<!-- <>Estilo em Css para editar o balão de mensagem exibindo sucesso ao cadastrar, pois o arquivo do "bootstrap_theme" estava desorganizando minha página<>' -->
<!-- <>Style in Css to edit the message balloon showing success at registration, because the "bootstrap_theme" file was messing up my page<>' -->
<style type="text/css">

.alert-success{
	
	text-align: center;
	border-radius: 10px;
	border-style: groove;
	border-width: 2px;
	border-color: black;
	font-family: times new roman;

}
.alert-success button{
	position: relative;
	left: 250px;
	width: 30px;
	background-color: tomato;


}
</style>
</head>
<body>
	<!-- Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter) -->
	<!-- parte do topo do site, onde ficaram os menus -->
	<!-- <>top of site, location of menus <>`-->
	<div class="topo" style=""> 
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
						<li><a href="../php/pageQueryStudents.php">Alunos</a></li>						
						<li><a href="../php/pageQueryLoans.php">Empréstimos</a></li>
						<li><a href="../php/pageQueryBooks.php">Livros</a></li>											
						<li><a href="../php/pageQueryUsers.php">Usuários</a></li>		
					</ul>
				</li>	
				<li><a href="../html/menuReports.html">Relatórios</a>
					<ul class="sub-menu">
						<li><a href="../html/pageInDevelopment.html">Alunos</a></li>						
						<li><a href="../html/pageInDevelopment.html">Empréstimos</a></li>
						<li><a href="../html/pageInDevelopment.html">Livros</a></li>											
						<li><a href="../html/pageInDevelopment.html">Usuários</a></li>		
					</ul>
				</li>				
				<li>
					<li><a href="../html/menuAbout.html">Sobre</a>
						<ul class="sub-menu">
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
			<!-- Logo da Etec -->
			<!-- Etec Image -->
			<a href="../html/mainMenu.html"><img src="../images/logoEtecForm.png" id="logoEtecForm"></a>
			<img src="../images/Login.png" id="fotoUsuario"><br>					
		</div>
		<!-- <>Corresponde a div em que possui o titulo Principal<>` -->
		<!-- <>Div of main title<>` -->
		<div class="tituloPrincipal"> 
			<h1>Biblioteca</h1>
		</div>							
	</div>
</div>
<div class="margem">			
	<!--<> Script em JS para pegar dd/mm/yyyy - hh:mm:ss <>`-->	 
	<!-- <>Script em JS to Get Date Time<>` -->
	<div class = "data " >
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
	<!-- <>Div da Poscição do Formulário<>`	 -->														
	<!-- <>Div of form position<>` -->
	<div class="posicaoForm">
		<fieldset class="fieldForm">
			<legend>Alunos</legend>
			<h3>Cadastro de Alunos</h3>
			<div class="itensForm">
				<div class="fotoCadastro">
					<img src="../images/aluno.png">
					<a href=""><input type="file" name="fotoAluno" ></a>
				</div>					
				<form class="formulario" method="POST" action="" name="formulario" id="formCadastro" onsubmit="return confirmar()">	
					<div class="row">
						<p id="">Nome:</p>
						<input type="text" name="nomeAluno" size="35" placeholder="Fulano da Silva">
					</div>

					<div class="row">
						<p>E-mail:</p>
						<input type="email" name="emailAluno" size="35" placeholder="fulano@email">
					</div>

					<div class="row">
						<p>RM:</p>
						<input type="number" name="rmAluno" size="10"  placeholder=""  maxlength="10">
					</div>

					<div class="row">
						<p>Modulo:</p>
						<select name="moduloAluno" >	
							<option value="">selecione...</option>
							<option value="1°">1°</option>
							<option value="2°">2°</option>
							<option value="3°">3°</option>
							<option value="4°">4°</option>
							<option value="5°">5°</option>
							<option value="6°">6°</option>								
						</select>							
					</div>

					<div class="row">
						<p>Periodo:</p>
						<select name="periodoAluno" >	
							<option value="">selecione...</option>					
							<option value="etim">ETIM</option>
							<option value="noturno">Noturno</option>								
						</select>				
					</div>

					<div class="row">
						<p>Curso:</p>
						<input  type="text"  name="cursoAluno"  size="20"  maxlength="45">

					</div>

					<div class="row">
						<p>Telefone:</p>
						<input type="text"  name="telefoneAluno"  id="telefoneAluno"   size="15"  placeholder="ex.: (xx)x xxxx-xxxx">							
					</div>
					<div class="botoes">												
						<input type="reset" name="voltar" value="Limpar">
						<input type="submit" name="cadastrar" onclick="return validar()" value="Cadastrar">
						<button onclick="confirmarVoltar()" id="btnVoltar"><a href="../html/menuRegisters.html">Voltar</a></button>							
					</div>									
				</form> 					
			</fieldset>
		</div>	
		<div class="hr">
			<hr>
		</div>
		<!-- <>Rodapé do Site contendo direitos autorais e redes para contato com o desenvolvedor<>' -->
		<!-- <>Site footer containing copyrights and networks for contact with the developer<>' -->
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
	</div> -->
</div>
</body>
</html>

<?php

// <>Arquivo de conexão com o banco de dados<>'
// <>File to connect in database<>'
require 'config.php';

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
	$sql ="INSERT INTO alunos SET

	nomeAluno 		= '$nome', 
	emailAluno	    = '$email', 
	rmAluno 		= '$rmAluno',
	moduloAluno	    = '$modulo', 
	periodoAluno    = '$periodo', 
	cursoAluno 		= '$curso',
	telefoneAluno 	= '$telefone'; 
	fotoAluno  		= '$foto'";

	/*aqui eu executo a query*/
	$pdo->query($sql); /*posso usar a variavel $pdo sem declarar porque ela foi declarada em config.php*/

	/*Continua na página*/ 
	// <>Continue in page<>' 
	header("Location:../php/formRegisterStudents.php");
}

?>


