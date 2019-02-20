<?php
include_once("conecta.php");

$result = "SELECT * FROM livros ";
$resultado = mysqli_query($conn, $result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Consulta de Livros - Biblioteca</title>

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
	<script type="text/javascript" src="../js/script_GetDataBooks.js"></script>

	<!-- <>Sweet Alert - para notificações do site<>' -->
	<!-- <>Sweet Alert - to alert <>'-->
	<script type="text/javascript" src="../js/sweetalert2.all.js"></script>

	<!-- <>Estilo em Css para arrumar a posição das mensagens obrigátorias, da validação de campos (script_validate.js)<>' -->
	<!-- <>Style in Css to sort the position of mandatory messages, fields validation (script_validate.js)<>' -->
	<style> #nomeLivro-error, #autorLivro-error, #edicaoLivro-error, #ibsnLivro-error, #publicacaoLivro-error, 
	#categoriaLivro-error, #estoque-error, #editoraLivro-error{
		font-size: 12px;
		position: absolute;
		color: red;
		text-align: center;
		width: 450px;			
		right: 205px;		
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
	<div class="posicaoForm" id="formConsulta">
		<fieldset class="fieldForm" id="fieldConsultaAluno">
			<legend>
				<div class="Busca">
					<form class="pesquisa">
						<input type="search" name="nomeLivro" placeholder="Pesquisar..." class="pesquisar">
					</form>
				</div>	
			</legend>					
			<h3>Consulta de Livros</h3>
			<div class="itensForm">
				<div class="fotoCadastro">
					<img src="../images/livros.png">
					<a href=""><input type="file" name=""></a>
				</div>					
				<form class="formulario" id="formularioCadLivro" method="post" action="">							
					<p>Id:</p>
					<input type="text" name="idlivro" size="" placeholder="Id não pode ser Alterado">

					<p>Livro:</p>
					<input type="text" name="nomeLivro" size="35" placeholder="Nome do Livro">

					<p>Autor:</p>
					<input type="text" name="autorLivro" size="35" placeholder="Nome(s) do(s) Autor(es)">

					<p>Editora:</p>
					<input type="text" name="editoraLivro" size="35" placeholder="Nome(s) da(s) editora(s)">

					<p>Edição</p>
					<select name="edicaoLivro">	
						<option value="">selecione...</option>									 		
						<option>1° Edição</option>
						<option>2° Edição</option>
						<option>3° Edição</option>
						<option>4° Edição</option>
						<option>5° Edição</option>
						<option>6° Edição</option>
						<option>7° Edição</option>
						<option>8° Edição</option>
						<option>9° Edição</option>
						<option>10° Edição</option>
						<option>11° Edição</option>
						<option>12° Edição</option>
						<option>12° Edição</option>
						<option>13° Edição</option>
						<option>14° Edição</option>
						<option>15° Edição</option>
						<option>16° Edição</option>
						<option>17° Edição</option>
						<option>18° Edição</option>
						<option>19° Edição</option>
						<option>20° Edição</option>
						<option>21° Edição</option>
						<option>22° Edição</option>
						<option>23° Edição</option>
						<option>24° Edição</option>
						<option>25° Edição</option>
						<option>26° Edição</option>
						<option>27° Edição</option>
						<option>28° Edição</option>
						<option>29° Edição</option>
						<option>30° Edição</option>								
						<option>acima da 30° Edição</option>
					</select>																
					<p>Categ.:</p>
					<select name="categoriaLivro">		
						<option value="">selecione...</option>
						<option>Tecnologia</option>
						<option>Medicina</option>
						<option>Gastronomia</option>
						<option>Nutrição</option>
						<option>Seg. Trabalho</option>
						<option>Artes</option>
						<option>Biografias</option>
						<option>Contos</option>
						<option>L. Brasileira</option>
						<option>L. Estrangeira</option>
						<option>Ficção</option>
						<option>Romance</option>
						<option>Religião</option>
						<option>Outro Assunto</option>								
					</select>																			
					<p>ISBN:</p>
					<input type="text" name="isbnLivro" size="15">

					<p>Public.:</p>
					<input type="text" name="publicacaoLivro" placeholder="AAAA-MM-DD" size="10">

					<p  class="">Estoque:</p>
					<select name="estoqueLivro" id ="estoque">
						<option value="">selecione...</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
						<option>16</option>
						<option>17</option>
						<option>18</option>
						<option>19</option>
						<option>20</option>
						<option>21</option>
						<option>22</option>
						<option>23</option>
						<option>24</option>
						<option>25</option>
						<option>26</option>
						<option>27</option>
						<option>28</option>
						<option>29</option>
						<option>30</option>
						<option value="">+ de 30</option>
					</select>		
					<div class="botoes" id="botoesConsultaEmp" >

						<input type="reset" name="voltar" value="Limpar">

						<input type="submit" id="btnCad" name="cadastrar" value="Editar" onclick=" verificaCampo2()">					
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

if (isset ($_POST['nomeLivro']) && !empty($_POST['nomeLivro'])) {

	$id  	 	= mysqli_real_escape_string($conn, $_POST['idlivro']);
	$nome   	= mysqli_real_escape_string($conn, $_POST['nomeLivro']);
	$autor 		= mysqli_real_escape_string($conn, $_POST['autorLivro']);
	$editora 	= mysqli_real_escape_string($conn, $_POST['editoraLivro']);
	$edicao  	= mysqli_real_escape_string($conn, $_POST['edicaoLivro']);
	$isbn  		= mysqli_real_escape_string($conn, $_POST['isbnLivro']);
	$publicacao	= mysqli_real_escape_string($conn, $_POST['publicacaoLivro']);
	$categoria 	= mysqli_real_escape_string($conn, $_POST['categoriaLivro']);
	$estoque 	= mysqli_real_escape_string($conn, $_POST['estoqueLivro']);

	$result = "UPDATE livros SET

	nomeLivro	 	= '$nome',
	autorLivro 		= '$autor',
	editoraLivro 	= '$editora',
	edicaoLivro 	= '$edicao',
	isbnLivro 		= '$isbn',
	publicacaoLivro	= '$publicacao',
	categoriaLivro	= '$categoria',
	estoqueLivro	= '$estoque'

	WHERE idlivro 	= '$id'";
	
	$resultado = mysqli_query($conn, $result);	

	echo "<script> window.location = '../php/pageQueryUsers.php</script>";

	echo "<script>swal('Boa!', 'Alterado com Sucesso!', 'success');</script>";	
}
?>