<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<center>
<h1>Formularios usables</h1>
</center>
<br><br><br><br><br><br><br><br><br><br>
<?php
	include 'funciones.php';
	$errores = [];
	if(!$_POST){
		include 'formulario.php';
	}else{
		if(!isset($_POST['nombre'])){
			$errores['nombre'] = 'No he recibido el nombre';
		} elseif (strlen($_POST['nombre']) < 3) {
				$errores['nombre'] = 'El nombre es demasiado corto';
		}

		if(!isset($_POST['apellidos'])){
			$errores['apellidos'] = 'No he recibido el/los apellidos';
		} elseif (strlen($_POST['apellidos']) < 2) {
				$errores['apellidos'] = 'El/los apellidos son demasiados cortos';
		}

		if(!isset($_POST['nick'])){
			$errores['nick'] = 'No he recibido el nick';
		} elseif (strlen($_POST['nick']) < 5) {
				$errores['nick'] = 'El nick es demasiado corto';
		}

		if (!isset($_POST['email'])) {
				$errores['email'] = 'No he recibido el email';
		} elseif (strlen($_POST['email']) < 6) {
			$errores['email'] = 'El email es demasiado corto';
		}

		if (!isset($_POST['clave1']) || !isset($_POST['clave2'])) {
			$errores['clave'] = 'No he recibido ambas claves';
		} else{
			if (strlen($_POST['clave1']) < 6) {
				$errores['clave'] = 'La clave ha de tener al menos 6 caracteres';
			}
			if ($_POST['clave1'] != $_POST['clave2']) {
				$errores['clave'] = 'Las claves tienen que ser iguales';
			}
		}

		if ($errores){
			include 'formulario.php';
		} else {
			echo 'Todo correcto, usuario registrado';
		}
	}
		?>
</body>
</html>
