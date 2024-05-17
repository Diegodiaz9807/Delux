<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "delux";

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conexion->connect_error) {
    die("La conexión ha fallado: " . $conexion->connect_error);
}
//  else {
//     echo "Conectado exitosamente a la base de datos";
// }
?>

                 