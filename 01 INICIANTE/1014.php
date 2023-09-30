<?php

$distancia = intval(fgets(STDIN));
$litros = fgets(STDIN);

$km_litros = $distancia / $litros;

echo  number_format($km_litros, 3, '.', '') . ' km/l' . PHP_EOL; 