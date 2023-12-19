<?php

list($a, $b, $c) = array_map('floatval', explode(' ', readline()));
const PI = 3.14159;

$triangulo_retangulo = (($a * $c) / 2);
$circulo = PI * pow($c,2);
$trapezio = (($a + $b) * $c) / 2;
$quadrado = pow($b,2);
$retangulo = $a * $b;

echo "TRIANGULO: " . number_format($triangulo_retangulo, 3, '.', '') . PHP_EOL;
echo "CIRCULO: " .  number_format($circulo, 3, '.', '') . PHP_EOL;
echo "TRAPEZIO: " . number_format($trapezio, 3, '.', '') . PHP_EOL;
echo "QUADRADO: " . number_format($quadrado, 3, '.', '') . PHP_EOL;
echo "RETANGULO: " . number_format($retangulo, 3, '.', '') . PHP_EOL;