<?php
	require 'config.php';

	if(isset($_POST['removeuser'])) {
		$errMsg = '';
		// username o id de formulario
		$usernameid = $_POST['usernameid'];

		if($usernameid == '')
			$errMsg = 'Introduce usuario o id';

		if($errMsg == '') {
			try{
				$stmt = $connect->prepare('DELETE FROM pdo WHERE  username = :username OR id = :id');
				$stmt->execute(array(
					':id' => $usernameid,
					':username' => $usernameid
					));

				$errMsg = 'El usuario ' . $usernameid . ' ha sido eliminado.';

			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
if(empty($_SESSION['name']))
    header('Location: login.php');
?>

<html>
<head><title>Remove User</title></head>
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
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>Elimina usuarios</b></div>
			<div style="margin: 15px">
				<form action="" method="post">
				Introduce usuario o ID <br>
					<input type="text" name="usernameid" autocomplete="off" class="box"/><br /><br />
					<input type="submit" name='removeuser' value="Eliminar" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>
