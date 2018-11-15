<html>
<head><title>PRUEBA de examen</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div align="center">
		<div style=" border: solid 1px #079B96; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:18px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>Examen test</b></div>
			<div style="margin: 15px">
				Bienvenido.
				<br>
				<p><a href="login.php">Inicie sesión</a> <br></p>
				<p>o</p>
				<p><a href="register.php">Regístrese</a> <br></p>
			</div>
		</div>
	</div>
</body>
</html>
