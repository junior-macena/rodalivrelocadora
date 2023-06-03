<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 50px;

        }

        p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 15px;
            text-align: justify;
        }

        .signature {
            margin-top: 40px;
            font-size: 14px;
            color: #777;
            text-align: right;
        }

        .signature span {
            display: block;
        }

        .signature em {
            font-style: italic;
            color: #999;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <?php require('templates/header.php'); ?>

    <div class="container">
        <h1>SOBRE O NOSSO SITE</h1>
        <p>Bem-vindo ao nosso site de aluguel de carros!</p>
        <p>Este projeto foi desenvolvido como parte da disciplina de Desenvolvimento Web, sob a orientação do professor
            Leandro. </p>
        <p>Meu nome é Junior, e fui o responsável por criar esta plataforma, juntamente com o Juliano e a Shelda.</p>
        <p>Foi pensada para tornar o processo de aluguel de carros o mais simples e conveniente possível.</p>
        <p>Agradecemos por visitar nosso site de aluguel de carros. Esperamos que você encontre a solução perfeita para suas necessidades de locação. </p>

        <div class="signature">
            <span>Atenciosamente,</span>
            <span>Junior</span>
            <em>Desenvolvedor do Site de Aluguel de Carros</em>
            <span>Professor Leandro</span>
            <em>Orientador</em>
        </div>
    </div>
</body>

</html>