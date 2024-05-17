<?php
    // Incluir el archivo de conexión
    include 'conexion.php';

    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si todos los campos necesarios están presentes y no están vacíos
        if (isset($_POST['Nombre'], $_POST['Apellido'], $_POST['Email'], $_POST['Contrasena'])) {
            // Obtener los datos del formulario y escaparlos para evitar la inyección SQL
            $nombre = mysqli_real_escape_string($conexion, $_POST['Nombre']);
            $apellido = mysqli_real_escape_string($conexion, $_POST['Apellido']);
            $email = mysqli_real_escape_string($conexion, $_POST['Email']);
            $contrasena = mysqli_real_escape_string($conexion, $_POST['Contrasena']);

            // Verificar si los campos no están vacíos
            if (!empty($nombre) && !empty($apellido) && !empty($email) && !empty($contrasena)) {
                // Preparar la consulta SQL
                $query = "INSERT INTO usuario (Nombre, Apellido, Correo, Contrasena)
                          VALUES ('$nombre', '$apellido', '$email', '$contrasena')";

                // Ejecutar la consulta
                $resultado = mysqli_query($conexion, $query);

                // Verificar si la consulta fue exitosa
                if ($resultado) {
                    echo "
                            <script>
                            alert('Usuario registrado exitosamente.');
                            window.location.href = '/login.html';
                            </script>";
                    
                    exit(); // Detener la ejecución del script después de redirigir
                } else {
                    echo "Error al insertar los datos: " . mysqli_error($conexion);
                }
            } else {
                echo "Todos los campos son obligatorios.";
            }
        } else {
            echo "No se han proporcionado todos los campos.";
        }

        // Cerrar la conexión
        mysqli_close($conexion);
    } else {
        echo "El formulario no se ha enviado correctamente.";
    }
?>
