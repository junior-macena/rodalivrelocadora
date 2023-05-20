<?php
require('protectadmin.php');
require('../conexao.php');

$cod_veiculo = $_GET['cod_veiculo'];

$delete_veiculo = "DELETE FROM veiculo WHERE cod_veiculo = $cod_veiculo";

if (mysqli_query($mysqli, $delete_veiculo)) {
    mysqli_close($mysqli);
    echo "<script> alert('VEÍCULO EXCLUÍDO COM SUCESSO!'); </script>";
    echo "<script> window.location.href='http://localhost/rodalivre2023/admin/exibir.php'; </script>";
} else {
    echo "<script> alert('ERRO: NÃO FOI POSSÍVEL EXCLUIR O VEÍCULO.'); </script>";
    echo "<script> window.location.href='http://localhost/rodalivre2023/admin/index-adm.php'; </script>";
    mysqli_close($mysqli);
}
?>