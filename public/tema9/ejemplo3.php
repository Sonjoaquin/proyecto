<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title></title>
  	<link rel="stylesheet" href="/css/bootstrap.css">
  </head>
  <body>
<?php
      $archivo = 'citas.txt';

      if($_SERVER['REQUEST_METHOD'] == 'POST') {


        if (isset($_POST['cita']) && $_POST['cita'] != '' && isset($_POST['nombre']) && ! empty($_POST['nombre'])) {

              $reserva = $_POST['cita'] . ' : ' . $_POST['nombre'] . "\n";

              if (file_put_contents($archivo, $reserva, FILE_APPEND)) {

              echo '<h2>Cita guardada </h2><br>';
              echo '<a href="ejemplo3.php">Regresar al formulario</a><br>';
              echo '<a href="/index.php">Regresar al indice</a>';

          }

        } else {

          echo '<h4>Los datos introducidos no son correctos </h4><br>';

        }

      } else {

          include 'formulario_citas.php';

      }

?>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
