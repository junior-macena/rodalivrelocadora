<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://localhost/rodalivre2023/css/main.css">
    <title>Detalhes do Veículo</title>
</head>
    <?php require('templates/header.php'); ?>
<body id="body-exibir" >

    <div class="container">
        <?php
        require('conexao.php');

        // Verifica se o parâmetro "id" está presente na URL
        if (isset($_GET['id'])) {
            // Obtém o código do veículo da URL
            $cod_veiculo = $_GET['id'];

            // Consulta o banco de dados para obter as informações do veículo com base no código
            $query = "SELECT * FROM veiculo WHERE cod_veiculo = $cod_veiculo";
            $result = mysqli_query($mysqli, $query);

            if (mysqli_num_rows($result) > 0) {
                // O veículo foi encontrado, exiba as informações
                $dados_veiculo = mysqli_fetch_assoc($result);
                $ano_veiculo = $dados_veiculo['ano_veiculo'];
                $descricao = $dados_veiculo['descricao'];
                $marca = $dados_veiculo['marca'];
                $modelo = $dados_veiculo['modelo'];
                $preco_veiculo = $dados_veiculo['preco_veiculo'];
                $img_veiculo = $dados_veiculo['img_veiculo'];

                // Exibindo as informações do veículo
                echo "<h1 class='veiculo-titulo'>$marca $modelo</h1>";
                echo "<div class='veiculo-imagem'><img src='img/uploads/$img_veiculo' alt='Imagem do Veículo'></div>";
                echo "<div class='veiculo-info'>";
                echo "<p class='veiculo-ano'>Ano: $ano_veiculo</p>";
                echo "<p class='veiculo-preco'>Preço: <span class='car-price'>R$ $preco_veiculo /mes</span></p>";
                echo "<p class='veiculo-descricao'>Descrição: $descricao</p>";
                echo "</div>";

                echo "<div class='buttons-container'>";
                echo "<button class='btn-alugar' id='btnAlugar'>Alugar</button>";
                echo "</div>";
                

                // Formulário de aluguel
                echo "<form class='aluguel-form' id='aluguelForm' action='alugar_carro.php?id=$cod_veiculo' method='POST'>";
                echo "<label for='cpf_user'>CPF do usuário:</label>";
                echo "<input type='text' name='cpf_user' id='cpf_user' required>";
                echo "<label for='data_inicio'>Data de início:</label>";
                echo "<input type='date' name='data_inicio' id='data_inicio' required>";
                echo "<label for='data_fim'>Data de término:</label>";
                echo "<input type='date' name='data_fim' id='data_fim' required>";
                echo "<input type='submit' value='Alugar' class='btn-alugar' id='submitAlugar'>";
                
                echo "</form>";
            } else {
                // O veículo não foi encontrado, exiba uma mensagem de erro
                echo "Veículo não encontrado.";
            }
        } else {
            // O parâmetro "id" não está presente na URL, exiba uma mensagem de erro
            echo "Código do veículo não fornecido.";
        }
        ?>
        <script>
            // Obter referências aos elementos HTML
            const btnAlugar = document.getElementById('btnAlugar');
            const aluguelForm = document.getElementById('aluguelForm');

            // Ocultar o formulário de aluguel inicialmente
            aluguelForm.style.display = 'none';

            // Adicionar um evento de clique ao botão "Alugar"
            btnAlugar.addEventListener('click', function (event) {
                event.preventDefault();
                aluguelForm.style.display = 'block';
                btnAlugar.style.display = 'none'; // Ocultar o botão "Alugar" após clicar
            });
        </script>
    </div>
</body>

</html>