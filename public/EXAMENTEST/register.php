<?php
	require 'config.php';

	if(isset($_POST['register'])) {
		$errMsg = '';

		// datos del formulario
		$nombre = $_POST['nombre'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($nombre == '')
			$errMsg = 'No has introducido el Nombre';
		if($username == '')
			$errMsg = 'No has introducido username';
		if($password == '')
			$errMsg = 'No has introducido contraseña';


		if($errMsg == ''){
			try {
                $stmt = $connect->prepare("SELECT username FROM pdo WHERE username = :username");
                $stmt->bindParam(':username', $username);
                $stmt->execute();

                if($stmt->rowCount() > 0){
                    echo "Ya existe el usuario.";
                } else {
                    $stmt = $connect->prepare('INSERT INTO pdo (nombre, username, password) VALUES (:nombre, :username, :password)');
                    $stmt->execute(array(
                        ':nombre' => $nombre,
                        ':username' => $username,
                        ':password' => $password,
                    ));
                    header('Location: register.php?action=joined');
                    exit;
                }
			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
		}
	}

	// Usuario duplicado




	if(isset($_GET['action']) && $_GET['action'] == 'joined') {
		$errMsg = 'Te has registrado. Ya puedes acceder a través del <a href="login.php">login</a>';
	}
?>

<html>
<head><title>Registro</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div align="center">
		<div style=" border: solid 1px #006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:30px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>Registrarse</b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					<input type="text" name="nombre" placeholder="Nombre" value="<?php if(isset($_POST['nombre'])) echo $_POST['nombre'] ?>" autocomplete="off" class="box"/><br /><br />
					<input type="text" name="username" placeholder="Username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" autocomplete="off" class="box"/><br /><br />
					<input type="password" name="password" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" class="box" /><br/><br />
					<input type="submit" name='register' value="Registrar" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>
