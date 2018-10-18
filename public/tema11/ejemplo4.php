<?php

include "plantilla.php";
include "plantillaHtml.php";

$html = '<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Mi página con plantillas</title>
  </head>
  <body>
    <b>Hola %nombre%</b>
    <p>Estoy muy %animo%</p>
    <p>Vivo en %ciudad%</p>
  </body>
</html>';
$diccionario = [
                "nombre" => "Pepe",
                "animo" => "horny",
                "ciudad" => "Cuenca"
                ];
$plantilla = new PlantillaHtml($html);
$plantilla->renderData($diccionario);
