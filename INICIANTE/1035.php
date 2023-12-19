<?php

list($a, $b, $c, $d) = array_map('intval', explode(' ', readline()));

function resolver($a, $b, $c, $d){
    if($b > $c && $d > $a && $c + $d > $a + $b && $c > 0 && $d > 0 && $a % 2 == 0){
       echo 'Valores aceitos';
       return;
    }

    echo 'Valores nao aceitos' . PHP_EOL;
}

resolver($a, $b, $c, $d);