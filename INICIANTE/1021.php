<?php

// Função para calcular notas e moedas
function calcularNotasEMoedas($valor) {
    $notas = [100, 50, 20, 10, 5, 2];
    $moedas = [1, 0.5, 0.25, 0.10, 0.05, 0.01];

    echo "NOTAS:\n";

    foreach ($notas as $nota) {
        $quantidade = intval($valor / $nota);
        echo "$quantidade nota(s) de R$ $nota.00\n";
        $valor = fmod($valor, $nota);
    }

    echo "MOEDAS:\n";

    foreach ($moedas as $moeda) {
        $quantidade = intval($valor / $moeda);
        echo "$quantidade moeda(s) de R$ " . number_format($moeda, 2) . "\n";
        $valor = round(fmod($valor, $moeda), 2);
    }
}

// Leitura do valor de ponto flutuante
$valor = floatval(readline());

// Chamada da função
calcularNotasEMoedas($valor);