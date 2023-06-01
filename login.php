<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        
        <h2>Hola</h2>
        <p>Ingresa tus datos</p>

        <div class="input-wrapper">
            <input type="text" name="usuario" placeholder="Correo electrónico">
            <img class="input-icon" src="images/name.svg" alt="">
        </div>

        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña">
            <img class="input-icon" src="images/password.svg" alt="">
        </div>
        <a href="forgot_password.php">Olvidé mi contraseña</a><br><br>

        <input class="btn" type="submit" name="login" value="Iniciar sesión"><br><br>
        <input class="btn" type="button" value="Registrarse" onclick="window.location.href='registro.php'" /><br><br>
    </form>
    
    <?php
        include("loginmysql.php");
    ?>
</body>
</html>