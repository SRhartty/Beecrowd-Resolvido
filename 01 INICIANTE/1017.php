<?php

$tempo = intval(fgets(STDIN));
$velocidade = intval(fgets(STDIN));

$distancia = $tempo * $velocidade;
$combustivel = $distancia / 12;

echo number_format($combustivel, 3, '.', '') . PHP_EOL;