<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '37844460');
define('DB', 'biblioteca');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');