<?php
require('protectadmin.php');
require('../conexao.php');
require('index-admin.php');

$cod_veiculo = $_GET['cod_veiculo'];

$select_veiculo = mysqli_query($mysqli, "SELECT * FROM veiculo WHERE cod_veiculo = $cod_veiculo");

if (mysqli_num_rows($select_veiculo) > 0) {
    $dados_veiculo = mysqli_fetch_assoc($select_veiculo);
} else {
    echo "<script> alert ('NÃO EXISTEM VEÍCULOS CADASTRADOS!');</script>";
    echo "<script> window.location.href='http://localhost/rodalivre2023/admin/cad_veiculo.php';</script>";
}
?>

<form id="form_cadastrar" name="form_cadastrar" method="post" action="salvar.php" class="form_cadastrar"
    enctype="multipart/form-data">
    <div>
        <h1>ATUALIZAR VEÍCULO</h1>
    </div>
    <div class="agrupamento_cadastrar">
            
            <div><label class="label">Código</label></div>
            <div><input type="text" id="cod_veiculo" name="cod_veiculo" value="<?php echo $dados_veiculo['cod_veiculo']; ?>" readonly></div><br>
        
            <div><label class="label">Ano do veículo</label></div>
            <div><input type="number" id="ano_veiculo" name="ano_veiculo" min="1900" max="2099" step="1" value="<?php echo $dados_veiculo['ano_veiculo']; ?>" required></div>
        
        
            <div><label class="label">Descrição</label></div>
            <div><textarea name="descricao" id="descricao" cols="30" rows="10" required><?php echo $dados_veiculo['descricao']; ?></textarea></div><br>
        
            <div><label class="label">Marca</label></div>
            <div><input type="text" id="marca" name="marca" value="<?php echo $dados_veiculo['marca']; ?>" required></div><br>
            
            <div><label class="label">Modelo</label></div>
            <div><input type="text" id="modelo" name="modelo" value="<?php echo $dados_veiculo['modelo']; ?>" required></div><br>
        
            <div><label class="label">Preço</label></div>
            <div><input type="text" id="preco_veiculo" name="preco_veiculo"value="<?php echo $dados_veiculo['preco_veiculo']; ?>" required></div><br>

            <div><label class="label">Imagem do veículo</label></div>
            <div><input type="file" id="img_veiculo" name="img_veiculo" required></div><br><br>

            <div><input type="submit" id="btn_entrarvei" name="btn_entrarvei" value="Salvar"></div>
    </div>
</form>


<script type="text/javascript" src="http://localhost/rodalivre2023/js/main.js"></script>
</body>

</html>