<?php
include_once("conecta.php");

$result_alunos = "SELECT * FROM alunos ";
$resultado_alunos = mysqli_query($conn, $result_alunos);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Registro Geral de Alunos - Biblioteca</title>
	<!-- <>Arquivo Css padrão da página'<> -->
	<!-- <>Standard file to the page'<> -->
	<link rel="stylesheet" type="text/css" href="../css/styleQuery.css">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- <>Para o campo de consuta - Arquivos~Bootstrap'<> -->
	<!-- <>To input search'<> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script> 
	
	<!-- <>Sweet Alert - para notificações do site<>' -->
	<!-- <>Sweet Alert - to alert <>'-->
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

		<div class="tituloPrincipalCon"> <!-- Corresponde a div em que possui o titulo Principal -->
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
	<div class="container theme-showcase" role="main">
		<div class="page-header">
			<style type="text/css">
				h1{ font-family: tahoma; }
			</style>
			<h1>Registro de Emprestimos</h1>			
			<!-- <>Link para o form de consulta'<> -->
			<!-- <>Link to query form'<> -->
			<a href="../php/formRegisterStudents.php">Cadastrar</a> - 
			<a href="../php/pageQueryStudents.php">Realizar consulta filtrada</a>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table" id="table">
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
						<input name="consulta" id="txt_consulta" placeholder="Consultar..." type="text" class="form-control">						
					</div>					
					<thead>						
						<tr id="tr2">
							<th >#</th>
							<th>Nome do Aluno</th>
							<th>RM</th>
							<th>E-Mail</th>
							<th>Ação</th>								
						</tr>
					</thead>
					<tbody>						

						<?php while($rows_alunos = mysqli_fetch_assoc($resultado_alunos)){ ?>
						<tr>
							<td><?php echo $rows_alunos['idAluno']; ?></td>
							<td><?php echo $rows_alunos['nomeAluno']; ?></td>
							<td><?php echo $rows_alunos['rmAluno']; ?></td>
							<td><?php echo $rows_alunos['emailAluno']; ?></td>
							<td>
								<button id="btnsConsultaAltera" type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_alunos['idAluno']; ?>">Visualizar</button>
								<!-- <>Botão de Editar'<> -->
								<button id="btnsConsultaAltera" type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal"

								data-whatever			= "<?php echo $rows_alunos['idAluno']; 	    ?>"
								data-whateverrm			= "<?php echo $rows_alunos['rmAluno']; 	    ?>"
								data-whatevernome		= "<?php echo $rows_alunos['nomeAluno'];     ?>"
								data-whateveremail		= "<?php echo $rows_alunos['emailAluno'];    ?>"
								data-whatevermodulo		= "<?php echo $rows_alunos['moduloAluno'];   ?>"
								data-whateverperiodo	= "<?php echo $rows_alunos['periodoAluno'];  ?>"
								data-whatevercurso		= "<?php echo $rows_alunos['cursoAluno'];    ?>"
								data-whatevertelefone	= "<?php echo $rows_alunos['telefoneAluno']; ?>"

								>Editar</button>
								<style type="text/css">
								#btnsConsultaAltera a{
									color: white;
								}
							</style>
							<button id="btnsConsultaAltera" type="button" class="btn btn-xs btn-danger">
								<a href="../php/processTableDeleteStudents.php">
								Apagar</a></button>
							</td>
						</tr>

						<!--<> Inicio Modal<>' -->
						<div class="modal fade" 
						id="myModal<?php echo $rows_alunos['idAluno']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

						<div class="modal-dialog" role="document">

							<div class="modal-content">

								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title text-center" id="myModalLabel">
										<?php echo $rows_alunos['idAluno']; ?>	-
										<?php echo $rows_alunos['nomeAluno']; ?>						
									</h4>
								</div>

								<div class="modal-body">	
									<div class="form-group">
										<label class="control-label">Id:</label>
										<p><?php echo $rows_alunos['idAluno']; 	  	?></p>
									</div>

									<hr>
									<div class="form-group">
										<label for="message-text" class="control-label">RM:</label>
										<p><?php echo $rows_alunos['rmAluno']; 	  	?></p>
									</div>

									<hr>
									<div class="form-group">
										<label for="recipient-name" class="control-label">Nome:</label>
										<p><?php echo $rows_alunos['nomeAluno'];    ?></p>
									</div>

									<hr>
									<div class="form-group">
										<label for="message-text" class="control-label">E-mail:</label>
										<p><?php echo $rows_alunos['emailAluno'];   ?></p>
									</div>

									<hr>
									<div class="form-group">
										<label for="message-text" class="control-label">Modulo:</label>
										<p><?php echo $rows_alunos['moduloAluno'];  ?></p>
									</div>

									<hr>
									<div class="form-group">
										<label for="message-text" class="control-label">Periodo:</label>
										<p><?php echo $rows_alunos['periodoAluno']; ?></p>
									</div>

									<hr>
									<div class="form-group">
										<label for="message-text" class="control-label">Curso:</label>
										<p><?php echo $rows_alunos['cursoAluno'];   ?></p>
									</div>

									<hr>
									<div class="form-group">
										<label for="message-text" class="control-label">Telefone:</label>
										<p><?php echo $rows_alunos['telefoneAluno'];?></p>
									</div>
									<hr>

								</div>
							</div>
						</div>
					</div>
					<!-- Fim Modal -->
					<?php } ?>


				</tbody>
			</table>
			<script type="text/javascript">
				$(function(){
					$("#table input").keyup(function(){		

						var index = $(this).parent().index();
						var nth = "#table td:nth-child("+(index+1).toString()+")";
						var valor = $(this).val().toUpperCase();
						$("#table tbody tr").show();
						$(nth).each(function(){
							if($(this).text().toUpperCase().indexOf(valor) < 0){
								$(this).parent().hide();
							}
						});
					});

					$("#table input").blur(function(){
						$(this).val("");
					});	
				});

			</script>
		</div>
	</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">Aluno</h4>
				</div>
				<div class="modal-body">
					<form method="POST" action="http://localhost/php/Biblioteca_Git/php/processTableQueryStudents.php" enctype="multipart/form-data">

						<div class="form-group">
							<label for="message-text" class="control-label">RM:</label>
							<input name="rmAluno" class="form-control" id="rmAluno"></input>
						</div>

						<div class="form-group">

							<label for="recipient-name" class="control-label">Nome:</label>
							<input name="nomeAluno" type="text" class="form-control" id="recipient-name">

						</div>

						<div class="form-group">

							<label for="message-text" class="control-label">E-mail:</label>
							<input name="emailAluno" type="email" class="form-control" id="emailAluno"></input>

						</div>

						<div class="form-group">

							<label for="message-text" class="control-label">Modulo:</label>
							<!-- <input name="moduloAluno" class="form-control" id="moduloAluno"></input> -->
							<select name="moduloAluno" id="moduloAluno" class="form-control">	
								<option>selecione...</option>
								<option>1°</option>
								<option>2°</option>
								<option>3°</option>
								<option>4°</option>
								<option>5°</option>
								<option>6°</option>								
							</select>

						</div>

						<div class="form-group">

							<label for="message-text" class="control-label">Periodo:</label>
							<!-- <input name="rm" class="form-control" id="detalhes"></input> -->
							<select name="periodoAluno" class="form-control" id="periodoAluno">							
								<option>selecione...</option>
								<option>ETIM</option>
								<option>Manhã</option>
								<option>Noturno</option>
							</select>

						</div>

						<div class="form-group">

							<label for="message-text" class="control-label">Curso:</label>
							<!-- <input name="rm" class="form-control" id="detalhes"></input> -->
							<select name="cursoAluno" class="form-control" id="cursoAluno" >	
								<option>selecione...</option>
								<option>Administração </option>
								<option>Cozinha</option>
								<option>Nutrição</option>
								<option>Enfermagem</option>
								<option>Informática</option>
								<option>Segurança do Trabalho</option>		

							</select>
						</div>

						<div class="form-group">

							<label for="message-text" class="control-label">Telefone:</label>
							<input name="telefoneAluno" type="text" class="form-control" id="telefoneAluno">

						</div>


						<input name="idAluno" type="hidden" class="form-control" id="idAluno" value="">

						<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
						<button type="submit" class="btn btn-danger">Alterar</button>						

					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$('#exampleModal').on('show.bs.modal', function (event) {

			  var button = $(event.relatedTarget) // Button that triggered the modal

			  var recipient 		= button.data('whatever') // Extract info from data-* attributes
			  var recipientrm 		= button.data('whateverrm')
			  var recipientnome 	= button.data('whatevernome')
			  var recipientemail 	= button.data('whateveremail')
			  var recipientmodulo 	= button.data('whatevermodulo')
			  var recipientperiodo 	= button.data('whateverperiodo')
			  var recipientcurso 	= button.data('whatevercurso')
			  var recipienttelefone = button.data('whatevertelefone')
			  

			  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			  var modal = $(this)
			  modal.find('.modal-title').text('ID Aluno: ' + recipient)

			  modal.find('#idAluno').val(recipient)
			  modal.find('#rmAluno').val(recipientrm)
			  modal.find('#recipient-name').val(recipientnome)
			  modal.find('#emailAluno').val(recipientemail)
			  modal.find('#moduloAluno').val(recipientmodulo)
			  modal.find('#periodoAluno').val(recipientperiodo)
			  modal.find('#cursoAluno').val(recipientcurso)
			  modal.find('#telefoneAluno').val(recipienttelefone)
			  

			  
			})
		</script>		
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