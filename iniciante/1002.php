<?php
$raio = floatval(fgets(STDIN));
const PI = 3.14159;

$area = PI * (pow($raio,2));

echo 'A='.number_format($area, 4, '.', ''). PHP_EOL;
