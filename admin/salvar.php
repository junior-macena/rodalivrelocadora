<?php require('protectadmin.php');
require('../conexao.php');

//VERIFICANDO DADOS PARA ATUALIZAR
if (isset($_POST['cod_veiculo'])) {
    $cod_veiculo = $_POST['cod_veiculo'];
    $ano_veiculo = $_POST['ano_veiculo'];
    $descricao = $_POST['descricao'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $preco_veiculo = $_POST['preco_veiculo'];

    $img_veiculo = $_FILES['img_veiculo']['name'];
    $imagem_temp = $_FILES['img_veiculo']['tmp_name'];

    $update_veiculo = "UPDATE veiculo SET ano_veiculo = '" . $ano_veiculo . "', descricao = '" . $descricao . "', marca = '" . $marca . "', 
    modelo = '" . $modelo . "', preco_veiculo = '" . $preco_veiculo . "', img_veiculo = '" . $img_veiculo . "' WHERE cod_veiculo = $cod_veiculo";

    if (mysqli_query($mysqli, $update_veiculo)) {
        mysqli_close($mysqli);

        $destino = '../img/uploads/' . $img_veiculo;
        move_uploaded_file($imagem_temp, $destino);

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
    $preco_veiculo = $_POST['preco_veiculo'];

    $img_veiculo = $_FILES['img_veiculo']['name'];
    $imagem_temp = $_FILES['img_veiculo']['tmp_name'];

    $insert_veiculo = "INSERT INTO veiculo (ano_veiculo, descricao, marca, modelo, preco_veiculo, img_veiculo) 
    VALUES ('" . $ano_veiculo . "', '" . $descricao . "', '" . $marca . "', '" . $modelo . "','" . $preco_veiculo . "', '" . $img_veiculo . "')";

    if (mysqli_query($mysqli, $insert_veiculo)) {
        mysqli_close($mysqli);

        $destino = '../img/uploads/' . $img_veiculo;
        move_uploaded_file($imagem_temp, $destino);

        echo "<script> alert ('VEÍCULO CADASTRADO COM SUCESSO!');</script>";
        echo "<script> window.location.href='http://localhost/rodalivre2023/admin/exibir.php';</script>";
    } else {
        echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR O VEÍCULO.');</script>";
        echo "<script> window.location.href='http://localhost/rodalivre2023/admin/cad_veiculo.php';</script>";
        mysqli_close($mysqli);
    }
}




?>