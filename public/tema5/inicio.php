<?php session_start() ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio de sesión</title>
  </head>
  <body>
    <?php
        if (isset($_SESSION ['user']['name'])) {
          echo 'Eres ' . $_SESSION['user']['name'];
        } else{
            echo 'No estás logueado';
        }
     ?>
    <br>
    <a href="loguearme.php">Identificarme</a>
    <br>
    <a href="logout.php">Cerrar Sesión</a>
  </body>
</html>
