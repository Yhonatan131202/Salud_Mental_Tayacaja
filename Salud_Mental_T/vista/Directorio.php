<?php
require_once '../modelo/conexion.php';  // Include the connection file

// Establish connection
$conexion = conectar();

// Retrieve data from the tables
$sqlDirector = "SELECT * FROM director ORDER BY Id_Director ASC";
$resultadoDirector = mysqli_query($conexion, $sqlDirector);

$sqlPsicologos = "SELECT * FROM psicologos ORDER BY Id_Psicologos ASC";
$resultadoPsicologos = mysqli_query($conexion, $sqlPsicologos);

$sqlSociales = "SELECT * FROM sociales ORDER BY Id_Sociales ASC";
$resultadoSociales = mysqli_query($conexion, $sqlSociales);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Directorio - Centro de Salud Mental</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/index.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
        <header>
            <img src="../img/logo_red_salud-removebg-preview.png">
            <nav class="navegacion">
                <a href="../../index.html">HOME</a>
                <a href="Nosotros.php">NOSOTROS</a>
                <a href="servicios.php">SERVICIOS</a>
                <a href="Directorio.php">DIRECTORIO</a>
        
            </nav>
            <nav class="navegacion2"><a href="../vista/inicio_sesion.php"><button class="boton">ACCESO</button></a></nav>
            <img src="../img/logo_saludmental-removebg-preview (2).png" >
        </header>
  <main>
  <div class="container Director">
    <div class="container">
        <h2 class="text-center mb-5">NUESTRO DIRECTOR</h2>
        <div class="row">
            <?php while ($filaDirector = mysqli_fetch_array($resultadoDirector)) { ?>
                <div class="col-md-4 row-cols-md-5">
                    <div class="card mb-4 card-custom"> <!-- Agrega la clase card-custom aquí -->
                        <div class="card-body text-center">
                            <img height="150px" src="data:image/;base64,<?php echo base64_encode($filaDirector['Foto']); ?>" class="rounded-circle mb-3">
                            <h5 class="card-title fw-bold mb-3"><?php echo $filaDirector['Servidor_Social']; ?></h5>
                            <p class="card-text"><strong>Profesión:</strong> <?php echo $filaDirector['Profesion']; ?></p>
                            <p class="card-text"><strong>Gmail:</strong> <?php echo $filaDirector['Gmail']; ?></p>
                            <p class="card-text"><strong>Teléfono:</strong> <?php echo $filaDirector['Telefono']; ?></p>
                            <p class="card-text"><?php echo $filaDirector['Descripcion']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="container Psicologos">
    <div class="container ">
        <h2 class="text-center mb-5">NUESTROS PSICÓLOGOS</h2>
        <div class="row">
            <?php while ($filaPsicologos = mysqli_fetch_array($resultadoPsicologos)) { ?>
                <div class="col-md-4 row-cols-md-5">
                    <div class="card mb-4 card-custom"> <!-- Agrega la clase card-custom aquí -->
                        <div class="card-body text-center">
                            <img height="150px" src="data:image/;base64,<?php echo base64_encode($filaPsicologos['Foto']); ?>" class="rounded-circle mb-3">
                            <h5 class="card-title fw-bold mb-3"><?php echo $filaPsicologos['Servidor_Social']; ?></h5>
                            <p class="card-text"><strong>Profesión:</strong> <?php echo $filaPsicologos['Profesion']; ?></p>
                            <p class="card-text"><strong>Gmail:</strong> <?php echo $filaPsicologos['Gmail']; ?></p>
                            <p class="card-text"><strong>Teléfono:</strong> <?php echo $filaPsicologos['Telefono']; ?></p>
                            <p class="card-text"><?php echo $filaPsicologos['Descripcion']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="container Sociales">
    <div class="container">
        <h2 class="text-center mb-5">TRABAJADORES SOCIALES</h2>
        <div class="row">
            <?php while ($filaSociales = mysqli_fetch_array($resultadoSociales)) { ?>
                <div class="col-md-4">
                    <div class="card mb-4 card-custom"> <!-- Agrega la clase card-custom aquí -->
                        <div class="card-body text-center">
                            <img height="150px" src="data:image/;base64,<?php echo base64_encode($filaSociales['Foto']); ?>" class="rounded-circle mb-3">
                            <h5 class="card-title fw-bold mb-3 "><?php echo $filaSociales['Servidor_Social']; ?></h5>
                            <p class="card-text"><strong>Profesión:</strong> <?php echo $filaSociales['Profesion']; ?></p>
                            <p class="card-text"><strong>Gmail:</strong> <?php echo $filaSociales['Gmail']; ?></p>
                            <p class="card-text"><strong>Teléfono:</strong> <?php echo $filaSociales['Telefono']; ?></p>
                            <p class="card-text"><?php echo $filaSociales['Descripcion']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


  </main>

  <script src="script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js"></script>
</body>
</html>
