<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post">
    <h2>¿Olvidaste tu contraseña?</h2>
    <p>Ingresa tu correo electrónico para recibir un enlace de restablecimiento de contraseña.</p>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <img class="input-icon" src="images/email.svg" alt="">
        </div>
        <input class="btn" type="submit" name="submit" value="Enviar correo de restablecimiento">
</form>
<?php
        include("correo_restab.php");
    ?>
</body>
</html>