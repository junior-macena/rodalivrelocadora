<?php
require('protectadmin.php');
require('../conexao.php');
require('index-adm.php');

$select_veiculo = mysqli_query($mysqli, "SELECT * FROM veiculo ORDER BY cod_veiculo ASC");

if (mysqli_num_rows($select_veiculo) > 0) {
    $dados_veiculo = mysqli_fetch_assoc($select_veiculo);
} else {
    echo "<script> alert('NÃO EXISTEM VEÍCULOS CADASTRADOS!'); </script>";
    echo "<script> window.location.href='http://localhost/rodalivre2023/admin/cad_veiculo.php'; </script>";
}

?>

<div class="estilo_tabela">
    <div>
        <h1>VEÍCULOS CADASTRADOS</h1>
    </div>

    <table>
        <tr class="tabela_cabecalho">
            <td>CÓDIGO</td>
            <td>ANO</td>
            <td>DESCRIÇÃO</td>
            <td>MARCA</td>
            <td>MODELO</td>
            <td>PREÇO</td>
            <td>IMAGEM</td>
            <td colspan="2">Ação</td>
        </tr>

        <?php
        do {
            ?>

            <tr>
                <td>
                    <?php echo $dados_veiculo['cod_veiculo']; ?>
                </td>
                <td>
                    <?php echo $dados_veiculo['ano_veiculo']; ?>
                </td>
                <td>
                    <?php echo $dados_veiculo['descricao']; ?>
                </td>
                <td>
                    <?php echo $dados_veiculo['marca']; ?>
                </td>
                <td>
                    <?php echo $dados_veiculo['modelo']; ?>
                </td>
                <td>
                    <?php echo $dados_veiculo['preco_veiculo']; ?>
                </td>
                <td>
                    <?php
                    $img_veiculo = $dados_veiculo['img_veiculo'];
                    $caminho_imagem = '../img/uploads/' . $img_veiculo;
                    ?>
                    <img src="<?php echo $caminho_imagem; ?>" alt="Imagem do Veículo" width="100">
                </td>
                <td>
                    <a href="editar.php?cod_veiculo=<?php echo $dados_veiculo['cod_veiculo']; ?>">
                        <img src="../img/editar.png" class="botao_acao" title="Editar">
                    </a>
                </td>
                <td>
                    <a href="javascript:func()"
                        onclick="confirmar_exclusao('<?php echo $dados_veiculo['cod_veiculo']; ?>')">
                        <img src="../img/excluir.png" class="botao_acao" title="Excluir">
                    </a>
                </td>
            </tr>

        <?php } while ($dados_veiculo = mysqli_fetch_assoc($select_veiculo)); ?>

    </table>
</div>

</body>

</html>