<?php
require('conexao.php');

$select_veiculo = mysqli_query($mysqli, "SELECT * FROM veiculo ORDER BY cod_veiculo ASC");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://localhost/rodalivre2023/css/main.css">
    <title>Carros</title>
</head>

<body>
    <div class="col-100 bloco-imagens-texto" id="bloco-imagens-texto">
        <div class="content">
            <?php
            $count = 0; // Variável para controlar a contagem de veículos
            
            while ($dados_veiculo = mysqli_fetch_assoc($select_veiculo)) {
                $img_veiculo = $dados_veiculo['img_veiculo'];
                $caminho_imagem = 'img/uploads/' . $img_veiculo;

                if ($count % 2 === 0) {
                    // Abre uma nova linha a cada 2 veículos
                    echo '<div class="row">';
                }
                ?>
                <div class="col-6 bloco-texto bloco-imagem">
                    <img src="<?php echo $caminho_imagem; ?>" alt="Imagem do Veículo">
                    <div class="info">
                        <h3>
                            <?php echo $dados_veiculo['modelo']; ?>
                        </h3>
                        <h4>
                            <?php echo $dados_veiculo['marca']; ?>
                        </h4>
                        <p class="preco">
                            <?php echo $dados_veiculo['preco_veiculo']; ?>
                        </p>
                        <p>
                            <?php echo $dados_veiculo['descricao']; ?>
                        </p>
                    </div>
                    <div class="botao-comprar">
                        <a href="#" class="btn-comprar">Comprar</a>
                    </div>
                </div>
                <?php
                $count++;
                if ($count % 2 === 0) {
                    // Fecha a linha a cada 2 veículos
                    echo '</div>';
                }
            }

            // Verifica se há algum veículo faltando para fechar a última linha
            if ($count % 2 !== 0) {
                // Exibe um bloco vazio para completar a linha
                echo '<div class="col-6 empty-block"></div>';
                // Fecha a linha
                echo '</div>';
            }

            // Verifica se não há nenhum veículo cadastrado
            if ($count === 0) {
                echo "<p>Não há veículos cadastrados.</p>";
            }
            ?>
        </div>
    </div>


</body>

</html>