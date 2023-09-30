<?php

list($x1, $y1) = array_map('doubleval', explode(' ', readline()));
list($x2, $y2) = array_map('doubleval', explode(' ', readline()));

$distancia = sqrt(pow($x2 - $x1 , 2) + pow($y2 - $y1, 2));

echo number_format($distancia, 4, '.', '') . PHP_EOL;