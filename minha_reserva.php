<?php
include('protect.php');
require('conexao.php');

// Verificar se o usuário está logado
if (!isset($_SESSION['cpf_user'])) {
}

// Obtém o CPF do usuário logado
$cpf_user = $_SESSION['cpf_user'];

// Consulta o banco de dados para obter as informações dos carros alugados pelo usuário
$query = "SELECT v.marca, v.modelo, v.ano_veiculo, v.preco_veiculo, v.img_veiculo, a.data_fim, a.registro_aluguel
          FROM veiculo v
          INNER JOIN aluga a ON v.cod_veiculo = a.cod_veiculo
          WHERE a.cpf_user = '$cpf_user'";

$result = mysqli_query($mysqli, $query);

// Verificar se o usuário tem carros alugados
if (mysqli_num_rows($result) > 0) {
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="http://localhost/rodalivre2023/css/main.css">
        <title>Minhas Reservas</title>
    </head>

    <body>
        <?php require('templates/header.php'); ?>

        <div class="container2">
            <h1>Minhas Reservas</h1>

            <?php
            // Loop para exibir os detalhes de cada reserva
            while ($dados_carro = mysqli_fetch_assoc($result)) {
                $marca = $dados_carro['marca'];
                $modelo = $dados_carro['modelo'];
                $ano_veiculo = $dados_carro['ano_veiculo'];
                $preco_veiculo = $dados_carro['preco_veiculo'];
                $img_veiculo = $dados_carro['img_veiculo'];
                $data_fim = $dados_carro['data_fim'];
                $registro_aluguel = $dados_carro['registro_aluguel'];

                // Calcular o tempo restante até a data de término do aluguel
                $data_atual = date('Y-m-d');
                $tempo_restante = strtotime($data_fim) - strtotime($data_atual);
                $dias_restantes = ceil($tempo_restante / (60 * 60 * 24));

                // Verificar se o tempo restante é menor ou igual a zero
                if ($dias_restantes < 0) {
                    // Excluir o registro do carro alugado no banco de dados
                    $registro_aluguel = $dados_carro['registro_aluguel'];
                    $query_excluir = "DELETE FROM aluga WHERE registro_aluguel = '$registro_aluguel'";
                    mysqli_query($mysqli, $query_excluir);

                    // Continue para o próximo carro alugado (pula a exibição na página)
                    continue;
                }
                ?>


                <div class="car-details">
                    <h2>
                        <?php echo $marca . ' ' . $modelo; ?>
                    </h2>
                    <div class="car-image">
                        <img src="img/uploads/<?php echo $img_veiculo; ?>" alt="Imagem do Veículo">
                    </div>
                    <p><strong>Ano:</strong>
                        <?php echo $ano_veiculo; ?>
                    </p>
                    <p><strong>Preço do aluguel:</strong> R$
                        <?php echo $preco_veiculo; ?> /dia
                    </p>
                    <p><strong>Registro do Aluguel:</strong>
                        <?php echo $registro_aluguel; ?>
                    </p>
                    <p style="color:#163dff "><strong>Tempo Restante:</strong>
                        <?php echo $dias_restantes; ?> dia(s)
                    </p>
                </div>

            <?php } ?>

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

    <?php
} else {
    // O usuário não possui carros alugados
    echo "Você não possui nenhum carro alugado no momento.";
}
?>