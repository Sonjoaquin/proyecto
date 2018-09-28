<?php

$numero = 10;

for ($i=0; $i < $numero; $i++) {
	$resultado = $resultado * ($i + 1);
}

echo 'El resultado de ' . $numero . ' ! es' . $resultado . '<br>';

$resultado = 1;

for ($i=1; $i <= $numero; $i++) {
	$resultado = $resultado * $i;
}

echo 'El resultado de ' . $numero . ' ! es' . $resultado . '<br>';

$resultado = 1;
$contador = 1;

while ($contador <= $numero) {
	$resultado = $resultado * $contador;
	$contador = $contador + 1;
}

echo 'El resultado de ' . $numero . ' ! es' . $resultado . '<br>';

?>

<br>
<br>
<a href="index.php">Regresar al menú</a>