<?php

$nome_vendedor = fgets(STDIN);
$salario_vendedor = floatval(fgets(STDIN));
$total_vendas = floatval(fgets(STDIN));

$comicao = $total_vendas * 0.15;

$salario_total = $salario_vendedor + $comicao;

echo 'TOTAL = R$ ' . number_format($salario_total, 2, '.', '') . PHP_EOL;