<?php
//hacemos llamado al imput de formulario
    $titulo = $_POST["titulo"];
    $url = $_POST["url"];
    
    include "conexion.php";
    $conexion = conectar();

//indicamos el nombre de la base datos
$datab = "csmc_tayacaja";
//indicamos selecionar ala base datos
$db = mysqli_select_db($conexion,$datab);

if (!$db)
{
echo "No se ha podido encontrar la Tabla";
}
else
{
echo "<h3>Tabla seleccionada:</h3>" ;
}

$sqlInserta = "INSERT INTO videos (titulo, url) 
                           VALUES ('$titulo', '$url')";
    if ($conexion->query($sqlInserta) === TRUE) {
        header("location: ../vista/contenido_administrador/videos_admin.php");
        echo "Nuevo registro creado exitosamente<br>";
    } else {
        echo "Error al insertar: " . $sqlInserta . "<br>" . $conexion->error;
    }

?>