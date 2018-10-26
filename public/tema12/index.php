<?php

include 'models/Usuario.php';
echo 'Test de conexión: <br>';
//$db = new Dbpdo();

//print_r($db->getConnection());

echo '<pre>';

$usuario = new Usuario;

//print_r($usuario->all());

$datos = [
          'nombre' => 'Dioniso',
          'email' => 'dioniso@gmail.com',
          'password' => '123456',
          'edad' => '12'
          ];
        // Esto es el INSERT
/*
try {
      $usuario_id = $usuario->insert($datos);

      echo 'El ID del nuevo usuario es ' . $usuario_id;
      print_r($usuario->all());
    } catch(Exception $e) {
      echo '<h1>ERROR: ' . $e->getMessage() . '</h1>';
    }
 ?>

// Esto es el UPDATE
$clave_dato = ['id' => 2];

try {
  $usuario->update($datos, $clave_dato);
} catch (Exception $e) {
  echo '<h1>ERROR: ' . $e->getMessage() . '</h1>';


}
*/
//esto es el delete

$clave_dato = ['id' => 1];
try {
  $usuario->delete($clave_dato);
} catch (Exception $e) {
  echo '<h1>ERROR: ' . $e->getMessage() . '</h1>';


}
