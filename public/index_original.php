<b>Esto está fuera de php</b>
<?= "<h1> Hola mundo </h1>" ?>
<i>Por tanto será ignorado</i>

<?php $numero =100 ?>
<?php if ($numero == 100) { ?>
<br>El numero es 100
<?php } else if ($numero > 100) { ?>
<br>El numero es mayor que 100
<?php } else { ?>
<br> El numero es menor que 100
<?php } ?>
<br> 
<?php
$cadena ="Esto es una variable";
echo $cadena;
echo "<br><br>";
$miArray = ['España'=> 'Madrid',
			'Francia'=>'Paris',
			'Portugal'=>'Lisboa'];

	foreach ($miArray as $key => $value) {
		echo "La capital de $key es $value";
		echo"<br>";
	}
