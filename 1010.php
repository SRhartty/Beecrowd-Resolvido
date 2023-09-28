<?php

list($codigo_peca1, $numero_peca1, $valor_unitario_peca1) = array_map('floatval', explode(' ', readline()));
list($codigo_peca2, $numero_peca2, $valor_unitario_peca2) = array_map('floatval', explode(' ', readline()));

$total_a_pagar = ($numero_peca1 * $valor_unitario_peca1) + ($numero_peca2 * $valor_unitario_peca2);

printf("VALOR A PAGAR: R$ %.2f\n", $total_a_pagar);
?>
