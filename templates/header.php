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
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Roda Livre</title>
</head>

<body>
    <header class="menu-principal">
        <div class="header-1">
            <div class="logo">
                <img src="./img/logo.png" alt="Roda Livre">
            </div>
            <div class="nav-buttons">
                <div class="button-log">
                    <?php if (isset($_SESSION['email_user'])): ?>
                        <div class="nav-logout">
                            <div class="user-info">
                                <label>
                                    <?php echo "Olá, " . $_SESSION['nome_user']; ?>
                                </label>
                            </div>
                            <div class="logout-link">
                                <a href="./logout.php">Sair</a>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="nav-login">
                            <a href="./login.php">Login</a>
                        </div>
                        <div class="nav-registrar">
                            <a href="./registrar.php">Registrar-se</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="redes-sociais">
                <ul>
                    <li>
                        <a href="https://www.instagram.com/juuniorcs/" target="_blank">
                            <img src="./img/instagram.png" alt="Instagram">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <main class="col-100 menu-urls">
            <div class="header-2">
                <div class="menu">
                    <ul>
                        <li class="nav-home"><a href="./">Home</a></li>
                        <li class="nav-carros"><a href="./carros.php">Carros</a></li>
                        <li class="nav-reservas"><a href="./minha_reserva.php">Minhas
                                reservas</a></li>
                    </ul>
                </div>

                <nav>

                    <ul class="menu_admin">

                        <li><a href="#">+</a>

                            <ul>
                                <li><a href="admin/index-admin.php">Acesso administrador</a></li>
                                <li><a href="./sobre.php">Sobre</a></li>
                            </ul>

                        </li>
                    </ul>

                </nav>
                <div class="busca">
                    <input id="pesquisarInput" placeholder="Pesquisar" type="text">
                </div>
            </div>
        </main>
    </header>

    <script type="text/javascript" src="./js/main.js"></script>

</body>

</html>