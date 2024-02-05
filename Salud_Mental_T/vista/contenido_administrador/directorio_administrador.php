<?php

    session_start();
    
    // Verificar si el usuario ha iniciado sesión
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../vista/inicio_sesion.php");
        exit;
    }
    
    require_once '../../modelo/conexion.php';
    
    // Utilizar la función conectar() para obtener la conexión
    $conexion = conectar();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio-CSMC-Tayacaja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="..\..\CSS\contenido_administrador\directorio_administrador.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!--en este apartado se realizara el boton que desplegara al menu si en caso la pantall es menor -->
    <div class="menu">
        <i class="fa-solid fa-list"></i>
        <i class="fa-solid fa-xmark"></i>
    </div>
    <!--se realizara una barra lateral como el menu del directorio-->
    <div class="barra_lateral">

        <div><!--este div es el encargado de mostrar el icono de despliege y el nombre de la entidad-->

            <div class="nombre_pagina">
                <i id = "abrir" class="fa-regular fa-hospital"></i>
                <span>CSMC - Tayacaja</span>
            </div>
            <!--este sera el boton que permitira al administrador agregar a un usuario si en caso es necesario-->
            <a href="../registrate.php">
                <button class = "btn">
                    <i class="fa-solid fa-plus"></i><span>Nuevo Usuario</span>
                </button>
            </a>

        </div>
        <!--la etiqueta nav es la encargado de contener el contenido del menu de navegacion-->
        <nav class="navegacion">
            <ul>
                <!--la eqtiqueta li almacenara los cada opcion del menu-->
                <li>
                    <a href="inicio_administrador.php">
                    <i class="fa-solid fa-house-user"></i><span>Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="fa-solid fa-address-book"></i><span>Directorio</span>
                    </a>
                </li>
                <li>
                    <a href="documentos_admin.php">
                    <i class="fa-solid fa-file-pdf"></i><span>Documentos</span>
                    </a>
                </li>
                <li>
                    <a href="videos_admin.php">
                    <i class="fa-brands fa-youtube"></i><span>Videos</span>
                    </a>
                </li>
                <li>
                    <a href="reclamaciones_admin.php">
                    <i class="fa-solid fa-book-medical"></i><span>Reclamaciones</span>
                    </a>
                </li>
                <li>
                    <a href="">
                    <i class="fa-solid fa-trash"></i><span>Eliminar Usuario</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!--en el siguiente div se relacionara como el pie de la barra de menu-->
        <div>

            <!--primero se crea la barra de separacion-->
            <div class="linea_divicion"></div>
            
            <!--creamos la opcion de cerrar sesion-->
            <nav class ="cerrar_sesion">
                <ul>
                    <li>
                        <a href="..\..\modelo\logout.php">
                        <i class="fas fa-sign-out-alt fa-lg"></i><span>Cerrar Sesion</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!--otro apartado para mostrar el usuario que entro como administrador-->
            <div class="usuario">
                <!--ponemos la imagen-->
                <img src="..\..\img\director.webp" alt="">
                <!--creamos para mostar su nombre y gmail-->
                <div class="info_usuario">
                    <div class="nombre_gmail">
                        <span class="nombre">russbel</span>
                        <span class="gmail">russbelegoavil234@gmail.com</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!--en esta parte contendra el contenido -->
    <div class="contenido">
        <header>
            <img src="..\..\img\logo_saludmental-removebg-preview (2).png" class = "img_1">
            <div class ="gent_tit">
                <h1>Centro de Salud Mental Comunitario</h1>
                <small>(Tayacaja)</small>
            </div>
            <img src="..\..\img\logo_red_salud-removebg-preview.png" class = "img_2">
        </header>
        
        <main>
        <div class = "director" id="">
            <h1 style="text-align: center;">DIRECTOR</h1>
        <div class="container cuadro">
            <div>
            <form class="my-4" action="" method="post" enctype="multipart/form-data">
                <input type="text" name="buscar" id="">
                <input type="submit" value="Buscar">
                <a href="nuevo.php" class="btn btn-primary">Añadir Nuevo</a>
            </form>
            </div>

            <div class="my-4 table-responsive ">
                <table class="table table-hover table table-bordered table table-sm" border="2">
                <tr>
                        <!--<td style="text-align: center;">Id_Director</td>!-->
                        <td style="text-align: center;">Foto</td>
                        <td style="text-align: center;">Servidor_Social</td>
                        <td style="text-align: center;">Profesion</td>
                        <td style="text-align: center;">Gmail</td>
                        <td style="text-align: center;">Telefono</td>
                        <td style="text-align: center;">Descripcion</td>
                        <td style="text-align: center;">OPCIONES</td>
                </tr>
                    <?php
                    $buscar = isset($_POST['buscar']) ? $_POST['buscar'] : '';
                    // Utilizar la conexión obtenida anteriormente
                    $sql = "SELECT * FROM director WHERE Id_Director LIKE '%$buscar%' OR Foto LIKE '%$buscar%' OR Servidor_Social LIKE '%$buscar%' OR Profesion LIKE '%$buscar%' OR Gmail LIKE '%$buscar%' OR Telefono LIKE '%$buscar%' OR Descripcion LIKE '%$buscar%' ORDER BY Id_Director ASC";
                    $rta = mysqli_query($conexion, $sql);
                    while ($filas = mysqli_fetch_array($rta)) { 
                    ?>
                    <tr>
                        <!--<td><?php echo $filas['Id_Director'] ?></td>!-->
                        <td><img height="50px" src="data:image/;base64,<?php echo base64_encode ($filas['Foto']);?>"/></td>
                        <td><?php echo $filas['Servidor_Social'] ?></td> 
                        <td><?php echo $filas['Profesion'] ?></td>
                        <td><?php echo $filas['Gmail'] ?></td>
                        <td><?php echo $filas['Telefono'] ?></td>
                        <td><?php echo $filas['Descripcion'] ?></td>
                        <td>
                        <div class="btn-group">
                        <a href="editar.php?Id_Director=<?php echo $filas['Id_Director']; ?>">
                        <button type="button" class="btn btn-outline-success me-1">EDITAR</button>
                         </a>
                        </a>
                            <a href="eliminar.php?Id_Director=<?php echo $filas['Id_Director'] ?>"
                            ><button type="button" class="btn btn-outline-danger me-1">Eliminar</button>
                        </a>
                        </div>

                        </td>
                    </tr>
                    <?php 
                    } 
                    ?>

                </table>
            </div>

        </div>
        </div>

     

        <div class = "Psicologos" id="">
            <h1 style="text-align: center;">PSICÓLOGOS</h1>
        <div class="container cuadro">
            <div>
            <form class="my-4" action="" method="post" enctype="multipart/form-data">
                <input type="text" name="buscarPsicologos" id="">
                <input type="submit" value="Buscar">
                <a href="nuevoPsicologos.php" class="btn btn-primary">Añadir Nuevo</a>
            </form>
            </div>
            <div class="my-4 table-responsive ">
                <table class="table table-hover table table-bordered table table-sm" border="2">
                <tr>
                        <!--<td style="text-align: center;">Id_Psicologos</td>!-->
                        <td style="text-align: center;">Foto</td>
                        <td style="text-align: center;">Servidor Social</td>
                        <td style="text-align: center;">Profesion</td>
                        <td style="text-align: center;">Gmail</td>
                        <td style="text-align: center;">Telefono</td>
                        <td style="text-align: center;">Descripcion</td>
                        <td style="text-align: center;">OPCIONES</td>
                </tr>
                    <?php
                    $buscarPsicologos = isset($_POST['buscarPsicologos']) ? $_POST['buscarPsicologos'] : '';
                    // Utilizar la conexión obtenida anteriormente
                    $sql = "SELECT * FROM psicologos WHERE Id_Psicologos LIKE '%$buscarPsicologos%' OR Foto LIKE '%$buscarPsicologos%' OR Servidor_Social LIKE '%$buscarPsicologos%' OR Profesion LIKE '%$buscarPsicologos%' OR Gmail LIKE '%$buscarPsicologos%' OR Telefono LIKE '%$buscarPsicologos%' OR Descripcion LIKE '%$buscarPsicologos%' ORDER BY Id_Psicologos ASC";
                    $rta = mysqli_query($conexion, $sql);
                    while ($filas = mysqli_fetch_array($rta)) { 
                    ?>
                    <tr>
                        <!--<td><?php echo $filas['Id_Psicologos'] ?></td>!-->
                        <td><img height="50px" src="data:image/;base64,<?php echo base64_encode ($filas['Foto']);?>"/></td>
                        <td><?php echo $filas['Servidor_Social'] ?></td> 
                        <td><?php echo $filas['Profesion'] ?></td>
                        <td><?php echo $filas['Gmail'] ?></td>
                        <td><?php echo $filas['Telefono'] ?></td>
                        <td><?php echo $filas['Descripcion'] ?></td>
                        <td>
                        <div class="btn-group">
                        <a href="editarPsicologos.php?Id_Psicologos=<?php echo $filas['Id_Psicologos']; ?>">
                        <button type="button" class="btn btn-outline-success me-1">EDITAR</button>
                         </a>
                        </a>
                            <a href="eliminarPsicologos.php?Id_Psicologos=<?php echo $filas['Id_Psicologos'] ?>"
                            ><button type="button" class="btn btn-outline-danger me-1">Eliminar</button>
                        </a>
                        </div>

                        </td>
                    </tr>
                    <?php 
                    } 
                    ?>

                </table>
            </div>


        </div>
        </div>

        <div class = "Sociales" id="">
            <h1 style="text-align: center;">TRABAJADORES SOCIALES</h1>
        <div class="container cuadro">
            <div>
            <form class="my-4" action="" method="post" enctype="multipart/form-data">
                <input type="text" name="buscarSocial" id="">
                <input type="submit" value="Buscar">
                <a href="nuevoSocial.php" class="btn btn-primary">Añadir Nuevo</a>
            </form>
            </div>
            <div class="my-4 table-responsive ">
                <table class="table table-hover table table-bordered table table-sm" border="2">
                <tr>
                        <!--<td style="text-align: center;">Id_Psicologos</td>!-->
                        <td style="text-align: center;">Foto</td>
                        <td style="text-align: center;">Servidor Social</td>
                        <td style="text-align: center;">Profesion</td>
                        <td style="text-align: center;">Gmail</td>
                        <td style="text-align: center;">Telefono</td>
                        <td style="text-align: center;">Descripcion</td>
                        <td style="text-align: center;">OPCIONES</td>
                </tr>
                    <?php
                    $buscarSocial = isset($_POST['buscarSocial']) ? $_POST['buscarSocial'] : '';
                    // Utilizar la conexión obtenida anteriormente
                    $sql = "SELECT * FROM sociales WHERE Id_Sociales LIKE '%$buscarSocial%' OR Foto LIKE '%$buscarSocial%' OR Servidor_Social LIKE '%$buscarSocial%' OR Profesion LIKE '%$buscarSocial%' OR Gmail LIKE '%$buscarSocial%' OR Telefono LIKE '%$buscarSocial%' OR Descripcion LIKE '%$buscarSocial%' ORDER BY Id_Sociales ASC";
                    $rta = mysqli_query($conexion, $sql);
                    while ($filas = mysqli_fetch_array($rta)) { 
                    ?>
                    <tr>
                        <!--<td><?php echo $filas['Id_Sociales'] ?></td>!-->
                        <td><img height="50px" src="data:image/;base64,<?php echo base64_encode ($filas['Foto']);?>"/></td>
                        <td><?php echo $filas['Servidor_Social'] ?></td> 
                        <td><?php echo $filas['Profesion'] ?></td>
                        <td><?php echo $filas['Gmail'] ?></td>
                        <td><?php echo $filas['Telefono'] ?></td>
                        <td><?php echo $filas['Descripcion'] ?></td>
                        <td>
                        <div class="btn-group">
                        <a href="editarSocial.php?Id_Sociales=<?php echo $filas['Id_Sociales']; ?>">
                        <button type="button" class="btn btn-outline-success me-1">EDITAR</button>
                         </a>
                        </a>
                            <a href="eliminarSocial.php?Id_Sociales=<?php echo $filas['Id_Sociales'] ?>"
                            ><button type="button" class="btn btn-outline-danger me-1">Eliminar</button>
                        </a>
                        </div>

                        </td>
                    </tr>
                    <?php 
                    } 
                    ?>

                </table>
            </div>
        </div>
        </div>


        </main>

    <!--aqui esa el scripu que dara las funciones de los efectos-->
    <script src = "..\..\Js\funcion_menu.js"></script>
</body>
</html>