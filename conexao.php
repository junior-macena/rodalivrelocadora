<?php
//conexao com o Banco de dados
$host = 'sql107.infinityfree.com';
$usuario = 'if0_34368373';
$senha = 'C62JwRXo4kJm';
$database = 'if0_34368373_locadoradb';

date_default_timezone_set("America/Manaus");

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error) {
	die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}


mysqli_set_charset($mysqli, "utf8");
?>