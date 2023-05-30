<?php
session_start(); //iniciar sessao

//limpar buffer de redirecionamento
ob_start();

//incluir o arquivo com a conexao do banco de dados
include_once 'conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://localhost/rodalivre2023/css/logs.css">
    <title>REGISTRO</title>
</head>

<body>
    <?php
    if (isset($_POST['SendCadUser'])) {
        $nome_user = trim($_POST['nome_user']);
        $cpf_user = trim($_POST['cpf_user']);
        $email_user = trim($_POST['email_user']);
        $senha_user = trim($_POST['senha_user']);

        // Verificar se o CPF já está cadastrado no banco de dados
        $query_verifica_cpf = "SELECT COUNT(*) AS total FROM usuario WHERE cpf_user = ?";
        $verifica_cpf = $mysqli->prepare($query_verifica_cpf);
        $verifica_cpf->bind_param('s', $cpf_user);
        $verifica_cpf->execute();
        $verifica_cpf->bind_result($total);
        $verifica_cpf->fetch();
        $verifica_cpf->close();

        if ($total > 0) {
            echo "<p style='color: #f00;'>CPF já cadastrado!</p>";
        } else {
            // O CPF não está cadastrado, prosseguir com o cadastro do usuário
            $tipo_login = 0;

            $query_usuario = "INSERT INTO usuario (nome_user, cpf_user, email_user, senha_user, tipo_login) VALUES (?, ?, ?, ?, ?)";
            $cad_usuario = $mysqli->prepare($query_usuario);
            $cad_usuario->bind_param('ssssi', $nome_user, $cpf_user, $email_user, $senha_user, $tipo_login);
            $cad_usuario->execute();

            if ($cad_usuario->affected_rows) {
                echo "<script> alert ('USUÁRIO CADASTRADO COM SUCESSO!');</script>";

                header("Location: login.php");
            } else {
                echo "<p style='color: #f00;'>Erro ao cadastrar usuário!</p>";
            }
            $cad_usuario->close();
        }

    }

    ?>
    <div class="bt-voltar"><button class="btn-voltar"><a href="index.php">Voltar</a></button></div>


    <form id="form_registro" name="form_registro" class="form_registro" method="post" action=" ">

        <div>
            <h1>Cadastro</h1>
        </div>

        <div class="agrupamento_registro">

            <div>
                <input type="text" name="nome_user" placeholder="Primeiro nome" required><br>

                <input type="number" name="cpf_user" placeholder="CPF" required><br>

                <input type="email" name="email_user" placeholder="E-mail" required autofocus><br>

                <input type="password" name="senha_user" placeholder="Crie uma senha" required><br>

                <input type="password" name="senha_user" placeholder="Confirme a senha" required><br><br>

                <div><input type="submit" id="SendCadUser" name="SendCadUser" value="Cadastrar"></div>
                <p class="tem-cadastro">
                    Tem cadastro?
                    <a href="login.php">Login</a>
                </p>

            </div>

            <div>
                <br><img src="img/logo.png" class="logo_login">
            </div>
        </div>

    </form>

</body>

</html>