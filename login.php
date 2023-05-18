<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/rodalivre/static/logs.css">
    <link rel="stylesheet" href="http://localhost/rodalivre/static/style.css">
    <title>LOGIN</title>
</head>

<body>
    <form id="form_login" name="form_login" class="form_login" method="post" action="valida_login.php">

        <div>
            <h1>LOGIN</h1>
        </div>

        <div class="agrupamento_login">

            <div>

                <div><label>E-Mail</label></div>

                <div><input type="text" id="email_user" name="email_user" required autofocus placeholder="E-Mail"></div>

                <div><label>Senha</label></div>

                <div><input type="password" id="senha_user" name="senha_user" placeholder="Senha" required></div>

                <div><input type="submit" id="btn_entrar" name="btn_entrar" value="Entrar"></div>

            </div>

            <div>

                <img src="img/logo.png" class="logo_login">

            </div>


        </div>

    </form>

</body>

</html>