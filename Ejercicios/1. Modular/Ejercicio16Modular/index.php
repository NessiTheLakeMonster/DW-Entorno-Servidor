<?php

$segundos = 59;
$minutos = 59;
$horas = 12;

function pasarTiempo(&$segundos, &$minutos, &$horas) {
    if ($segundos == 60) {
        $segundos = 0;
        $minutos++;
        if ($minutos == 60) {
            $minutos = 0;
            $horas++;
            if ($horas == 24) {
                $horas = 0;
            }
        }
    }
}

$segundos++;
pasarTiempo($segundos, $minutos, $horas);

echo '<br>' . $horas . ':' . $minutos . ':' . $segundos;

?>