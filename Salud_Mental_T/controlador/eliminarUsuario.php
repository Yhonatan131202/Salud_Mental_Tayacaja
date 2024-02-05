<?php
require_once '../modelo/conexion.php';

$Id_Director = $_POST['Id_Director'];

// Utilizar la función conectar() para obtener la conexión
$conexion = conectar();

$sql = "DELETE FROM director WHERE Id_Director = '$Id_Director'";
$result = mysqli_query($conexion, $sql);

if (!$result) {
    echo 'No se eliminó el registro.';
} else {
    echo 'Se eliminó el registro correctamente.';
    header("Location: ../vista/contenido_administrador/directorio_administrador.php");
}
?>