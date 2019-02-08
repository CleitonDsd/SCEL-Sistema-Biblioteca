<?php		

// Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)'
// <>Relatório do total de alunos'<>

	include_once("conexao.php");

	$html = '<table border=1 cellspacing=0 cellpadding=2';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>Data</th>';
	$html .= '<th>Devolução</th>';
	$html .= '<th>Quantidade </th>';
	$html .= '<th>Observação</th>';
	$html .= '<th>Livro</th>';
	$html .= '<th>Aluno</th>';
	$html .= '<th>Situação</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';	

	$result = "SELECT * FROM emprestimo";
	$resultado = mysqli_query($conn, $result);	
	while($row = mysqli_fetch_assoc($resultado)){
		$html .= '<tr><td>'.$row['idEmprestimo'] . "</td>";
		$html .= '<td>'.$row['dataEmprestimo'] . "</td>";
		$html .= '<td>'.$row['dataDevolucao'] . "</td>";
		$html .= '<td>'.$row['quantidadeRetirada'] . "</td>";
		$html .= '<td>'.$row['observacaoEmprestimo'] . "</td>";
		$html .= '<td>'.$row['livros_idLivro'] . "</td>";	
		$html .= '<td>'.$row['alunos_idAluno'] . "</td></tr>";		
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
			<h1 style="text-align: center;">Biblioteca Uirapuru - Relatório de Empréstimos</h1>
			<h3>Total de Alunos: ?=#  								</h3>
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