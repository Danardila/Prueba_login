<?php

$host="127.0.0.1";
$port=3312;
$socket="";
$user="root";
$password="201111455Da.";
$dbname="prueba";

$conex = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

$query = "SELECT id, nombre, email, direccion, phone, password, fecha FROM prueba.datos";


if ($stmt = $conex->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($id, $nombre, $email, $direccion, $phone, $password, $fecha);
    while ($stmt->fetch()) {
        /*echo "<table>
                <tr>
                    <td>$id</td>
                    <td>$nombre</td>
                    <td>$email</td>
                    <td>$direccion</td>
                    <td>$phone</td>
                    <td>$password</td>
                    <td>$fecha</td>
                </tr>
               </table>";*/
    }
    $stmt->close();
}
?>