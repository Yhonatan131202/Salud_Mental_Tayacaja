<?php
require_once 'conexion.php';

// Utilizar la función conectar() para obtener la conexión
$conexion = conectar();

// Verificar si se ha seleccionado un archivo
if (isset($_FILES['Foto']) && !empty($_FILES['Foto']['tmp_name'])) {
    // Si se ha seleccionado un archivo, leerlo y asignarlo a la variable $Foto
    $Foto = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
} else {
    // Si no se ha seleccionado ningún archivo, asignar un valor predeterminado a la variable $Foto
    $Foto = null;
}

$Servidor_Social = $_POST['Servidor_Social'];
$Profesion = $_POST['Profesion'];
$Gmail = $_POST['Gmail'];
$Telefono = $_POST['Telefono'];
$Descripcion = $_POST['Descripcion'];

$sql = "INSERT INTO psicologos (Foto, Servidor_Social, Profesion, Gmail, Telefono, Descripcion) VALUES ('$Foto','$Servidor_Social','$Profesion','$Gmail','$Telefono','$Descripcion')";
$result = mysqli_query($conexion, $sql);
if(!$result){
    echo 'No se Inserto los datos';
} else{
    header("Location: ../vista/contenido_administrador/directorio_administrador.php");
}
?>