<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://localhost/rodalivre2023/css/main.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Roda Livre</title>
</head>

<body>
    <?php require('templates/header.php'); ?>
    <div class="col-100">
        <div class="slider-principal">
            <div><img src="./img/aluguel-slider-principal.png" /></div>
            <div><img src="./img/aviao-slider-principal.png" /></div>
        </div>
    </div>
    <div class="col-100">
        <div class="content texto-destaque">
            <h1>OS <strong>MELHORES CARROS</strong> PARA VOCÊ ESTÃO AQUI</h1>
            <p>Confira a nossa ampla seleção de veículos para alugar, desde carros de luxo até econômicos, e desfrute da
                liberdade de explorar novos lugares no seu próprio ritmo.</p>

            <div class="col-3 bloco-texto" style="margin-top: 6em;">
                <img src="./img/content-1.png" />
                <h3>Descubra</h3>
                <p>Explore nosso site e encontre o veículo perfeito para sua próxima aventura.</p>
            </div>
            <div class="col-3 bloco-texto" style="margin-top: 8em;">
                <img src="./img/content-2.png" />
                <h3>Encontre o carro perfeito </h3>
                <p>Com a nossa frota de veículos bem cuidados, estamos aqui para ajudá-lo a tornar a sua próxima
                    aventura ainda mais memorável.</p>
            </div>
            <div class="col-3 bloco-texto" style="margin-top: 4em">
                <img src="./img/content-3.png" />
                <h3>Atendimento</h3>
                <p>Com a nossa equipe amigável e experiente, estamos aqui para ajudar você a resolver qualquer problema,
                    24 horas por dia, 7 dias por semana.</p>
            </div>
        </div>

        <div class="veja-carros" ><a href="carros.php"><h2><br><br>Veja os carros disponíveis clicando aqui!</a><br><br><br><br><br> </h2></div>
    </div>
    <footer>
        <div class="footer-bottom">
            <a href="sobre.php">
                <p>	Copyright &#169;  Juuniorcs <br> Todos os direitos reservados</p>
            </a>
        </div>
    </footer>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="https://rodalivrelocadora-production.up.railway.app/js/main.js"></script>
</body>

</html>