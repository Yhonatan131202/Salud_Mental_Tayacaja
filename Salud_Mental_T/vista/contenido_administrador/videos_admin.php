<?php
    session_start();
    //Verificamos si el usuario ha iniciado sesion
    if(!isset($_SESSION['usuario'])) {
        header("Location: ../vista/inicio_sesion.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio-CSMC-Tayacaja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="..\..\CSS\contenido_administrador\videos_admin.css">
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
                    <a href="directorio_administrador.php">
                    <i class="fa-solid fa-address-book"></i><span>Directorio</span>
                    </a>
                </li>
                <li>
                    <a href="documentos_admin.php">
                    <i class="fa-solid fa-file-pdf"></i><span>Documentos</span>
                    </a>
                </li>
                <li>
                    <a href="#">
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
            <div class="sub_tit">
                <span class = "bienvenido">Bienvenido a la seccion de Videos: <?php echo $_SESSION['usuario'];?></span>
            </div>
            <div class="lista_videos">
                <span class = "sub">Listado de videos</span>
                <button class="abrir_popup" id = "miPopup_abrir">
                    <span class="sub_btn">Subir Nuevo Video</span>
                </button>
            </div>
            
            <div class = "contenedor_videos">
                <?php include "../../modelo/conexion.php";
                $conexion = conectar(); ?>
                
                <?php 
                foreach($conexion ->query("SELECT * from videos ") as $row ){ ?>
                <div class = "videos_cont">
                    <div><iframe src="<?php echo $row["url"] ?>" frameborder="0" allowfullscreen></iframe></div>
                    <div><?php echo $row["id_video"]  ?></div>
                    <div><?php echo $row["titulo"] ?></div>
                    <div class="elimar_fila"><span>Eliminar</span></div>
                </div>   
                <?php } ?>

            </div>
            <!--<iframe src="https://www.youtube.com/embed/owr6b1WxWHM" frameborder="0" allowfullscreen></iframe>-->

            


            <!--contenido del popup o formulario creado-->
            <div class = "popup" >
                <div class = "popup_formulario">
                    <span class = "cerrar_popup"><i class="fa-solid fa-xmark"></i></span>
                    <div class="cont_form">
                        <h1>Insertar Nuevo Video</h1>
                        <form action="../../modelo/nuevos_videos.php" id="formulario" method="POST" >
                            <div class = "cont_form_2">
                                <label class="letra_from">Titulo del Video :</label>
                                <div class="contenedor_in">
                                    <i class="fa-brands fa-youtube"></i>
                                    <input type="text" id="titulo" name="titulo"  placeholder="Titulo*">
                                </div>
                                <label class="letra_from">Ingresar URL :</label>
                                <div class="contenedor_in">
                                    <i class="fa-solid fa-link"></i>
                                    <input type="text" id="url" name="url"  placeholder="URL*">
                                </div>
                            </div>
                            <div class = "btn_form">
                                <button type="submit" class="btn_form_ingresar"  id="signUP" name="insertar" value="enviar"><span class="sub_btn">Insertar Video</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>


    <!--aqui esa el scripu que dara las funciones de los efectos-->
    <script src = "..\..\Js\funcion_menu.js"></script>
    <script src = "..\..\Js\popup.js"></script>
</body>
</html>