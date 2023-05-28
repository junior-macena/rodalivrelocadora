<?php

//proteger a sessao caso tente acessar as pagians sem estar logado.
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['cpf_user'])){
    include('templates/header.php');
    die("---Você precisa logar para acessar as informações dessa página!---<p><br><br><a href=\"login.php\">Entrar</a></p>");


}


?>

