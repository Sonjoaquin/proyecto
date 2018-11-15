<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Formularios usables</title>

  </head>
  <body>
    <h1>Formularios usables</h1>

  <?php
      include('funciones.php')
      $errores = [];
      if ( ! $_POST ) {

        include('formulario.php');

      } else{



    //Procesamos Formularios

    if ( ! isset ($_POST['nombre'])) {
      $errores['nombre'] = 'No he recibido el nombre';
    } elseif (strlen($_POST['nombre']) < 3 ) {
      $errores['nombre'] = 'Campo nombre demasiado corto';
    }
    if ( ! isset ($_POST['apellido'])) {
        $errores['apellido'] = 'No he recibido el apellido';
    } elseif (strlen($_POST['apellido']) < 3 ) {
        $errores['apellido'] = 'Campo apellido demasiado corto';
    }
    if (! isset($_POST['email'])) {
      $errores['email'] = 'No he recibido el email';
    } elseif (strlen($_POST['email']) < 6) {
      $errores['email'] = 'El email no es válido';
    }
    if ( ! isset($_POST['clave1']) || ! isset($_POST['clave2'])) {
      $errores['clave'] = 'No he recibido ambas claves';
    } else{
          if (strlen($_POST['clave1']) < 6) {
          $errores['clave'] = 'La clave ha de tener al menos 6 caracteres';
          }
          if ($_POST['clave1'] != $_POST['clave2']) {
          $errores['clave'] = 'Las claves tienen que ser distintas';
          }
    }
    if ($errores) {
      //mostrar_errores($errores);
      include 'formulario.php';


    } else {
      echo 'Todo correcto, usuario registrado';
    }
  }


   ?>
  </body>
</html>
