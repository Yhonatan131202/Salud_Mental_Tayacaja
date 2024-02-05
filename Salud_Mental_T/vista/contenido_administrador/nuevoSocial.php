<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGREGAR USUARIO-PSICOLOGOS</title>
</head>
<body>
<div>
    <form action="../../modelo/insertarSocial.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Ingresar Datos:</td>
            </tr>
            <tr>
                <td>Foto:</td>
                <td><input type="file" name="Foto" id=""></td>
            </tr>
            <tr>
                <td>Servidor Social:</td>
                <td><input type="text" name="Servidor_Social" id=""></td>
            </tr>
            <tr>
                <td>Profesion</td>
                <td><input type="text" name="Profesion" id=""></td>
            </tr>
            <tr>
                <td>Gmail:</td>
                <td><input type="text" name="Gmail" id=""></td>
            </tr>
            <tr>
                <td>Telefono :</td>
                <td><input type="text" name="Telefono" id=""></td>
            </tr>
            <tr>
                <td>Descripcion :</td>
                <td><input type="text" name="Descripcion" id=""></td>
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