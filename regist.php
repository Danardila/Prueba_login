<?php 
    include("conexion.php");

    if (isset($_POST['register'])) {
        if (
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['direction']) >= 1 &&
            strlen($_POST['phone']) >= 1 &&
            strlen($_POST['password']) >= 1
            ) {
                $name=trim($_POST['name']);
                $email=trim($_POST['email']);
                $direction=trim($_POST['direction']);
                $phone=trim($_POST['phone']);
                $password=trim($_POST['password']);
                $fecha=date("d/m/y");
                $consulta="INSERT INTO datos(nombre, email, direccion, phone, password, fecha)
                    VALUES('$name','$email','$direction','$phone','$password','$fecha')";
                $resultado=mysqli_query($conex, $consulta);
                if ($resultado){ //Aquí también se puede colocar un header("Location:pagina.php"); para que redirija a otra página
                    echo '<script>
                    window.location.href="login.php";
                    alert("Registro exitoso. Por favor inicie sesión") 
                    </script>';
                }else {
                    echo '<script>
                    window.location.href="registro.php";
                    alert("Ha ocurrido un error") 
                    </script>';
                }
            } else {
                echo '<script>
                window.location.href="registro.php";
                alert("No pueden existir campos vacios") 
                </script>';
            }

}
    
?>