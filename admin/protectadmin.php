<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['cpf_user'])) {
    session_destroy();
    unset($_SESSION['cpf_user']);
    unset($_SESSION['email_user']);

    echo "<script> alert('ERRO: É NECESSÁRIO FAZER LOGIN'); window.location.href='../login.php';</script>";
    exit;
}

if ($_SESSION['tipo_login'] <> 1) {
    echo "<script> alert('ERRO: VOCÊ NÃO TEM PERMISSÃO PARA ACESSAR ESTA PÁGINA!'); window.location.href='../index.php';</script>";
    exit;
}
?>