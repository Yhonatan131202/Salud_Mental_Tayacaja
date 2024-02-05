<?php
require_once '../../modelo/conexion.php';

    $Id_Sociales = $_GET['Id_Sociales'];

    // Utilizar la función conectar() para obtener la conexión
    $conexion = conectar();

    $sql = "DELETE FROM sociales WHERE Id_Sociales = '$Id_Sociales'";
    $result = mysqli_query($conexion, $sql);

    if (!$result) {
        echo 'No se eliminó el registro.';
    } else {
        header('Location: directorio_administrador.php');
    }
?>