<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario PHP</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>

    <form class="" action="<?= $_SERVER['PHP_SELF']?>" method="post">
      <p>
        <label for="nombre">Nombre:&nbsp;</label>
        <input type="text" name="nombre" id="nombre"

        <?php
          mostrar_campo('nombre');
         ?>
        >

        <?php mostrar_error_campo('nombre', $errores); ?>

      </p>
      <p>
        <label for="apellidos">Apellidos:&nbsp;</label>
        <input type="text" name="apellidos" id="apellidos"

        <?php
          mostrar_campo('apellidos');
         ?>
        >

        <?php mostrar_error_campo('apellidos', $errores); ?>

      </p>
      <p>
        <label for="nick">Nick:&nbsp;</label>
        <input type="text" name="nick" id="nick"

        <?php
          mostrar_campo('nick');
         ?>
        >

        <?php mostrar_error_campo('nick', $errores); ?>

      </p>
      <p>
        <label for="email">Email:&nbsp;</label>
        <input type="email" name="email" id="email"

        <?php
          mostrar_campo('email');
         ?>

        >

        <?php mostrar_error_campo('email', $errores); ?>

      </p>
      <p>
        <label for="clave1">Clave:&nbsp;</label>
        <input type="password" name="clave1" id="clave1" value="">
        <?php mostrar_error_campo('clave', $errores); ?>
      </p>
      <p>
        <label for="clave2">Repetir clave:&nbsp;</label>
        <input type="password" name="clave2" id="clave2" value="">
      </p>
      <p>
        <label>
        <input type="submit" name="enviar" value="Enviar">
        </label>
      </p>
    </form>

  </body>
</html>
