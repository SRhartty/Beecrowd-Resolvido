
<?php

$segundos = intval(fgets(STDIN));

$horas = 0;
$minutos = 0;

// while ($segundos > 60) {
//     switch (true) {
//         case $segundos >= 3600:
            $horas = (int)($segundos / 3600);
            $segundos = $segundos % 3600;
        //     break;
        // case ($segundos <=3599 && $segundos >= 60):
            $minutos = (int)($segundos / 60);
            $segundos = $segundos % 60;
//             break;  
//     }
// }

echo $horas . ':' . $minutos . ':' . $segundos . PHP_EOL;
