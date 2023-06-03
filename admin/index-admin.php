<?php require('protectadmin.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina ADM </title>
    <!-- ARQUIVO DE ESTILOS DO PORTAL -->
    <link rel="stylesheet" type="text/css" href="http://localhost/rodalivre2023/admin/admin.css">
    <script>

        function confirmar_exclusao(cod_veiculo) {

            var resposta = confirm("Deseja continuar com a exclusão?");

            if (resposta == true) {

                window.location.href = "excluir.php?cod_veiculo=" + cod_veiculo;
            }
        }
    </script>
</head>

<body>
    <div class="barra_topo">

        <div class="barra_topo_n1">

            <img src="http://localhost/rodalivre2023/img/logo.png" onclick="window.location.href='index-admin.php'"
                style="cursor: pointer;">

            <div class="nav-logout">
                <div class="user-info">
                    <label>
                        <?php echo "Olá, " . $_SESSION['nome_user']; ?>
                    </label>
                </div>
                <div class="logout-link">
                    <a href="http://localhost/rodalivre2023/logout.php">Sair</a>
                </div>
            </div>
        </div>

        <div class="barra_topo_n2">

            <nav>

                <ul class="menu_admin">

                    <li><a href="#">CARROS</a>

                        <ul>
                            <li><a href="http://localhost/rodalivre2023/admin/cad_veiculo.php">Cadastrar</a></li>
                            <li><a href="http://localhost/rodalivre2023/admin/exibir.php">Exibir</a></li>
                        </ul>

                    </li>

                    <li class="adm-sair"><a href="http://localhost/rodalivre2023/index.php">PAGINA PRINCIPAL DO SITE</a>
                    </li>
                </ul>

            </nav>

        </div>

    </div>

    <h1 style="text-align: center;">PAGINA DO ADMINISTRADOR</h1>

    <?php ?>
</body>

</html>