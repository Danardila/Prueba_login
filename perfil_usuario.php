<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="info_usuario.css">
</head>
<body>
    <form>
    <table>

        <tr> 
            <td colspan="7"><h1>Información de usuario</h1></td>        
        </tr>
        
            <td>
                <h2>Nombres</h2>                
            </td>

            <td colspan="2">
                <input type="text" name="Nombre" placeholder="P.E: Daniela Alexandra" size="50">                  
            </td>

            <td>
                <h2>Apellidos</h2>
            </td>

            <td colspan="3" class="input-wrapper">
                <input type="text" name="Apellidos" placeholder="P.E: Ardila Viasus" size="50">                  
            </td>

            <tr>
                <td colspan="2">
                    <h2>Tipo de documento</h2><br>
                    <select name="doc-type">
                    <option>CC</option>
                    <option>CE</option>
                    <option>Pasaporte</option>
                    </select>
                </td>

                <td class="input-wrapper">
                    <h2>N° de documento</h2><input type="text" name="documento" placeholder="1049111111" size="50">                  
                </td>

                <td>
                    <h2>Fecha de nacimiento</h2>
                </td>
                <td>
                    <h2>
                        <script>
                            function validarFecha() {
                                var fecha = document.getElementById("fechaNacimiento").value;
                                var fechaActual = new Date();
                                var fechaIngresada = new Date(fecha);
                                var edad = fechaActual.getFullYear() - fechaIngresada.getFullYear();
                    
                                // Validar si la fecha ingresada es mayor a la fecha actual y menor a 100 años
                                if (fechaIngresada > fechaActual || edad > 100) {
                                    alert("Fecha inválida. Por favor, ingresa una fecha válida.");
                                    return false;
                                }
                    
                                // Validar si la edad es menor de 18 años
                                if (edad < 18) {
                                    alert("Debes ser mayor de edad para continuar.");
                                    return false;
                                }
                    
                                return true;
                            }
                        </script>
                        <form onsubmit="return validarFecha();">
                            <input type="date" id="fechaNacimiento" required>
                            <br>
                            <input type="submit" value="Enviar">
                        </form>
                    </h2>
                </td>

            </tr>
            <tr>
                <td>
                    <h2>Sexo</h2>
                </td>

                <td colspan="2">
                    <select name="sexo">
                        <option>Hombre</option>
                        <option>Mujer</option>
                        <option>Otro</option>
                </td>

                <td>
                    <h2>Teléfono</h2>
                </td>

                <td colspan="3">
                    <input type="tel" name="telefono" placeholder="3111111111" size="50">
                </td>

            </tr>
            <tr>
                <td>
                    <h2>Dirección</h2>
                </td>
                <td colspan="2">
                    <input type="text" name="dirección" placeholder="Carrera 50 #152-20" size="50">                  
                </td>

                <td>
                    <h2>Correo electrónico</h2>
                </td>

                <td colspan="3">
                    <input type="email" name="email" placeholder="correo@ejemplo.com" size="50">                  
                </td>

            </tr>
        <tr>
            <td colspan="6">
                <input type="submit" value="Actualizar datos">
            </td>
        </tr>

    </table>
    </form>
</body>
</html>