<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Trim</title>
  </head>
  <body>
    <?php
        if ($_POST) {
            if (!empty($_POST['nombre'])) {
              $_POST['nombre'] = trim($_POST['nombre']);
              if (strlen($_POST['nombre']) < 3) {
                echo "no es valido el nombre";
              } else {
                echo "el nombre es: _" . $POST['nombre'] . "<br>";
              }
            } else {
              echo 'no he recibido el nombre';
            }
        }
     ?>
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
          Nombre: <input type="text" name="nombre">
          <br>
          <input type="submit" value="Enviar">
        </form>

  </body>
</html>
