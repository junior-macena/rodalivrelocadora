<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['cpf_user'])) {

    session_destroy();

    unset($_SESSION['cpf_user']);
    unset($_SESSION['email_user']);

    echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";

    echo "<script> window.location.href='http://localhost/rodalivre2023/login.php';</script>";

}

if ($_SESSION['tipo_login'] <> 1) {

    echo "<script> alert('ERRO: VOCÊ NÃO TEM PERMISSÃO PARA ACESSAR ESTA PÁGINA!');</script>";
    session_destroy();

    unset($_SESSION['cpf_user']);
    unset($_SESSION['email_user']);
    unset($_SESSION['tipo_login']);
    unset($_SESSION['../index.php']);

    echo "<script> window.location.href='http://localhost/rodalivre2023/index.php';</script>";

}

?>