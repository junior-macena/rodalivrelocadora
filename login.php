<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/logs.css">
    <title>LOGIN</title>
</head>

<body>

<div class="bt-voltar" ><button class="btn-voltar"><a href="index.php">Voltar</a></button></div>

    <form id="form_login" name="form_login" class="form_login" method="post" action="valida_login.php">

    
        <div>
            <h1>LOGIN</h1>
        </div>

        <div class="agrupamento_login">

            <div>

                <div><br><input type="text" id="email_user" name="email_user" required autofocus
                        placeholder="E-Mail"><br> </div>

                <div><input type="password" id="senha_user" name="senha_user" placeholder="Senha" required><br><br>
                </div>

                <div><input type="submit" id="btn_entrar" name="btn_entrar" value="Entrar"></div>
                <p class="sem-cadastro">
                    Não tem cadastro?
                    <a href="registrar.php">Registre-se</a>
                </p>

            </div>

            <div>
                <br><img src="img/logo.png" class="logo_login">
            </div>
        </div>

    </form>

</body>

</html>