<?php

$num_funcionario = intval(fgets(STDIN));
$horas_trabalhadas = intval(fgets(STDIN));
$valor_hora = floatval(fgets(STDIN));

$salario = $horas_trabalhadas * $valor_hora;

echo 'NUMBER = ' . $num_funcionario . PHP_EOL;
echo 'SALARY = U$ ' . number_format($salario, 2, '.', '') . PHP_EOL; 