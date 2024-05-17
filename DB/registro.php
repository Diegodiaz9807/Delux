<?php

    include 'conexion.php';
    

    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $email = $_POST['Email'];
    $contrasena = $_POST ['Contrasena'];
    $confirmar_contrasena = $_POST['Confirmar_contrasena'];

    $query = "INSERT INTO usuarios(Nombre, Apellido, Email, Contrasena, Confirmar_contrasena)
    VALUES('$nombre','$apellido','$email','$contrasena','$confirmar_contrasena',)";

    $ejecutar = mysqli_query($conexion, $query);


?>