<?php

//Credenciais de acesso ao BD - usado para pesquisa
	 define('HOST', 'localhost');
	 define('USER', 'root');
	 define('PASS', '37844460');
	 define('DBNAME', 'biblioteca');

	 $conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
  ?>