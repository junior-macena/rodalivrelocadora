<?php
require('conexao.php');

// Verificar se o registro do aluguel foi passado como parâmetro
if (isset($_GET['registro'])) {
    // Obter o registro do aluguel da URL
    $registro_aluguel = $_GET['registro'];

    // Excluir o registro do aluguel do banco de dados
    $query_excluir = "DELETE FROM aluga WHERE registro_aluguel = '$registro_aluguel'";
    mysqli_query($mysqli, $query_excluir);

    // Redirecionar de volta para a página de Minhas Reservas
    echo "<script> alert('ALUGUEL DO VEÍCULO CANCELADO!'); </script>";
    echo "<script> window.location.href='minha_reserva.php'; </script>";
    exit();
}
?>