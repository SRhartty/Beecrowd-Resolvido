<?php

$a = floatval(fgets(STDIN));
$b = floatval(fgets(STDIN));

$media = (($a*3.5)+($b*7.5))/(3.5 + 7.5);

echo "MEDIA = " . number_format($media, 5, '.', '') . PHP_EOL;
