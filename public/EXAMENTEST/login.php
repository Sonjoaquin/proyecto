<?php
	require 'config.php';

	if(isset($_POST['login'])) {
		$errMsg = '';

		// valores del formulario
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == '')
			$errMsg = 'No has introducido el nombre de usuario';
		if($password == '')
			$errMsg = 'No has introducido contraseña';

		if($errMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT id, nombre, username, password FROM pdo WHERE username = :username');
				$stmt->execute(array(
					':username' => $username
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
					$errMsg = "No se ha encontrado al usuario $username";
				}
				else {
					if($password == $data['password']) {
						$_SESSION['name'] = $data['nombre'];
						$_SESSION['username'] = $data['username'];
						$_SESSION['password'] = $data['password'];

						header('Location: dashboard.php');
						exit;
					}
					else
						$errMsg = 'La contraseña no es correcta.';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>

<html>
<head><title>Login</title></head>
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
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>Login</b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					<input type="text" name="username" placeholder="Username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" autocomplete="off" class="box"/><br /><br />
					<input type="password" name="password" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" autocomplete="off" class="box" /><br/><br />
					<input type="submit" name='login' value="Login" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>
