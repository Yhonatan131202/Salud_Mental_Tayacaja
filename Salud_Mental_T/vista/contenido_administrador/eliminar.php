<?php
require_once '../../modelo/conexion.php';

    $Id_Director = $_GET['Id_Director'];

    // Utilizar la función conectar() para obtener la conexión
    $conexion = conectar();

    $sql = "DELETE FROM director WHERE Id_Director = '$Id_Director'";
    $result = mysqli_query($conexion, $sql);

    if (!$result) {
        echo 'No se eliminó el registro.';
    } else {
        header('Location: directorio_administrador.php');
    }
?>