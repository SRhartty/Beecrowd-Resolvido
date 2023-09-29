<?php

list($a, $b, $c) = array_map('intval', explode(' ', readline()));

$maior_ab = ($a + $b + abs($a - $b)) / 2;
$maior_total = ($maior_ab + $c + abs($maior_ab - $c)) / 2;

echo $maior_total . " eh o maior" . PHP_EOL;
