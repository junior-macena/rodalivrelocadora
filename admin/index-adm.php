<?php require('protectadmin.php'); ?>

<html>

<body>

    <form id="form_curso" name="form_curso" method="post" action="salvar.php" class="form_curso">

        <div>
            <h1>CADASTRAR CURSO</h1>
        </div>

        <div class="agrupamento_curso">

            <div>
                <div><label>Nome do curso</label></div>

                <div><input type="text" id="nome_curso" name="nome_curso" required autofocus></div>

            </div>


        </div>

        <div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

    </form>
    <a href="../logout.php">Sair</a>

</body>