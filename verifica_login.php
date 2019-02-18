<?php
session_start();
// <>Se a sessão do usuário não existir redirecionar para o login'<>
if(!$_SESSION['usuario']) {
	header('Location: index.php');
	exit();
}