<?php
	require 'config.php';
	if(empty($_SESSION['name']))
		header('Location: login.php');

	if(isset($_POST['update'])) {
		$errMsg = '';

		// Getting data from FROM
		$nombre = $_POST['nombre'];
		$password = $_POST['password'];
		$passwordVerify = $_POST['passwordVerify'];

		if($password != $passwordVerify)
			$errMsg = 'Password not matched.';

		if($errMsg == '') {
			try {
		      $sql = "UPDATE pdo SET nombre = :nombre, password = :password WHERE username = :username";
		      $stmt = $connect->prepare($sql);                                  
		      $stmt->execute(array(
		        ':nombre' => $nombre,
		        ':password' => $password,
		        ':username' => $_SESSION['username']
		      ));
				header('Location: update.php?action=updated');
				exit;

			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'updated')
		$errMsg = 'Se ha actualizado correctamente. <a href="logout.php">Sal</a> y entra de nuevo para ver los cambios.';
?>

<html>
<head><title>Update</title></head>
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
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b><?php echo $_SESSION['name'] ?></b></div>
			<div style="margin: 15px">
				<form action="" method="post">
                    Username <br>
                    <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" disabled autocomplete="off" class="box"/><br /><br />
					Nombre <br>
					<input type="text" name="nombre" value="<?php echo $_SESSION['name']; ?>" autocomplete="off" class="box"/><br /><br />
					Password <br>
					<input type="password" name="password" value="<?php echo $_SESSION['password'] ?>" class="box" /><br/><br />
					Introduzca la password otra vez <br>
					<input type="password" name="passwordVerify" value="<?php echo $_SESSION['password'] ?>" class="box" /><br/><br />
					<input type="submit" name='update' value="Update" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>
