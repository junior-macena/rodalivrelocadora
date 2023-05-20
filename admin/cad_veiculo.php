<?php require('index-adm.php'); ?>

<form id="form_veiculo" name="form_veiculo" method="post" action="salvar.php" class="form_veiculo">

    <div>
        <h1>CADASTRAR CARRO</h1>
    </div>

    <div class="agrupamento_veiculo">

        <div>
            <h1>REGISTRAR</h1>

            <div><label>Ano do veículo</label></div>	
            <input type="number" name="ano_veiculo" id="ano_veiculo" min="1900" max="2099" step="1" required><br>
            <div><label>Descrição do veículo</label></div>	
            <input type="text" name="descricao" id="descricao" required><br>
            <div><label>Marca</label></div>	
            <input type="text" name="marca" id="marca" required><br>
            <div><label>Modelo</label></div>	
            <input type="text" name="modelo" id="modelo" required><br>

        </div>

        <div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

</form>

</body>

</html>