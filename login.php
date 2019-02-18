<?php
session_start();
include('conexao.php');
// <>Inclui a conexão com bd'<>

// <>Verifica se o usuário digitou algo nos input'<>
if(empty($_POST['emailUsuario']) || empty($_POST['senhaUsuario'])) {
	header('Location: index.php');
	exit();
}
// <>Caso tenha digitado algo, as duas variaveis recebem a instancia da conxeão, eo que vem do input'<>
$usuario = mysqli_real_escape_string($conexao, $_POST['emailUsuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senhaUsuario']);

// <>Verifica se o usuário digitado é igual ao do banco de dados'<>
$query = "SELECT  nomeUsuario, emailUsuario from usuarios where emailUsuario = '{$usuario}' and senhaUsuario = md5('{$senha}')";

$result = mysqli_query($conexao, $query);
// <>Verifica a quantidade de linhas que a variável result me retornou'<>
$row = mysqli_num_rows($result);

if($row == 1) {
// <>Se o resultado de usuário for igual a 1, redireciona para página desejada'<>	
	$_SESSION['usuario'] = $usuario;
	header('Location: ./html/mainMenu.html');
	exit();
} else {
// <>Senão permanece no login'<>		
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}