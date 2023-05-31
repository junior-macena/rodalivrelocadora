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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

    <title>Detalhes do Veículo</title>
</head>
<?php require('templates/header.php'); ?>

<body id="body-exibir">

    <div class="container3">
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
                echo "<p class='veiculo-preco'>Preço: <span class='car-price'>R$$preco_veiculo /dia</span></p>";
                echo "<p class='veiculo-descricao'>Descrição: $descricao</p>";
                echo "</div>";

                echo "<div class='buttons-container'>";
                echo "<button class='btn-alugar' id='btnAlugar'>Alugar</button>";
                echo "</div>";

                // Obtém o CPF do usuário logado da sessão
                $cpf_user = $_SESSION['cpf_user'];

                // Formulário de aluguel
                echo "<form class='aluguel-form' id='aluguelForm' action='alugar_carro.php?id=$cod_veiculo' method='POST'>";
                echo "<label for='email_user'>E-mail do usuário:</label>";
                echo "<input type='email' name='email_user' id='email_user' required placeholder='usuario@email.com'";

                echo "<label for='data_fim'>Data de término do aluguel:</label>";
                echo "<input type='date' name='data_fim' id='data_fim' required>";
                echo "<input type='hidden' name='cpf_user' value='$cpf_user'>"; // Campo oculto com o CPF do usuário
        
                echo "<br><br><p>Dados do cartão</p><br>";

                echo "<label for='num_cartao'>Número do cartão de crédito:</label>";
                echo "<input type='text' name='num_cartao' id='num_cartao' required>";

                echo "<label for='nome_cartao'>Nome no cartão:</label>";
                echo "<input type='text' name='nome_cartao' id='nome_cartao' required>";

                echo "<label for='data_validade'>Data de validade do cartão:</label>";
                echo "<input type='text' name='data_validade' id='data_validade' required placeholder='MM/AA' maxlength='5' oninput='formatarDataValidade(event)'>";


                echo "<label for='codigo_seguranca'>Código de segurança do cartão:</label>";
                echo "<input type='text' name='codigo_seguranca' id='codigo_seguranca' maxlength='3' required>";


                echo "<input type='submit' value='Alugar' class='btn-alugar' id='submitAlugar'>";


                echo "<h5>Isso é apenas uma simulação e não há processamento real do pagamento. 
                Os dados fornecidos são apenas para fins de demonstração e não serão processados.</h5>";

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
            $(document).ready(function () {
                // Aplica a máscara ao campo de número do cartão
                $('#num_cartao').inputmask('9999 9999 9999 9999');
            });
            function formatarDataValidade(event) {
                const input = event.target;
                let valor = input.value.replace(/\D/g, '');

                if (valor.length > 2) {
                    valor = valor.replace(/(\d{2})(\d{2})/, '$1/$2');
                }

                input.value = valor;
            }
        </script>
    </div>
    <footer>
        <div class="footer-bottom">
            <a href="https://www.instagram.com/juuniorcs/" target="_blank">
                <p>@juuniorcs - 2023</p>
            </a>
        </div>
    </footer>
</body>

</html>