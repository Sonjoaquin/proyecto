<?php

$fuente = fopen("lista.txt","a+");

fwrite($fuente, "Hola Mundo\n");

fclose($fuente);
