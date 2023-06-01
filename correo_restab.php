<?php
   include("conexion.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener el correo electrónico ingresado en el formulario
    $email = $_POST['email'];

    // Verificar si el correo electrónico existe en la base de datos
    $verificacion="SELECT*FROM datos WHERE email='$email'";
    $valido=mysqli_query($conex, $verificacion);
    $row = mysqli_fetch_array($valido);
    $count = mysqli_num_rows($valido);
    if($count==1){
        echo '<script>
        window.location.href="login.php";
        alert("Se ha enviado un correo con tu nueva contraseña al correo que proporcionaste") 
        </script>';
    } else {
        echo '<script>
        window.location.href="login.php";
        alert("El correo proporcionado no se encuentra registrado") 
        </script>';
    }
    }
?>