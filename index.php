<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/stylesMyWebLogin.css">
    <title>My Personal Web</title>
</head>
<body>
    <header>
        <h1 class="title">Welcome to My Personal Web</h1>
        <p>Esta es una página web personal simple creada para fines de demostración.</p>

        <nav class="navigation">
            <button class="btnLogin-primary">Login</button>
        </nav> 
    </header>

    <div class="login-form">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>

        <h2>Personal Data</h2>
        <form action="PHP/login_usuario_be.php" method="POST">
            <input class="form-control" type="email" placeholder="Email" name="correo" required>
            <input class="form-control" type="password" placeholder="Password" name="clave" required>
            <button class="btn-primary" type="submit">Login</button>
        </form>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./JS/scriptMyWeb.js"></script>
</body>
</html>