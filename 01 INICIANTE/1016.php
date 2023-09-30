<?php

$distancia = intval(fgets(STDIN));

$tempo = (60 * $distancia) / 30;

echo $tempo . ' minutos' . PHP_EOL;;