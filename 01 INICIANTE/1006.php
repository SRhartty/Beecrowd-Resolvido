<?php

$a = floatval(fgets(STDIN));
$b = floatval(fgets(STDIN));
$c = floatval(fgets(STDIN));

$media = (($a*2)+($b*3)+($c*5))/(2 + 3 + 5);

echo "MEDIA = " . number_format($media, 1, '.', '') . PHP_EOL;
