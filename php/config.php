
<?php
	$dns = "mysql:dbname=biblioteca;host=localhost";
	$dbuser = "root";
	$dbpass = "37844460";

	try{
		$pdo = new PDO($dns, $dbuser, $dbpass);
	} catch (PDOExcepton $e){
		echo "A conexao falhou!"."<br>".$e->getMessage();
	}

?>
