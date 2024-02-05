<?php
require_once '../../modelo/conexion.php';

    $Id_Psicologos = $_GET['Id_Psicologos'];

    // Utilizar la función conectar() para obtener la conexión
    $conexion = conectar();

    $sql = "DELETE FROM psicologos WHERE Id_Psicologos = '$Id_Psicologos'";
    $result = mysqli_query($conexion, $sql);

    if (!$result) {
        echo 'No se eliminó el registro.';
    } else {
        header('Location: directorio_administrador.php');
    }
?>