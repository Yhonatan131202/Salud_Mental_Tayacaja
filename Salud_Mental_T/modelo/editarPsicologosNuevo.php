<?php
require_once 'conexion.php';

// Utilizar la función conectar() para obtener la conexión
$conexion = conectar();

$Id_Psicologos = $_POST['Id_Psicologos'];

if ($_FILES['Foto']['error'] === UPLOAD_ERR_OK) {
    $Foto = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
} else {
    $Foto = $_POST['Foto_old'];
}

$Servidor_Social = $_POST['Servidor_Social'];
$Profesion = $_POST['Profesion'];
$Gmail = $_POST['Gmail'];
$Telefono = $_POST['Telefono'];
$Descripcion = $_POST['Descripcion'];

$sql = "UPDATE psicologos SET Foto='$Foto', Servidor_Social = '$Servidor_Social', Profesion ='$Profesion', Gmail ='$Gmail', Telefono = '$Telefono', Descripcion = '$Descripcion' WHERE Id_Psicologos = '$Id_Psicologos'";
$result = mysqli_query($conexion, $sql);
if(!$result){
    echo 'No se Actualizo los datos ';
} else{
    header("Location: ../vista/contenido_administrador/directorio_administrador.php");
}