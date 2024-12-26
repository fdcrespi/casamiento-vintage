<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="invitaciones digitales para eventos" />
    <meta
      name="keywords"
      content="invitaciones, digitales, tarjetas, boda, invitación, interactivas, casamiento, save the date, agenda la fecha, ideas invitación, tarjetas de 15, tarjetas eventos, wedding, matrimonio, ideas tarjetas, rsvp, modelos de invitacion, página de boda, página web de casamiento"
    />

    <!-- Listado de css con version dinamica segun modificacion de archivo -->
    <link
      rel="stylesheet"
      href="./files/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="./files/jquery.classycountdown.css"
    />
    <link
      rel="stylesheet"
      href="./files/jquery.fancybox.min.css"
    />
    <link
      rel="stylesheet"
      href="./files/styles.css"
    />
    <!-- Font -->
    <link
      href="./files/css2"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      href="./files/css2(1)"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="./files/all.min.css"
      rel="stylesheet"
    />

    <style>
      .center-text {
        height: 100vh;
      }
    </style>

  </head>
  <body>
    <div class="d-flex flex-column align-items-center justify-content-center center-text">

      <?php 
        include("base.php"); 
        // Obtener los datos del formulario
        $nombre = $_POST["cancion"];

        if ($nombre == "") {
          die("Error: El nombre de la cancion es obligatorio.");
        }

        if (agregarCancion($nombre)) {
            echo "<p>Gracias por agregar la cancion $nombre</p>";
        } else {
            echo "<p>Error al agregar la cancion $nombre</p>";
        }
        
        function agregarCancion($nombre) {
            $conexion = conectar();
            $sql = "INSERT INTO canciones (nombre) VALUES ('$nombre')";
            $resultado = mysqli_query($conexion, $sql);
            desconectar($conexion);
            return $resultado;
        }
      ?>

      <button type="button" class="btn btn-secondary" onclick="window.location.href='http://www.estefiyfede.com.ar'">Volver</button>

    </div>

  </body>
</html>