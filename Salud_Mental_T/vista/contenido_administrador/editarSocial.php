<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR USUARIO-SOCIALES</title>
</head>
<body>
    <?php
     $Id_Sociales  = isset($_GET['Id_Sociales']) ? $_GET['Id_Sociales'] : '';
     $Foto = isset($_FILES['Foto']['tmp_name']) ? addslashes(file_get_contents($_FILES['Foto']['tmp_name'])) : '';
     $Servidor_Social = isset($_GET['Servidor_Social']) ? $_GET['Servidor_Social'] : '';
     $Profesion= isset($_GET['Profesion']) ? $_GET['Profesion'] : '';
     $Gmail = isset($_GET['Gmail']) ? $_GET['Gmail'] : '';
     $Telefono = isset($_GET['Telefono']) ? $_GET['Telefono'] : '';
     $Descripcion = isset($_GET['Descripcion']) ? $_GET['Descripcion'] : '';
     
 
    ?>
<div>
    <form action="../../modelo/editarSociales.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Ingresar Datos:</td>
                <td><input type="TEXT" name="Id_Sociales" id="" value="<?=$Id_Sociales?>"></td>
            </tr>
            <tr>
                <td>Foto:</td>
                <td><input type="file" name="Foto" id="" value="<?=$Foto?>"></td>
            </tr>
            <tr>
                <td>Servidor Social:</td>
                <td><input type="text" name="Servidor_Social" id="" value="<?=$Servidor_Social?>"></td>
            </tr>
            <tr>
                <td>Profesion</td>
                <td><input type="text" name="Profesion" id="" value="<?=$Profesion?>"></td>
            </tr>
            <tr>
                <td>Gmail:</td>
                <td><input type="text" name="Gmail" id="" value="<?=$Gmail?>"></td>
            </tr>
            <tr>
                <td>Telefono :</td>
                <td><input type="text" name="Telefono" id=""value="<?=$Telefono?>"></td>
            </tr>
            <tr>
                <td>Descripcion :</td>
                <td><input type="text" name="Descripcion" id="" value="<?=$Descripcion?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Guardar"></td>
                <td>
                    <button type="button" onclick="window.location.href='directorio_administrador.php'">Cancelar</button>
                </td> 
            </tr>
        </table>
    </form>
    </div>
</body>
</html>