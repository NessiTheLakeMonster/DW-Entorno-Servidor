<?php

$segundos = 59;
$minutos = 59;
$horas = 12;

function pasarTiempo($s, $m, $h) {
    if ($s == 60) {
        $s = 0;
        $m++;
        if ($m == 60) {
            $m = 0;
            $h++;
            if ($h == 24) {
                $h = 0;
            }
        }
    }

    echo $h . ':' . $m . ':' . $s;
}

$segundos++;

pasarTiempo($segundos, $minutos, $horas);

echo '<br>' . $horas . ':' . $minutos . ':' . $segundos;

?>