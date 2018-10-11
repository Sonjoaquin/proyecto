<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formularios Usables</title>
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
	<h1>Formularios usables</h1>

<?php
	include 'funciones2.php';
	$errores = [];
	if ( ! $_POST ) {
		include('formulario2.php');
	} else {
		// Procesamos el formulario
		if ( ! isset($_POST['nombre']) ) {
			$errores['nombre'] = 'No he recibido el nombre';
		} elseif ( strlen($_POST['nombre']) < 3 ) {
			$errores['nombre'] = "Campo nombre demasiado corto";
		}
		if ( ! isset($_POST['email']) ) {
			$errores['email'] = "No he recibido el email";
		} elseif ( strlen($_POST['email']) < 6) {
			$errores['email'] = "El email no es válido";
		}
		if ( ! isset($_POST['clave1']) || ! isset($_POST['clave2'])) {
			$errores['clave1'] = "No he recibido ambas claves";
		} else {
			if ( strlen($_POST['clave1']) < 6 ) {
			$errores['clave1'] = "La clave ha de tener al menos 6 caracteres";
			}
			if ( $_POST['clave1'] != $_POST['clave2']) {
				$errores['clave1'] = "Las claves tienen que ser iguales";
			}
		}

		if ( $errores ) {
			//mostrar_errores($errores);
			include 'formulario2.php';

		} else {
			echo "Todo correcto, usuario registrado";
		}
	}
?>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>
