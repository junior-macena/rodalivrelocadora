<?php
require('protectadmin.php');
require('../conexao.php');
require('index-adm.php');

$cod_veiculo = $_GET['cod_veiculo'];

$select_veiculo = mysqli_query($mysqli, "SELECT * FROM veiculo WHERE cod_veiculo = $cod_veiculo");

if (mysqli_num_rows($select_veiculo) > 0) {
    $dados_veiculo = mysqli_fetch_assoc($select_veiculo);
} else {
    echo "<script> alert ('NÃO EXISTEM VEÍCULOS CADASTRADOS!');</script>";
    echo "<script> window.location.href='http://localhost/rodalivre2023/admin/cad_veiculo.php';</script>";
}
?>

<form id="form_veiculo" name="form_veiculo" method="post" action="salvar.php" class="form_veiculo">
    <div>
        <h1>ATUALIZAR VEÍCULO</h1>
    </div>
    <div class="agrupamento_veiculo">
        <div>
            <div>
                <label>Código</label>
            </div>
            <div>
                <input type="text" id="cod_veiculo" name="cod_veiculo"
                    value="<?php echo $dados_veiculo['cod_veiculo']; ?>" readonly>
            </div>
        </div>
        <div>
            <div>
                <label>Ano do veículo</label>
            </div>
            <div>
                <input type="number" id="ano_veiculo" name="ano_veiculo"
                    value="<?php echo $dados_veiculo['ano_veiculo']; ?>" required>
            </div>
        </div>
        <div>
            <div>
                <label>Descrição</label>
            </div>
            <div>
                <input type="text" id="descricao" name="descricao" value="<?php echo $dados_veiculo['descricao']; ?>"
                    required autofocus>
            </div>
        </div>
        <div>
            <div>
                <label>Marca</label>
            </div>
            <div>
                <input type="text" id="marca" name="marca" value="<?php echo $dados_veiculo['marca']; ?>" required>
            </div>
        </div>
        <div>
            <div>
                <label>Modelo</label>
            </div>
            <div>
                <input type="text" id="modelo" name="modelo" value="<?php echo $dados_veiculo['modelo']; ?>" required>
            </div>
        </div>
    </div>
    <div>
        <input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar">
    </div>
</form>
</body>

</html>