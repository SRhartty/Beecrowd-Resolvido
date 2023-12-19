
<?php

$segundos = intval(fgets(STDIN));

$horas = 0;
$minutos = 0;

$horas = (int)($segundos / 3600);
$segundos = $segundos % 3600;
$minutos = (int)($segundos / 60);
$segundos = $segundos % 60;

echo $horas . ':' . $minutos . ':' . $segundos . PHP_EOL;
