<?php

$dias = intval(fgets(STDIN));


$anos = (int)($dias / 365);
$dias = $dias % 365;
$meses = (int)($dias / 30);
$dias = $dias % 30;

echo $anos . ' ano(s)' . PHP_EOL;
echo $meses . ' mes(es)' . PHP_EOL;
echo $dias . ' dia(s)' . PHP_EOL;