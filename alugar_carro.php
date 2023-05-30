<?php
require('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar se o formulário foi enviado

    // Recuperar os dados do formulário
    $email_user = $_POST['email_user'];
    $cod_veiculo = $_GET['id'];
    $data_fim = $_POST['data_fim'];
    $cpf_user = $_POST['cpf_user'];

    // Verificar se o e-mail é válido no banco de dados
    $query = "SELECT * FROM usuario WHERE email_user = '$email_user'";
    $result = mysqli_query($mysqli, $query);
    
    if (mysqli_num_rows($result) > 0) {
        // O e-mail é válido, prosseguir com a inserção na tabela aluga

        // Executar a consulta de inserção
        $query = "INSERT INTO aluga (cpf_user, cod_veiculo, data_fim) VALUES ('$cpf_user', $cod_veiculo, '$data_fim')";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            // A inserção foi bem-sucedida
            echo "<script> alert ('Carro alugado com sucesso!');</script>";
            echo "<script> window.location.href='http://localhost/rodalivre2023/minha_reserva.php';</script>";
        } else {
            // Ocorreu um erro durante a inserção
            echo "Erro ao alugar o carro. Por favor, tente novamente.";
        }
    } else {
        // E-mail inválido, exibir mensagem de erro
        echo "<script> alert ('E-mail inválido. Por favor, verifique o e-mail digitado.');</script>";
        echo "<script> window.location.href='http://localhost/rodalivre2023/detalhe_veiculo.php?id=$cod_veiculo';</script>";
    }
} else {
    // O formulário não foi enviado corretamente
    echo "Ocorreu um erro no envio do formulário de aluguel.";
}
?>
