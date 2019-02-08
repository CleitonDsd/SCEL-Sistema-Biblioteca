<?php		

// Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)'
// <>Relatório do total de livros '<>

	include_once("conexao.php");

	$html = '<table border=1 cellspacing=0 cellpadding=2';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>Nome</th>';
	$html .= '<th>Autor</th>';
	$html .= '<th>Editora</th>';
	$html .= '<th>Edição</th>';
	$html .= '<th>Categoria</th>';
	$html .= '<th>Estoque</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';	

	$result_transacoes = "SELECT * FROM alunos";
	$resultado_trasacoes = mysqli_query($conn, $result_transacoes);	
	while($row_transacoes = mysqli_fetch_assoc($resultado_trasacoes)){
		$html .= '<tr><td>'.$row_transacoes['idAluno'] . "</td>";
		$html .= '<td>'.$row_transacoes['nomeAluno'] . "</td>";
		$html .= '<td>'.$row_transacoes['rmAluno'] . "</td>";
		$html .= '<td>'.$row_transacoes['emailAluno'] . "</td>";
		$html .= '<td>'.$row_transacoes['cursoAluno'] . "</td>";
		$html .= '<td>'.$row_transacoes['periodoAluno'] . "</td>";	
		$html .= '<td>'.$row_transacoes['telefoneAluno'] . "</td></tr>";		
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
			<h1 style="text-align: center;">Biblioteca Uirapuru - Relatório de Livros</h1>
			<h3>Total de Alunos:   								</h3>
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