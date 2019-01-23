<?php

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '37844460');
define('DBNAME', 'biblioteca');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);


/* PHP *//* Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleitonDsd (twitter)*/

// Conexão utilizada para pegar os Dados do BD