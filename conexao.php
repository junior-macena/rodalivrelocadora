<?php
//conexao com o Banco de dados
	$host = '127.0.0.1';
	$usuario = 'root';
	$senha = '';
	$database = 'locadoradb';
	
	date_default_timezone_set("America/Manaus");
	
	$mysqli = new mysqli($host, $usuario, $senha, $database);

	if($mysqli->error){
		die("Falha ao conectar ao banco de dados: " . $mysqli->error);
	}


?>