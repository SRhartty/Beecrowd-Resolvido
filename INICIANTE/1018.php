<?php

$valor = intval(fgets(STDIN));


$total = $valor;
$cem = 0;
$cinquenta = 0;
$vinte = 0;
$dez = 0;
$cinco = 0;
$dois = 0;
$um = 0;


while ($valor > 0) {
    switch (true) {
        case $valor >= 100:
            $cem = (int)($valor / 100);
            $valor = $valor % 100;
            break;
        case ($valor <= 99 && $valor >= 50):
            $cinquenta = (int)($valor / 50);
            $valor = $valor % 50;
            break;
        case $valor <= 49 && $valor >= 20:
            $vinte = (int)($valor / 20);
            $valor = $valor % 20;
            break;
        case $valor <= 19 && $valor >= 10:
            $dez = (int)($valor / 10);
            $valor = $valor % 10;
            break;
        case $valor <= 9 && $valor >= 5:
            $cinco = (int)($valor / 5);
            $valor = $valor % 5;
            break;
        case $valor <= 4 && $valor >= 2:
            $dois = (int)($valor / 2);
            $valor = $valor % 2;
            break;
        case $valor = 1:
            $um = (int)($valor / 1);
            $valor = $valor % 1;
            break;
        default:
            $valor = 0;
            break;
    }
}

echo $total . PHP_EOL;
echo $cem .' nota(s) de R$ 100,00'. PHP_EOL;
echo $cinquenta. ' nota(s) de R$ 50,00' .PHP_EOL;
echo $vinte. ' nota(s) de R$ 20,00' .PHP_EOL;
echo $dez. ' nota(s) de R$ 10,00' .PHP_EOL;
echo $cinco. ' nota(s) de R$ 5,00' .PHP_EOL;
echo $dois. ' nota(s) de R$ 2,00' .PHP_EOL;
echo $um. ' nota(s) de R$ 1,00' .PHP_EOL;

