<?php require('protectadmin.php');
require('../conexao.php');

//VERIFICANDO DADOS PARA ATUALIZAR
if (isset($_POST['cod_veiculo'])) {
    $cod_veiculo = $_POST['cod_veiculo'];
    $ano_veiculo = $_POST['ano_veiculo'];
    $descricao = $_POST['descricao'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];

    $update_veiculo = "UPDATE veiculo SET ano_veiculo = '" . $ano_veiculo . "', descricao = '" . $descricao . "', marca = '" . $marca . "', modelo = '" . $modelo . "' WHERE cod_veiculo = $cod_veiculo";

    if (mysqli_query($mysqli, $update_veiculo)) {
        mysqli_close($mysqli);

        echo "<script> alert ('VEÍCULO ATUALIZADO COM SUCESSO!');</script>";
        echo "<script> window.location.href='http://localhost/rodalivre2023/admin/exibir.php';</script>";
    } else {
        echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR O VEÍCULO.');</script>";
        echo "<script> window.location.href='http://localhost/rodalivre2023/admin/cad_veiculo.php';</script>";
        mysqli_close($mysqli);
    }
} else if (isset($_POST['marca'])) {
    $ano_veiculo = $_POST['ano_veiculo'];
    $descricao = $_POST['descricao'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];

    $insert_veiculo = "INSERT INTO veiculo (ano_veiculo, descricao, marca, modelo) VALUES ('" . $ano_veiculo . "', '" . $descricao . "', '" . $marca . "', '" . $modelo . "')";

    if (mysqli_query($mysqli, $insert_veiculo)) {
        mysqli_close($mysqli);

        echo "<script> alert ('VEÍCULO CADASTRADO COM SUCESSO!');</script>";
        echo "<script> window.location.href='http://localhost/rodalivre2023/admin/exibir.php';</script>";
    } else {
        echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR O VEÍCULO.');</script>";
        echo "<script> window.location.href='http://localhost/rodalivre2023/admin/cad_veiculo.php';</script>";
        mysqli_close($mysqli);
    }
}




?>