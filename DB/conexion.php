<?php

 $server = "localhost";
 $user = "root";
 $pass = "";
 $db = "login_db";
 
 $conexion = new mysqli($server, $user, $pass,$db);
 
 if ($conexion){
    echo'Conectado exitosamente a la base de datos';
 }else{
    echo'No se puede conectar a la base de datos';
 }

?>