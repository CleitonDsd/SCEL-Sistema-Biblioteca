<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuários - Biblioteca</title>
	<meta charset="utf-8">
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
	
	<script type="text/javascript" src="../js/jquery.mask.min.js"></script>
	<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../js/additional-methods.min.js"></script>
	<script type="text/javascript" src="../js/messages_pt_BR.js"></script>
	

	<!-- <>scripts de validação, confirmação de cadastro, máscara de campos, janela de confirmação<>' -->
	<!-- <>validation scripts, registration confirmation, fields mask, window confirmation<>' -->
	<script type="text/javascript" src="../js/script_validate.js"></script>
	<script type="text/javascript" src="../js/script_confirmRegister.js"></script>
	<script type="text/javascript" src="../js/script_maskField.js"></script>
	<script type="text/javascript" src="../js/script_functionsToForm.js"></script>

	<!-- <>Sweet Alert - para notificações do site<>' -->
	<!-- <>Sweet Alert - to alert <>'-->
	<script type="text/javascript" src="../js/sweetalert2.all.js"></script>

	<!-- <>Estilo em Css para arrumar a posição das mensagens obrigátorias, da validação de campos (script_validate.js)<>' -->
	<!-- <>Style in Css to sort the position of mandatory messages, fields validation (script_validate.js)<>' -->
	<style>
	#nomeUsuario-error, #loginUsuario-error{
		position: absolute;
		color: red;
		right: 260px;
		font-size: 15px;
		text-align: center;			
	}
	#emailUsuario-error{
		position: absolute;
		color: red;
		text-align: center;
		width: 350px;
		right: 165px;
	}
	#senhaUsuario-error, #Confirmsenha-error{
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
								window.location = '../php/login.php';			
							}
						})
					};
				</script>			
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
	<div class = "data" > <!-- Script em JS para pegar dd/mm/yyyy - hh:mm:ss -->
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
	<div class="posicaoForm" id="formUsuario">
		<fieldset class="fieldForm" id="fieldUsuario">
			<legend>Usuários</legend>
			<h3>Cadastro de Usuários</h3>
			<div class="itensForm">
				<div class="fotoCadastro">
					<img src="../images/usuario.png">
					<a href=""><input type="file" name=""></a>
				</div>					
				<form id="formCadastroUsuarios" class="formulario" method="post" action="">

					<div class="row">						
						<p>Nome:</p>
						<input type="text" id="nomeUsuario" name="nomeUsuario" size="35" placeholder="ex.: Fulano da Silva">
					</div>

					<div class="row"> 
						<p>E-mail:</p>
						<input type="email" id="emailUsuario" name="emailUsuario" size="35" placeholder="fulano@email">
					</div>

					<div class="row"> 
						<p>Usuário:</p>
						<input type="text" id="loginUsuario" name="loginUsuario" size="35" placeholder="nome do login">
					</div>

					<div class="row"> 
						<p>Função:</p>
						<select name="funcaoUsuario" id="funcaoUsuario" class="funcao">
							<option>selecione...</option>	
							<option>Aluno/Ajudante</option>
							<option>Administrador</option>
							<option>Professor</option>
							<option>Outro</option>
						</select>
					</div>	

					<div class="row">	
						<p>Senha:</p>
						<input type="password" id="senhaUsuario" name="senhaUsuario" size="13" placeholder="*******">			
					</div>		
					<br>
					<div class="row">
						<input type="password" id="Confirmsenha" name="senhaUsuario" size="13" placeholder="repita a senha">
					</div>					

					<div class="row"> 
						<p>Obs.:</p>
						<textarea id="observacaoUsuario" name="observacaoUsuario" placeholder="Escreva alguma observação"></textarea>
					</div>		

					<div class="botoes" id="botoesUsuario" >
						<input type="reset" name="voltar" value="Limpar">
						<input type="submit" id="btnCad" name="cadastrar" value="Cadastrar" onclick=" verificaCampo3()">					
						<button id="botoesUsuario"><a href="">Voltar</a></button>							
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

	// <>Arquivo de conexão com o banco de dados<>'
	// <>File to connect in database<>'
require 'config.php';

if (isset ($_POST['nomeUsuario']) && !empty($_POST['nomeUsuario'])) {

	/*aqui eu pego os dados que o usuario digitou la no meu formulario*/  
	$nome 	 	= addslashes($_POST['nomeUsuario']);
	$email 	  	= addslashes($_POST['emailUsuario']);
	$login  	= addslashes($_POST['loginUsuario']);
	$funcao  	= addslashes($_POST['funcaoUsuario']);    
	$senha  	= addslashes(md5(($_POST['senhaUsuario'])));
	$observacao = addslashes($_POST['observacaoUsuario']);
	

	/*aqui eu monto a query*/
	$sql ="INSERT INTO usuarios SET

	nomeUsuario 		= '$nome', 
	emailUsuario	    = '$email', 
	loginUsuario 		= '$login',
	funcaoUsuario	    = '$funcao', 
	senhaUsuario    	= '$senha', 	
	observacaoUsuario	= '$observacao'"; 
	

	/*aqui eu executo a query*/
	$pdo->query($sql); /*posso usar a variavel $pdo sem declarar porque ela foi declarada em config.php*/


	echo "<script> window.location = '../php/formRegisterBooks.php</script>";

	echo "<script>swal('Boa!', 'Cadastrado com Sucesso!', 'success');</script>";	
	
}
?>
