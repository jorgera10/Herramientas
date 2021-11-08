<?php

include ('conexion.php');

    if (isset($_POST['ingresar'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];

        $query = "INSERT INTO usuario(nombre_usuario, apellido_usuario, cedula_usuario) VALUES ('$nombre', '$apellido', '$cedula')";
        
        $result = mysqli_query($conexion, $query);
        
        if(!$result){
            die("falla fatal");
        }

        $_SESSION['message'] = 'Guardado exitosamente';
        $_SESSION['message_type'] = 'success';

        header("Location: index.php");
    
    
    }
?>