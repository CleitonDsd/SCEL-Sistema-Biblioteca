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
	$html .= '<th>Publicação</th>';
	$html .= '<th>Categoria</th>';
	$html .= '<th>Estoque</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';	

	$result_transacoes = "SELECT * FROM livros";
	$resultado_trasacoes = mysqli_query($conn, $result_transacoes);	
	while($row_transacoes = mysqli_fetch_assoc($resultado_trasacoes)){

		$html .= '<tr><td>'.$row_transacoes['idlivro'] . "</td>";
		$html .= '<td>'.$row_transacoes['nomeLivro'] . "</td>";
		$html .= '<td>'.$row_transacoes['autorLivro'] . "</td>";
		$html .= '<td>'.$row_transacoes['editoraLivro'] . "</td>";
		$html .= '<td>'.$row_transacoes['edicaoLivro'] . "</td>";
		$html .= '<td>'.$row_transacoes['publicacaoLivro'] . "</td>";	
		$html .= '<td>'.$row_transacoes['categoriaLivro'] . "</td>";	
		$html .= '<td>'.$row_transacoes['estoqueLivro'] . "</td></tr>";		
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
		"relatorioTotalLivros_BibliotecaEtecUirapuru.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>