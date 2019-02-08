<?php		

// Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)'
// <>Relatório do total de alunos'<>

	include_once("conexao.php");

	$html = '<table border=1 cellspacing=0 cellpadding=2';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>Nome</th>';
	$html .= '<th>E-mail </th>';
	$html .= '<th>Login</th>';
	$html .= '<th>Função</th>';
	$html .= '<th>Observação</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';	

	$result = "SELECT * FROM usuarios";
	$resultado = mysqli_query($conn, $result);	
	while($row = mysqli_fetch_assoc($resultado)){
		$html .= '<tr><td>'.$row['idlLogin'] . "</td>";
		$html .= '<td>'.$row['nomeUsuario'] . "</td>";
		$html .= '<td>'.$row['emailUsuario'] . "</td>";
		$html .= '<td>'.$row['loginUsuario'] . "</td>";
		$html .= '<td>'.$row['funcaoUsuario'] . "</td>";
		$html .= '<td>'.$row['observacaoUsuario'] . "</td></tr>";		
	}
	
	$html .= '</tbody>';
	$html .= '</table';
	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('			
			<h1 style="text-align: center;">Biblioteca Uirapuru - Relatório de Usuários</h1>
			<h3>Total de Usuários:   ?=#								</h3>
			<p> ' .date_default_timezone_set('America/Sao_Paulo'). date(' d/m/Y - H:i:s'). '</p>		
			<hr><br>			
			'. $html .'					
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorioTotalAlunos_BibliotecaEtecUirapuru.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>