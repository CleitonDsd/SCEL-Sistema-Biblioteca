<!DOCTYPE html>
<html>
<head>
	<title>Login Biblioteca</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../images/favicon.ico" >
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/javascript" href="../js/menuDropDown.js">
</head>
<body style="background-image:url(../images/bgi.jpg)">
	<!-- Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleiton_Dsd (twitter) -->
	
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
	<div class="margem">
		<div class="login">
			<form class="form sombra" method="post">				
				<br><center><img src="../images/logoEtecForm.png"></center><br> <!-- Logo da Etec -->				
				<input type="text" name="username" placeholder="Usuário" size="30" maxlength="100"><br><br>
				<input type="password" name="senha" placeholder="Senha" size="30" maxlength="30"><br>
				<a href="" class="esqueceu">Esqueceu a senha?</a><br><br>
				<a href="">
					<input type="button" name="botao" value="Conectar" class = "centralizaBotao" onclick="acesso(this.form)">
				</a>
			</form>
		</div>
		<div class="hr">			
			<hr>
		</div>
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
</div>	
</body>
</html>
<!-- Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleiton_Dsd (twitter) -->
