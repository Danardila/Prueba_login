<?php
    include("conexion.php");
    
    if(isset($_POST['login'])){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $verificacion="SELECT*FROM datos WHERE email='$usuario' AND password='$password'";
        $valido=mysqli_query($conex, $verificacion);
        $row = mysqli_fetch_array($valido);
        $count = mysqli_num_rows($valido);
        if($count==1){
            header("Location:online.php");
        exit();
        }else{
            echo '<script>
                window.location.href="login.php";
                alert("Login falló. Usuario o contraseña inválidos")
            </script>';
        }
    }
?>