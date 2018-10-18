<?php
include "etiqueta.php";
include "enlace.php";
include 'migasPan.php';
include 'MigasPanContenedor.php';

$migas = new MigasPanContenedor('=>',"section");

$migas->agregaNodo("Home", "https://iescierva.net");
$migas->agregaNodo("Noticias", "https://iescierva.net/noticias");
$migas->agregaNodo("Noticias Académicas", "https://iescierva.net/noticias/academicas");

echo $migas->mostrar();
