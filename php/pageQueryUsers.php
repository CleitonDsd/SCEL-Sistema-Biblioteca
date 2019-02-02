<?php
include_once("conecta.php");

$result = "SELECT * FROM usuarios ";
$resultado = mysqli_query($conn, $result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Consulta de Usuários - Biblioteca</title>

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
	
	<!-- <>Script para mascáras dos inputs, validações... E mensagens em portugues'<>	 -->
	<script type="text/javascript" src="../js/jquery.mask.min.js"></script>
	<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../js/additional-methods.min.js"></script>
	<script type="text/javascript" src="../js/messages_pt_BR.js"></script>	

	<!-- <>scripts de validação, confirmação de cadastro, máscara de campos, janela de confirmação<>' -->
	<!-- <>validation scripts, registration confirmation, fields mask, window confirmation<>' -->
	<script type="text/javascript" src="../js/script_validate.js"></script>	
	<script type="text/javascript" src="../js/script_maskField.js"></script>
	<script type="text/javascript" src="../js/script_functionsToForm.js"></script>
	
	<!-- <>Script para pegar os dados dos alunos nos inputs e fazer pesquisa sem refresh'<> -->
	<!-- <>Script to get students' data in inputs and do research without refresh'<> -->
	<script type="text/javascript" src="../js/script_GetDataUsers.js"></script>

	<!-- <>Sweet Alert - para notificações do site<>' -->
	<!-- <>Sweet Alert - to alert <>'-->
	<script type="text/javascript" src="../js/sweetalert2.all.js"></script>

	<!-- <>Estilo em Css para arrumar a posição das mensagens obrigátorias, da validação de campos (script_validate.js)<>' -->
	<!-- <>Style in Css to sort the position of mandatory messages, fields validation (script_validate.js)<>' -->
	<style>
	#nomeUsuario-error, #loginUsuario-error, #emailUsuario-error, #funcaoUsuario-error{
		font-size: 12px;
		position: absolute;
		color: red;
		text-align: center;
		width: 450px;			
		right: 205px;			
	}	
	#senhaUsuario-error, #Confirmsenha-error{
		font-size: 12px;
		position: relative;
		color: red;
		text-align: center;
		width: 350px;
		top: -35px;
		left: 80px;
	}
</style>
<!-- <>Estilo em Css para editar os botões de confirmação do Sweet Alert2<>' -->
<!-- <>Style in Css to edit the confirmation buttons of the Sweet Alert2<>' -->
<style type="text/css">

/*<>Para arrumar a largura dos botões<>'*/
/*<>To adjust the width of the buttons<>'*/
.swal2-cancel, .swal2-confirm{
	position: relative;
	top: 0px;
	text-align: center;
	width: 150px;
	height: 50px;
}
/*<>Para alinhar os botões do pop-up<>'*/
/*<>To align the pop-up buttons<>'*/
.swal2-actions{
	position: relative;
	right: 85px;
}
</style>	
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
	<div class="posicaoForm " id="formConsulta">
		<fieldset class="fieldForm" id="fieldUsuario">
			<legend>
				<div class="Busca">
					<form class="pesquisa">
						<input type="search" name="emailUsuario" placeholder="Pesquisar..." class="pesquisar">
					</form>
				</div>	
			</legend>					
			<h3>Consulta de Usuários</h3>
			<div class="itensForm">
				<div class="fotoCadastro">
					<img src="../images/aluno.png">
					<a href=""><input type="file"></a>
				</div>					
				<form class="formulario" id="formCadastroUsuarios" method="post" action="">						
					<div class="row">
						<p>Id:</p>
						<input type="text" name="idlLogin" size="5" placeholder="Id " maxlength="100">
					</div>

					<div class="row">
						<p>Nome:</p>
						<input type="text" name="nomeUsuario" size="35" placeholder="Fulano da Silva" maxlength="100">
					</div>	

					<div class="row">
						<p>E-mail:</p>
						<input type="email" name="emailUsuario" size="35" placeholder="fulano@email" maxlength="100">
					</div>	

					<div class="row">
						<p>Usuário:</p>
						<input type="text" name="loginUsuario" size="35" placeholder="nome de usuário" maxlength="100">
					</div>	

					<div class="row">
						<p>Função:</p>
						<select name="funcaoUsuario">										
							<option value="">selecione...</option>	
							<option>Aluno/Ajudante</option>
							<option>Administrador</option>
							<option>Professor</option>
							<option>Outro</option>
						</select>																					
					</div>	

					<div class="row">
						<p>Senha:</p>
						<input type="password" name="senhaUsuario" size="" placeholder="*******" maxlength="30">	
					</div>	

					<div class="row">		
						<p></p>
						<input type="password" name="senhaUsuario" size="" placeholder="repita a senha" maxlength="30">
					</div>	

					<div class="row">
						<p>Obs.:</p>
						<textarea name="observacaoUsuario" placeholder="Escreva alguma observação"></textarea>	
					</div>	

					<div class="botoes" id="botoesConsultaEmpL" >

						<input type="reset" name="voltar" value="Limpar">

						<input type="submit" id="btnCad" name="cadastrar" value="Editar" onclick=" verificaCampo3()">					
						<button  id="btnVoltar" onclick="desejaVoltar()">Voltar</button>											
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

// if (empty(($_POST['emailAluno']))){

// 	echo "<script>swal('Ops...','Verifique se os campos estão preenchidos','warning')</script>";
// 	die();
// }

if (isset ($_POST['nomeUsuario']) && !empty($_POST['nomeUsuario'])) {

	$id  	 		= mysqli_real_escape_string($conn, $_POST['idlLogin']);
	$nome   		= mysqli_real_escape_string($conn, $_POST['nomeUsuario']);
	$email 			= mysqli_real_escape_string($conn, $_POST['emailUsuario']);
	$login 			= mysqli_real_escape_string($conn, $_POST['loginUsuario']);
	$funcao  		= mysqli_real_escape_string($conn, $_POST['funcaoUsuario']);
	$senha  		= mysqli_real_escape_string($conn, md5($_POST['senhaUsuario']));
	$observacao 	= mysqli_real_escape_string($conn, $_POST['observacaoUsuario']);

	$result = "UPDATE usuarios SET

	nomeUsuario 		= '$nome',
	emailUsuario	 	= '$email',
	loginUsuario 		= '$login',
	funcaoUsuario 		= '$funcao',
	senhaUsuario 		= '$senha',
	observacaoUsuario	= '$observacao'

	WHERE idlLogin 	= '$id'";
	
	$resultado = mysqli_query($conn, $result);	

	echo "<script> window.location = '../php/pageQueryUsers.php</script>";

	echo "<script>swal('Boa!', 'Alterado com Sucesso!', 'success');</script>";	
}
?>