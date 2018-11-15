<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
	<div class="row">
		<div class="col-3">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control"
			<?php mostrar_campo('nombre')?>
			>
			<?php mostrar_error_campo('nombre',$errores) ?>
	</div>

	<p>
		<label for="apellidos">Apellidos</label>
		<input type="text" name="apellidos"
		<?php mostrar_campo('apellidos') ?>
		>
		<?php mostrar_error_campo('apellidos', $errores) ?>
	</p>
	<p>
		<label for="email">Email</label>
		<input type="email" name="email"
		<?php mostrar_campo('email') ?>
		>
		<?php mostrar_error_campo('email', $errores); ?>
	</p>
	<p>
		<label for="clave1">Clave</label>
		<input type="password" name="clave1">
		<?php mostrar_error_campo('clave1', $errores) ?>
	</p>
	<p>
		<label for="clave2">Repetir Clave</label>
		<input type="password" name="clave2">
	</p>
		<p>
			<label>
				<input type="submit" value="Enviar">
			</label>
		</p>
	</div>
</div>
</form>
