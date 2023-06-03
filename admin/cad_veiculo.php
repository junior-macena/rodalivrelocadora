<?php require('index-admin.php'); ?>
<html class="html_cad_veiculo">

<body>
    <form id="form_cadastrar" name="form_cadastrar" class="form_cadastrar" method="post" action="salvar.php" enctype="multipart/form-data">

        <div>
            <h1>CADASTRAR CARRO</h1><br><br><br>
        </div>

        <div class="agrupamento_cadastrar">

            <div>
                <div class="label"><label>Ano do veículo</label> </div>
                <div><input type="number" id="ano_veiculo" name="ano_veiculo" min="1900" max="2099" step="1" required placeholder="Ano"><br> </div><br>

                <div class="label"><label>Descrição do veículo</label></div><br>
                <textarea name="descricao" id="descricao" cols="30" rows="10" required></textarea><br><br>

                <div class="label"><label>Marca</label></div>
                <div><input type="text" name="marca" id="marca" required placeholder="Marca"></div><br>

                <div class="label"><label>Modelo</label></div>
                <div><input type="text" name="modelo" id="modelo" required placeholder="Modelo"></div><br><br>

                <div class="label"><label>Preço</label></div>
                <div>R$<input type="text" name="preco_veiculo" id="preco_veiculo" required placeholder="Preço" oninput="formatarDecimal(this)"></div><br><br>

                <div class="label"><label>Imagem do veículo</label></div>
                <div><input type="file" name="img_veiculo" id="img_veiculo"></div><br><br>


                <div><input type="submit" id="btn_entrarvei" name="btn_entrarvei" value="Cadastrar"></div>

            </div>
        </div>
    </form>
    <script type="text/javascript" src="http://localhost/rodalivre2023/js/main.js"></script>
</body>

</html>